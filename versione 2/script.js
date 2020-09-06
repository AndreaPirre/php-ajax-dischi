function getData() {
 $.ajax({
   url: "data.php",
   method: "GET",
   success: function(data) {
      printInfo(data);
       console.log("dati cd : ", data);
   },
   error: function(error) {
     console.log("error", error);
   }
 });
}


function printInfo(database) {

  var target = $(".cds-container");
  var template = $("#hb-template").html();
  var compiled = Handlebars.compile(template);

  for (var i = 0; i < database.length; i++) {
   var allInfo = database[i];
   console.log(allInfo);

   var compiledAd = compiled(allInfo);
   target.append(compiledAd);
  }
}


function init() {
  getData();
}

$(document).ready(init);
