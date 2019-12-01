<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
   <meta charset="utf-8">
   <style media="screen">
        td {
   border: 1px solid black;
   text-align: center;
   }
   .header {
   background-color: yellow;
   font-weight: bold;
   }
   .diag1 {
   background-color: blue;
   }
   .diag2 {
   background-color: red;
   }
   </style>
 </head>

 <body>
    <form method="post">
        Liczba kolumn<input type="number" name="width" /><br/>
        Liczba wierszy<input type="number" name="height" />
        <input type="submit" value="KLIK">
     </form>
     <table>

      <?php
         if ( isset($_POST["width"]) && isset($_POST["height"]) ) {
         $width=++$_POST["width"];
         $height=++$_POST["height"];
         $dsum1=$dsum2=0;
         for($x=0;$x<$width;$x++) {
            ?><tr><?php
            for($y=0;$y<$height;$y++) {
               ?><td <?php
               if ($x==0 && $y==0) {
                  ?>class="header"></td><?php
               }
               elseif ($x==0) {
                  ?>class="header"><?php
                  echo $y;
                  ?></td><?php
               }
               elseif ($y==0) {
                  ?>class="header"><?php
                  echo $y;
                  ?></td><?php
               }
               elseif ($x==$y) {
                  ?>class="diag1"><?php
                  echo $x*$y;
                  ?></td><?php
                  $dsum1+=$x*$y;
               }
               elseif ($x==($width-$y)) {
                  ?>class="diag2"><?php
                  echo $x*$y;
                  ?></td><?php
                  $dsum2+=$x*$y;
               }
               else {
                  ?>><?php
                  echo $x*$y;
                  ?></td><?php
               }
            }
            ?></tr><?php
         }
         echo "suma niebieskiej przekątnej: ".$dsum1;
         echo "suma czerwonej przekątnej: ".$dsum2;
      }

      ?>
     </table>
  </body>
</html>
