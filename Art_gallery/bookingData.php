<!DOCTYPE html>
<html>
  <head>

    <title>Booking Data</title>

    <link rel="stylesheet" href="stylesdata.css"/>


  </head>

  <body>
    <h1> Booking Data </h1>
    <form method="post">
      Enter Admin Username:<input type="text" name="user"/>
      Enter Admin Password:<input type="text" name="pass"/>
      <input type="submit" />

    </form>

    <?php
    //booking_user
    //pass
    if (!empty($_POST)){


      $connection=mysqli_connect("localhost", $_POST['user'], $_POST['pass'], "artgallery_form");

      if (mysqli_connect_errno()){
        die ("Database connection failed: Please Re-enter your Username and Password");
      }


      //DATE INFO
      $sqlDate = 'SELECT date FROM bookinginfo';
      $resultDates =mysqli_query($connection,$sqlDate);
      //$rowDateAmt = mysqli_num_rows($resultDates);
      $rowDateArray = array();

      while ($rowDatesData = mysqli_fetch_array($resultDates)) {
        array_push($rowDateArray, $rowDatesData['date']);
      }
      ////////////
      
      //NAME INFO
      $sqlName = 'SELECT name FROM bookinginfo';
      $resultNames =mysqli_query($connection,$sqlName);
      $rowArrayNames = array();

      while ($rowNameData = mysqli_fetch_array($resultNames)) {
        array_push($rowArrayNames, $rowNameData['name']);
      }
      ///////////////////////////


      $dateArray = array();
      $arrayNames = array();

      //adding array values to date Array
      for($i = 0; $i < sizeof($rowDateArray) ; $i++){
        if (in_array($rowDateArray[$i], $dateArray)) {
          //nothing happens
        }else{ //if there is no duplicate
          array_push($dateArray, $rowDateArray[$i]);
        }
      }

      //declaring arrayNames
      for($y = 0; $y < sizeof($dateArray); $y++){
        array_push($arrayNames, " ");
      }
      

      for($p = 0; $p < sizeof($rowDateArray); $p++){
        for($w = 0; $w < sizeof($dateArray); $w++){
          if ($rowDateArray[$p] == $dateArray[$w] ){
            $arrayNames[$w] = $arrayNames[$w].$rowArrayNames[$p].", ";
          }
        }
      }

      //printing data onto page
      echo("<br>");
      echo("<br>");
      echo("<br>");
      echo("<br>");
      echo("BOOKINGS ->");
      echo("<br>");

      for($c = 0; $c < sizeof($dateArray); $c++){
        echo("DATE: ".$dateArray[$c]."-----------Booked People: ".$arrayNames[$c]."<br>");
      }


    }

    ?>
  
</body>

</html>
