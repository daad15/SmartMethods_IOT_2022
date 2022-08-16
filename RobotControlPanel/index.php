<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Control Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet"></link>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"></link>
    <style>
        body {
            font-family: 'Markazi Text', serif;
            text-align: center;
            font-size: 30px;
            align-items: center;
            background: #F8F8FF;
        }

        p { 
            margin:0; 
        }
        h2 { 
            margin:1%; 
        }

        #btn {
            padding: 10px;
            background-color: #568f8f;
            color: #FFFFFF;
            border: 0px;
            cursor: pointer;
            border-radius: 1px;
            margin: 10px;
            width: 25%;
            font-size: 24px;
            font-family: 'Markazi Text';
            align-items: center;
        }

/* the following CSS code written by @@kaypooma at code pen  */
@import url(https://fonts.googleapis.com/css?family=Lato:300);

.keys {
  font-family: 'Lato', sans-serif;    
  text-align: center;
  width: 500px;
  height: 200px;
  margin: auto;
}

.arr {
  cursor: pointer;
  width: 100px;
  height: 100px;
  text-align: center;
  line-height: 100px;
  background: grey;
  color: white;
  font-size: 50px;
  border-right: 10px solid darken(grey, 20);
  border-bottom: 10px solid darken(grey, 20);
  border-left: 10px solid darken(grey, 15);
  border-top: 10px solid darken(grey, 10);  
  display: inline-block;
  margin: 5px;
  transition: all .05s linear;
  user-select: none;
}

.up {
  position: relative;
  top: -4px;
}

.pressed {
  border-bottom: 8px solid darken(grey, 20);
  text-shadow: 0 0 10px white;
  transform: translate(0, 2px);
}
.arr:active {
    border-bottom: 8px solid darken(grey, 20);
    text-shadow: 0 0 10px white, 0 0 10px white, 0 0 20px white;    
    transform: translate(0, 2px);
}

</style>
</head>
<body>
    <br>
    <h2>Control Panel</h2>
    <p> Press a key to control the movment direction of the robot:</p>
    <div class="keys">
      <div class="arr"id="up"><i class="fa fa-arrow-up" ></i></div>
      <br>
      <div class="arr"id="left"><i class="fa fa-arrow-left" ></i></div>  
      <div class="arr"id="down"><i class="fa fa-arrow-down"></i></div>
      <div class="arr"id="right"><i class="fa fa-arrow-right" ></i></div>
  </div>
  <br>
  <br>
  <div>
    <a href="movementRecord.php"><button id="btn">Movement Record</button></a>
</div>
<script>

    var up = document.getElementById("up");
    var left = document.getElementById("left");
    var down = document.getElementById("down");
    var right = document.getElementById("right");


        up.addEventListener("mousedown", function (evt) { //while user holding the button
            console.log("left button clicked at");
            sendMovement("F");
        });

        left.addEventListener("mousedown", function (evt) { //while user holding the button
            console.log("left button clicked at");
            sendMovement("L");
        });

        down.addEventListener("mousedown", function (evt) { //while user holding the button
            console.log("left button clicked at");
            sendMovement("B");
        });

        right.addEventListener("mousedown", function (evt) { //while user holding the button
            console.log("left button clicked at");
            sendMovement("R");
        });

        function sendMovement(direction) { // send the direction and the duration to DB
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "sendMovement.php", true);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xmlhttp.load = function () {
                console.log(this.reponseText);
            }
            xmlhttp.send("direction=" + direction );
        }

    </script>

</body>
</html>