<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);



$res1="SELECT COUNT(Category) from expensetable where Category='EMI'";
$emi= $conn->query($res1);
$res2="SELECT COUNT(Category) from expensetable where Category='Savings'";
$savings= $conn->query($res2);
$res3="SELECT COUNT(Category) from expensetable where Category='Miscellaneous'";
$misc= $conn->query($res3);
$res4="SELECT COUNT(Category) from expensetable where Category='Groceries'";
$gro= $conn->query($res4);
$res5="SELECT COUNT(Category) from expensetable where Category='Entertainment'";
$ent= $conn->query($res5);
$res6="SELECT COUNT(Category) from expensetable where Category='bills'";
$bills= $conn->query($res6);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
    <title>Monthly Expenses</title>

    <style>
        a{
            text-decoration:none;

        }
        .centering{
            display:flex;
            justify-content:center;
            align-items:center;
            height:500px;
            margin:5px;
            
        }
        .x{
            
  text-align: center;
  text-transform: uppercase;
  cursor: pointer;
  font-size: 20px;
  letter-spacing: 4px;
  position: relative;
  background-color: #16a085;
  border: none;
  color: #fff;
  padding: 20px;
  width: 200px;
  text-align: center;
  transition-duration: 0.4s;
  overflow: hidden;
  box-shadow: 0 5px 15px #193047;
  border-radius: 4px;
  margin:30px;
}

.x:hover {
  background: #fff;
  box-shadow: 0px 2px 10px 5px #1abc9c;
  color: #000;
}

.x:after {
  content: "";
  background: #1abc9c;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.x:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}

.x:focus { outline:0; }
</style>
</head>
<body style="background-image: url('https://www.european-microfinance.org/sites/default/files/news/cover_image/easita.jpg');">

   <div class="centering">
   
  <button type="button" class="x"><a href="income.html">Add Income</a></button> <br> <br>

  <button type="button" class="x"><a href="expense.html">Add Expenses</a></button>


</div> 

<div id="container" style="width: 100%; height: 100%"></div>
<script>
anychart.onDocumentReady(function() {
var data = [
    {x: "EMI", value: <?php $emi ?>},
    {x: "Savings", value: <?php $savings ?>},
    {x: "Groceries", value: <?php $gro ?>},
    {x: "Entertainment", value: <?php $ent ?>},
    {x: "Bills", value: <?php $bills ?>},
    {x: "miscellaneous", value:<?php $misc ?>},
   
];

var chart = anychart.pie();
chart.title("Category wise expenses analysis");
chart.data(data);
chart.container('container');
chart.draw();

});


</script>
</body>
</html>
