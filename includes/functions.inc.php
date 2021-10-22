<?php


    function performQuery($sql) {
      global $mysqli;
      $result = mysqli_query($mysqli, $sql);

      if($result) {
        // echo "Query success <br>";
        return $result;
        }
      else {
        echo "Der gik noget galt";
        return null;
        }
    }
