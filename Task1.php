<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
        <h1>Calculate the number of servers on the basis of Load </h1>
        <!-- Basic HTML Form -->
    <form method="post" action="Task1.php">
      Enter The number of servers  <input type="Number" name="Nservers"><br><br>
        Load in % at minute 1 <input type="Number" name="Load1"><br><br>
        Load in % at minute 2 <input type="Number" name="Load2"><br><br>
        Load in % at minute 3 <input type="Number" name="Load3"><br><br>
        Load in % at minute 4 <input type="Number" name="Load4"><br><br>
        Load in % at minute 5 <input type="Number" name="Load5"><br><br>
        <input type="submit" value="Submit">
    </form><br><br>
</body>
</html>
<?php
        // Catch user input Here
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Nservers =$_POST["Nservers"];
        $load1 = $_POST["Load1"];
        $load2 = $_POST["Load2"];
        $load3 = $_POST["Load3"];
        $load4 = $_POST["Load4"];
        $load5 = $_POST["Load5"];
        $load= array($load1, $load2, $load3, $load4, $load5);
        
        // Conditional Statment/Actual logic

        foreach ($load as $key => $value) {
            if($value>50){
                $Nservers = ($Nservers*2) + 1;
                echo "The Number of servers are " . $Nservers ."<br><br>";
                $Nservers=$_POST["Nservers"];
            }
            else{
                $Nservers = ($Nservers/2);
                echo "The Number of servers are " . $Nservers ."<br><br>";
                $Nservers=$_POST["Nservers"];
            }

        }
    }
    ?>