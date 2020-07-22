$(document).ready(function() {
  $.ajax({
    url: "https://itunes.apple.com/search?term=song",
    success: (data)=>{
      let response = JSON.parse(data);
      let results = response.results;

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
                          <source src="${result.previewUrl}" >
                          no disponible
                        </audio>
                      </div>
                      <div class="btn btn-primary w-50 mx-auto">Play</div>
                  </div>
                </div>
          `
        )
      }
    }
  })

  
  $("#searchbar").on('keypress', function(e) {
    
    if(e.which == 13) {
      $(document).ajaxStart((e) => {
        $(".loading").show()
      })
      let search = $("#searchbar").val()
      let type = $("#type").children(":selected").attr("id");
      let limit = $("#limit").children(":selected").attr("value");
      
      $.ajax({
        url: "search.php",
        method: "GET",
        data: {search:search, type:type, limit:limit},
        success: function(data) {
          let response = JSON.parse(data);
          let results = response.results;
 
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
                          <source src="${result.previewUrl}" >
                          no disponible
                        </audio>
                      </div>
                      <div class="btn btn-primary w-50 mx-auto">Play</div>
                  </div>
                </div>
                `
              )
            }
          } else {
            for (let result of results) {
              let i = 0;
              $("#card_container").append(
                `
                <div class="card col-3 col-md-4 col-sm-6 text-center my-5">
                  <video class="custom-video" id="video-${i}" preload="none" poster="${result.artworkUrl100.replace("100x100", "200x200")}">
                    <source src="${result.previewUrl}">
                  </video>
                  <input type="button" class="btn btn-light w-25 my-2 mx-auto play" value="play">
                  <div class="card-body w-100">
                      <h5 class="card-title">${result.artistName}</h5>
                      <p class="card-text py-4">${result.trackName}</p>
                  </div>
                </div>
                `
              )
              i++
            }
          }
          // 
        }
      })
    }
  })

  $("#login_btn").click( ()=>{
    if($("#login_btn").val()=="Login"){
      location.href = "./login.php";
    }
    else if($("#login_btn").val()=="Sign Out"){
      //End session and change the button value
      $("#login_btn").val()=="Login";
    }
    // $.ajax("./loging.php")
    // .done(function(data){

    // })
  })

  $("#register_btn").click( ()=>{
    console.log("Pressing Register Button!");
    location.href = "./register.php";
  })


  $(document).ajaxComplete((e) => {
    $(".loading").hide()
  })

  // NOTE: idea https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_video_js_prop
  // TODO: end this action, play video with external button 
  
  let video = $("#video-0");
  
  function playPause() { 
    if (video.paused()) 
      video.play(); 
    else 
      video.pause(); 
  } 
  $(".play").on("click", ()=>{
  
    playPause()
  })
});


