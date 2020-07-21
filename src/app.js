
$(document).ready(function() {
  $(document).ajaxStart((e) => {
    $(".loading").show()
  })


  $("#searchbar").on('keypress', function(e) {

    if(e.which == 13) {

      let search = $("#searchbar").val();
      let type = $("#type").children(":selected").attr("id");
      let limit = $("#limit").children(":selected").attr("value");
      
      e.preventDefault();
       
      $.ajax({
        url: "search.php",
        method: "GET",
        data: {search:search, type:type, limit:limit},
        success: function(data) {
          let response = JSON.parse(data);
          let results = response.results;

          console.log(results)
 
          $("#card_container").empty();
    
          if (type == "album") {
            for (let result of results) {
              $("#card_container").append(
                `
                <div class="card m-2">
                  <img src="${result.artworkUrl100}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text">${result.collectionCensoredName}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                `
              )
            }

          } else {
            for (let result of results) {
              $("#card_container").append(
                `
                <div class="card m-2">
                  <img src="${result.artworkUrl100}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text">${result.trackName}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                `
              )
            }
          }   
        }
      })
    
    } 
  })


  $(document).ajaxComplete((e) => {

    $(".loading").hide()

  })

});