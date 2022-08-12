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

        table {
          text-align: center;
          border-collapse: separate;
          width:25% ;
          background-color: none ;
          font-size: 22px;  
          margin-left: auto;
          margin-right: auto;

      }

      table td, table th {
          border: none;
          padding: 0.25em; 
          margin: 0.25em; 
      }

      table tr:nth-child(even){
          background-color: #FFFFFF;
      }
      table tr:nth-child(odd){
          background-color: #FFFFFF;
      }

      table tr:hover {background-color:rgba(243, 206, 59, 0.40);}
      table td:hover {background-color:#9fc6c6; font-weight: bold;}


      table th {
          padding-top: 0.5em;
          padding-bottom: 0.5em;
          background-color: #383836;
          color: white;
      }
      table td a {
          text-decoration: underline;
      }

  </style>
</head>
<body>
    <br>
    <h2>Sensor Data Record</h2>
    <?php

    // Create connection
    $conn = new mysqli("localhost", "root", "", "sensor_record");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $value=$_GET['sensorValue'];

  $query= "insert into sensor_data values($value)";
  $run=mysqli_query($conn,$query);

  $sql = "SELECT * FROM sensor_data";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    echo "<table id='tb'>
    <tr><th> Value</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["value"]."</td>";
        echo "</tr>";
    }echo "</table>";
}
$conn->close();
?>
</form>
<a href="index.php"><button id="btn">Back To Data Entry Page</button></a>
</body>
</html>
