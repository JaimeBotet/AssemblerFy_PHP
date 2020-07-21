


$("#searchbar").on('input propertychange', function() {

 
  
  let search = $("#searchbar").val();


  console.log(search);
  
  $.ajax({
    url: "search.php",
    method: "GET",
    data: {search:search},
    success: function(data) {
      let results = data.results;

      for (let result of results) {
        $("#card_container").append(
          `
          
          `
        )
      }


    }


  })

})