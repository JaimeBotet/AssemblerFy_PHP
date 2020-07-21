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
                      <div class="btn btn-primary">Go somewhere</div>
                  </div>
                </div>
                `
              )
            }

          } else if (type == "song") {
            for (let result of results) {
              $("#card_container").append(
                `
                <div class="card m-2">
                  <img src="${result.artworkUrl100}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text">${result.trackName}</p>
                      <div class="card-text">
                        <audio width="100%" height="auto" controls>
                          <source src="${result.previewUrl}" type="audio/mpeg">
                        </audio>
                      </div>
                      <div class="btn btn-primary">Go somewhere</div>
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
                  <div class="card-body">
                      <div class="card-text">
                        <video width="100%" height="auto" controls>
                          <source src="${result.previewUrl}">
                        </video>
                      </div>
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text">${result.trackName}</p>                   
                      <div class="btn btn-primary">Go somewhere</div>
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