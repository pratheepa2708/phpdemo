<html>
<head>
<meta charset="UDT-8" >
<meta name="viewport" content="width=device-width,initial-scale=10">
<title>Bank transaction</title>
</head>
<body>
<h2>BANK TRANCTION</h2>
<hr>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
<lable for="initialbalance">Initial Balance</lable>
<input type=number name="initialbalance"required><br><br>
<lable for="numtranction">Number of tranction</lable>
<input type=number name="numtranction"required><br><br>
<lable for="transactiontype">Type of Transaction</lable>
<select name="transactiontype"required>
<option value="deposit">Deposit</option>
<option value="withdraw">Withdraw</opion>
</select><br><br>
<lable for="amount">Amount</lable>
<input type="number" name="amount"required><br><br>
<input type="submit" name="peform transaction">
<hr>
</form>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ibalance=$_POST["initialbalance"];
    $numt=$_POST["numtranction"];
    $trantype=$_POST["transactiontype"];
}?>
</body></html>