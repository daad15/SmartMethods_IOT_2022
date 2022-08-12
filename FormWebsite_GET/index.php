<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
</link>
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
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      padding:10px;
      margin:10px 0; // add top and bottom margin
      width:200px;
  }
  input[type="number"]{
    width:10%;
    padding:20px;
    margin:10px 0;
    border:0; 
    border-bottom:1px solid #eee; 
    box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
    border-radius:10px;

}
input[type="number"]:hover{
    border: 1px solid #aaa;
}

</style>
</head>

<body>
    <br>
    <h2>Sensor Data</h2>
    <p> Write the Sensor value inside the box, then press Enter</p>
    <br>
    <form action="SensorRecord.php" method="get">
        <input type="number" name="sensorValue"> <br>
        <input type="submit" name="submit" value="Enter" id="btn">
    </form>

</body>
</html>