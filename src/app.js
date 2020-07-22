$(document).ready(function() {
  
  
  $("#searchbar").on('keypress', function(e) {
    
    if(e.which == 13) {
      $(document).ajaxStart((e) => {
        $(".loading").show()
      })
      let search = $("#searchbar").val();
      let type = $("#type").children(":selected").attr("id");
      let limit = $("#limit").children(":selected").attr("value");
      
      // e.preventDefault();
      $.ajax({
        url: "search.php",
        method: "GET",
        data: {search:search, type:type, limit:limit},
        success: function(data) {
          let response = JSON.parse(data);
          let results = response.results;

          // console.log(results)
 
          $("#card_container").empty();

          if (type == "album") {
            for (let result of results) {
              $("#card_container").append(
                `
                <div class="card col-3 col-md-4 col-sm-6 text-center my-5">
                  <img src="${result.artworkUrl100.replace("100x100", "1000x1000")}" class="card-img-top my-3 w-100">
                  <div class="card-body w-100">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text py-4">${result.collectionCensoredName}</p>
                      <div class="btn btn-primary">buy it</div>
                  </div>
                </div>
                `
              )
            }

          } else if (type == "song") {
            for (let result of results) {
              $("#card_container").append(
                `
                <div class="card col-3 col-md-4 col-sm-6 text-center my-5">
                  <img src="${result.artworkUrl100.replace("100x100", "1000x1000")}" class="card-img-top my-3 w-100">
                  <div class="card-body w-100">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text py-4">${result.trackName}</p>
                      <div class="card-text py-2">
                        <audio width="100%" height="auto" controls>
                          <source src="${result.previewUrl}" type="audio/mpeg">
                          no disponible
                        </audio>
                      </div>
                      <div class="btn btn-primary">buy it</div>
                  </div>
                </div>
                `
              )
            }
          } else {
            for (let result of results) {
              $("#card_container").append(
                `
                <div class="card col-3 col-md-4 col-sm-6 text-center my-5">
                  <video class=" video-test" preload="none" poster="${result.artworkUrl100.replace("100x100", "200x200")}">
                    <source src="${result.previewUrl}">
                  </video>
                  <div class="btn btn-light w-25 my-2 mx-auto">play</div>
                  <div class="card-body w-100">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text py-4">${result.trackName}</p>
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

  $("#login_btn").click( ()=>{
    $.ajax("../loging.php")
    .done(function(data){

    })
  })

  $("#register_btn").click( ()=>{
    $.ajax("../register.php")
    .done(function(data){

    })
  })


  $(document).ajaxComplete((e) => {
    $(".loading").hide()
  })
});