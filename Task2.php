<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
            <body>
            <h1>Calculate Maximum Profit</h1><br>
             <!-- Basic HTML Form -->
            <form method="post" action="Task2.php">
                Enter the quantity of bread <input type="Number" name="bread_quantity"><br><br>
                Enter the quantity of samosa <input type="Number" name="samosa_quantity"><br><br>
                Enter the quantity of vada <input type="Number" name="vada_quantity"><br><br>
                Enter the Price of vadapav <input type="Number" name="vadapav_price"><br><br>
                Enter the Price of samosapav <input type="Number" name="samosapav_price"><br><br>
                <input type="submit" value="submit">
            </form><br><br>
</body>
</html>
    <?php
        // Catch user input Here
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $bread_quantity = $_POST['bread_quantity'];
            $samosa_quantity = $_POST['samosa_quantity'];
            $vada_quantity = $_POST['vada_quantity'];
            $vadapav_price = $_POST['vadapav_price'];
            $samosapav_price = $_POST['samosapav_price'];

             // Conditional Statment/Actual logic
            if($bread_quantity>$samosa_quantity OR $bread_quantity>$vada_quantity )
                if($vadapav_price>=$samosapav_price){
                    $remainbread = $bread_quantity - ($vada_quantity*2);
                    $vada_profit= $vada_quantity * $vadapav_price;
                    $samosapav_profit= $samosapav_price* intval($remainbread/2);
                    $max_profit=$vada_profit+$samosapav_profit;
                    echo "The maximum profit you can earn is " .$max_profit. " Rs.";
                    }
                else {
                    $remainbread = $bread_quantity - ($samosa_quantity*2);
                    $samosapav_profit= $samosa_quantity * $samosapav_price;
                    $vada_profit= $vadapav_price* intval($remainbread/2);
                    $max1_profit=$vada_profit+$samosapav_profit;
                    echo "The maximum profit you can earn is " . $max1_profit. " Rs.";
                    }
            else{
                if($vadapav_price>=$samosapav_price){
                    $max_profit= intval($bread_quantity/2) * $vadapav_price;
                    echo "The maximum profit you can earn is " .$max_profit. " Rs.";
                }
                else{
                    $max_profit= intval($bread_quantity/2) * $samosapav_price;
                    echo "The maximum profit you can earn is " .$max_profit. " Rs.";
                }

            }                
        }
    ?>            

