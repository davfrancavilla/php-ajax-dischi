<?php
 require "db.php";
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dischi - Milestone 1</title>
     <link rel="stylesheet" href="dist/app.css">
 </head>
 <body>
     <nav></nav>
     <main>
         <div class="container">
             <?php foreach ($database as $disc){ ?>
                 <div class="disc">
                     <img src="<?php echo $disc["poster"] ?>" alt="<?php echo $disc["title"] ?>-poster">
                     <div class="title"><?php echo $disc["title"] ?></div>
                     <div class="artist"><?php echo $disc["author"] ?></div>
                     <div class="year"><?php echo $disc["year"] ?></div>
                 </div>
             <?php }?>
         </div>
     </main>
 </body>
 </html>