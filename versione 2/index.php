<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ajax</title>
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
  </head>
  <body>
   <header>
    <div class="container">
     <img src="img/logo.png" alt="logo" />
    </div>
   </header>
    <!-- stampa-->
   <div class="cds-container container">
   </div>
    <!-- TEMPLATE-->
    <script id="hb-template" type= "text/x-handlebars-template">
    <div class="cd">
        <img class="foto"src="{{poster}}" alt="">
        <h3>{{title}}</h3>
        <span class="author">{{author}}</span>
        <span class="genre">{{genre}}</span>
        <span class="year">{{year}}</span>
    </div>
    </script>
  </body>
</html>
