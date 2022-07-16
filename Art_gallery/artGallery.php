<!DOCTYPE html>
<html>
  <head>

    <title>Booking</title>

    <link rel="stylesheet" href="styles.css"/>


  </head>

  <body style="background-image: url('van.jpg');" >

    <header>

      <nav>
				<table id="boxTrial">
					<tr>
            <td><img src="logo.png" width="160px" height="60px"></img></td>
						<td><a href="main.php"><h2>Home</h2></a></td>
						<td><a href="main.php#genres"><h2>Artworks</h2></a></td>
						<td><a href="artGallery.php"><h2>Booking</h2></a></td>
						<td><a href="about_us.html"><h2>About Us</h2></a></td>
					</tr>
				</table>
			</nav>

    </header>

    <!--Creating a booking schedule using a calendar-->

      <div id="box">

        <!--the calendar division stores the month, weekday names and days-->
        <div id="calendar">

          <form method="post" action='#' onsubmit="return false"> 
            <fieldset>
              <lablel>Month:</label>
                <select id ="selectedMonth">
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="Jun">Jun</option>
                <option value="Jul">Jul</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
                </select>

                <input type='submit' name="submit" class="submit" onclick="updateCalendar()" />
            </fieldset>
          </form>

          <div class ="month">

            <div class="date">
              <h4></h4>
              <p></p>
            </div>

          </div>

          <div class="weekdays">
            <div>SUN</div>
            <div>MON</div>
            <div>TUE</div>
            <div>WED</div>
            <div>THU</div>
            <div>FRI</div>
            <div>SAT</div>
          </div>

          <div class="days"></div>

      </div>
      

      <div id="bookingSection">
        <div>
          <h2 class="bookingDisplay">Book a ticket For an in person Viewing Of Our Art Gallery!</h2> 
        </div>

        <div class="dateSelect">
          <h3 class="bookingDisplay">Our Hours</h3>
          <p class="bookingDisplay">Weekdays & Weekends: 12:00pm - 14:00pm</p>
          <h4 class="bookingDisplay">Select a date by clicking on one</h4> 

          <div class="form">
            <form method="POST" action="" >
              <fieldset>
                <p>Date Selected</p>
                <input type="text" name="dateSelected" id="date" READONLY/>

                <p>Enter Your Name: </p>
                <input type="text" name="fullName"/>

                <p>Enter your email</p>
                <input type="email" name="email">

                <input type='submit' name="submitUserInfo"/>
              </fieldset>
            </form>
          </div>
        </div>

          <a href="bookingData.php" target="_blank">Admin Database Page</a>

      </div>



    <script type="text/javascript" src="JavaScript.js"></script>

    <?php

    if (!empty($_POST)){
        $connection=mysqli_connect("localhost", "booking_user", "pass", "artgallery_form");

      if (mysqli_connect_errno()){
        die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
      }

      //storing information into the ratinginfo table
      $sql = "INSERT INTO bookinginfo (name, email, date) VALUES(
        '{$connection->real_escape_string($_POST['fullName'])}',
        '{$connection->real_escape_string($_POST['email'])}',
        '{$connection->real_escape_string($_POST['dateSelected'])}'
        )";
        
      $insert = $connection->query($sql);
    
      if($insert == TRUE){
          //nothing happens
      }else{
        die("Error: {$connection->errno} : {$connection->error}");
        
      }

    /* CREATE TABLE bookingInfo(
    -> id INT(11) NOT NULL AUTO_INCREMENT,
    -> name VARCHAR(50) NOT NULL,
    -> email VARCHAR(50) NOT NULL,
    -> date VARCHAR(50) NOT NULL,
    -> PRIMARY KEY (id)
    -> );
    */

    }

    ?>
  
</body>

</html>
