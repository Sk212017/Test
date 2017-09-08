<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="dashboard(event, 'Room_Temperature')">Room Temperature</button>
  <button class="tablinks" onclick="dashboard(event, 'Lights_and_Fan')">Lights and Fan</button>
  <button class="tablinks" onclick="dashboard(event, 'Security')">Security</button>
</div>

<div id="Room_Temperature" class="tabcontent">
  <h3>Room Temperature</h3>
  <img id="room_temp" onclick="room_temp()" src="images/temp.jpg" width="150" height="180">
   <h2>Celcius: "C" Fahrenheit: "F" Kelvin: "K"</h2>
  Temperature:
  <input type="text" id="tempinput" value="">
  <select size="3" id="initialtemp">
    <option value="c" selected>C</option>
	<option value="f">F</option>
	<option value="k">K</option>
  </select>
  
  

  <button type="button" onclick="convert()">Convert</button>
  <script src="scripts/temp.js">
  
</script>
  <br>
  <br>Room Temperature is:
    <input type="text" id="result">

</div>

<div id="Lights_and_Fan" class="tabcontent">
  <body align="center" bgcolor="#9999ff">

 <h1>To Switch on lights and fans</h1>

 <img id="myImage" onclick="changeImage()" src="images/bulb_off.jpg" width="150" height="180">
 <img id="myImage_1" onclick="changeImage_1()" src="images/bulb_off.jpg" width="150" height="180" align="adjacent">
 <img id="fan" onclick="changeImage_2()" src="images/fan.jpg" width="150" height="180" align="adjacent">

 <h2>Click the light bulb to turn on/off the light.</h2>

 <script src="scripts/lights_fan.js">
</script> 
</div>

<div id="Security" class="tabcontent">
 <body align="center" bgcolor="#9999ff">
  <h1>Security  is our primary concern </h1>
  <img id="door" onclick="changeImage_3()" src="images/door_close.jpg" width="150" height="180">
   <script src="scripts/security.js">
</script> 
</div>

<script src="scripts/tabs.js"></script>
     
</body>
</html> 
