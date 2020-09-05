<?php
include 'vars.php';


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-ajax-dischi</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <header>
       <div class="container">
         <div class="logo">
           <img src="img/logo.png" alt="logo">
         </div>
       </div>
     </header>

     <main>
       <div class="container_main">
         <ul>

          <?php foreach ($data as $cd) { ?>

           <li>
             <img src="<?php echo $cd["poster"];?>" alt="">
             <h3><?php echo $cd["title"];?></h3>
             <p><?php echo $cd["author"];?></p>
              <p><?php echo $cd["genre"];?></p>
             <small><?php echo $cd["year"];?></small>
           </li>




          <?php } ?>

         </ul>

       </div>


     </main>


   </body>
 </html>
