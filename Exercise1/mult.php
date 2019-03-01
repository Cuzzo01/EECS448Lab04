<html>
  <head>

  </head>
  <body>
    <table border="1">
    <?php
      for ($i = 0; $i < 101; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 101; $j++) {
          if ($i == 0) {
            if ($j == 1) {
              echo "<td></td>";
            }
            echo "<th>$j</th>";
          } else {
            if ($j == 1) {
              echo "<th>$i</th>";
            }
            $product = $i * $j;
            echo "<td>$product</td>";
          }
        }
        echo "</tr>";
      }
     ?>
   </table>
  </body>
</html>
