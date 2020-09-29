<?php

include __DIR__ . '/partials/templates/header.php';
include __DIR__ . '/partials/show/server.php';

 ?>

     <body>
         <div class="container">
             <h4>STANZA <?php echo $row['room_number']; ?></h4>
             <ul class = "list-group">
                 <li class = "list-group-items">ID: <?php echo $row['id']; ?></li>
                 <li class = "list-group-items">Nr. Stanza: <?php echo $row['room_number']; ?></li>
                 <li class = "list-group-items">Piano: <?php echo $row['floor']; ?></li>
                 <li class = "list-group-items">Nr. posti letto: <?php echo $row['beds']; ?></li>
             </ul>
             <a href="index2.php">Torna indietro!</a>
         </div>
     </body>
 </html>
