const month = new Array("Jan","Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");//array of months
const today = new Date();
const currentDate = new Date();
const fixedCurrentDate = new Date();
var selectedMonthIndex = currentDate.getMonth();
var currentdateNum;

document.querySelector('.submit').addEventListener("click",() =>{
  var selectedMonth = document.querySelector('#selectedMonth');
  var selectedMonthValue = selectedMonth.value;

  for (var o =0; o < 12; o++){
    if(selectedMonthValue == month[o]){
      selectedMonthIndex = o;
    }
  }
  today.setMonth(selectedMonthIndex);
  updateCalendar();
});

function updateCalendar(){
  var dayNumArray = new Array(); //array of days in the current selected month

  //making the calendar display todays Date and month
  var currentMonth = month[today.getMonth()];
  document.querySelector(".date h4").innerHTML = currentMonth + "   " + today.getFullYear();
  document.querySelector(".date p").innerHTML = ("Current Date: "+ currentDate.toDateString());


  var dayNum = document.querySelector(".days");
  var amtDays = new Date(today.getFullYear(), today.getMonth() +1,0).getDate(); //today.getMonth + 1 returns the next month while ",0" returns the last day of the previous month

  var indexFirstDay = new Date(today.getFullYear(), today.getMonth(),1).getDay();//returns index (of the weekday) of the first day of current month
  var amtDaysPrevMonth = new Date(today.getFullYear(), today.getMonth(),0).getDate();

  //making the calendar display the dates of the current month and prev and next month to fill calender
  var days = "";
  var counter = 0;

  //the loop is iterated j amount of times until the first day of the current month is in the correct index
  for(var j = indexFirstDay; j >0; j--){
    days += `<div class="prevDate">${amtDaysPrevMonth- j+1}</div>`;
    dayNumArray.push(-j+1);
    counter++;
  }

  //stores the amount of days in the current month and prints it to the calendar
  for(var i = 1; i <= amtDays; i++){
    if (i === new Date().getDate() && today.getMonth() === new Date().getMonth()){
      days += `<div class="currentDate">${i}</div>`;
      currentdateNum = i;
    }else{
      days += `<div>${i}</div>`;
    }
    dayNumArray.push(i);
    counter++;
  }

  //fills the remaining slots of the calendar (the next month)
  var remainingSlots = 42 - counter;
  for(var x = 1; x < remainingSlots+1 ; x++){
    days += `<div class="nextDate">${x}</div>`;
    dayNumArray.push(x+amtDays);
  }
  dayNum.innerHTML = days;

  //Make it so that when a user clicks on a date, a screen pops up where they can see and input a date to select their booking
  document.querySelector('.days').addEventListener("click",function(e){
    
    //figure out the month and day selected:
    var monthSel = month[today.getMonth()];
    var daySelected = 0;

    const padding = 32;
    const boxOnTop = 429;

    var mouseX = e.clientX - padding;
    var mouseY = e.clientY - boxOnTop;
    
    console.log("x: " + mouseX + "Y: " + mouseY);

    const dayBoxW = 750/7;
    const dayBoxH = 426/6;
    //finding the index position the mouse would be
    MouseXIndex = Math.floor(mouseX/dayBoxW);
    MouseYIndex = Math.floor(mouseY/dayBoxH);

    //figuring out which date was selected using the array above and mouse position
    for(var p = 0; p<42;p++){
      if (p == (MouseXIndex+(MouseYIndex*7))){
        daySelected = dayNumArray[p];
      }
    }

    //if the user selects a day for the next month on the current month
    //the month and year should change
    if (daySelected > amtDays){
      if (today.getMonth() == 11){
        var todaysMonth = 0;
        var year = today.getFullYear() + 1;
      }else{
        var todaysMonth = today.getMonth()+1;
        var year = today.getFullYear()
      }
      
    //if the user selects the previous month date with the date already passed 
    //the month and year should change
    }else if (daySelected < 1){
      if (today.getMonth == 0){
        var todaysMonth = 11;
        var year = today.getFullYear() - 1;
      }else{
        var todaysMonth = today.getMonth() - 1;
        var year = today.getFullYear();
      }

    }else{
      var todaysMonth = today.getMonth();
      var year = today.getFullYear();
    }

    var todaysDate = today.getDate();
    var currentMonth =  today.getMonth();

    if(currentMonth >= fixedCurrentDate.getMonth() && currentMonth <= todaysMonth || year > today.getFullYear()){
      if(daySelected > currentdateNum){
        
        if (daySelected > amtDays){
          daySelected = daySelected - amtDays;
        }
        if (daySelected < 1){
          daySelected = daySelected + amtDaysPrevMonth;

        }


      document.querySelector(".dateSelect h4").innerHTML = "Successful Date Chosen";

      //creating the form
      /*
      document.querySelector(".form").innerHTML = 
      `<form method="POST" action="" ><fieldset class>
        ${`<p>Enter Your Name: </p>`}
        ${`<input type="text" name="name" id="fullName"/>`}

        ${`<p>Enter your email</p>`}
        ${`<input class="bookingDisplay" type="email" >`}

        ${`<input type='submit'/>`}
      </fieldset></form>`;
      */

      //fullNameUser = document.getElementById("fullName").value;
      //console.log ("name is: " + fullNameUser);

      document.getElementById('date').value = (month[todaysMonth] + " " + year + ", " + daySelected);

    }else{
      document.querySelector(".dateSelect h4").innerHTML = "Invalid Date. Please select another date";
      document.getElementById('date').value = null;
      }
  }else{
    document.querySelector(".dateSelect h4").innerHTML = "Invalid Date. Please select another date";

    document.getElementById('date').value = null;
  }

  },false);

}
updateCalendar();

