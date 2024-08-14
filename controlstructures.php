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
<label for="initialbalance">Initial Balance</label>
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
    $amt = $_POST["amount"];
    echo "<h3> Transaction Results : </h3>";
    echo "<p> Initial Balance : $iBalance </p>";
    for ($i = 0;$i<=$numT; $i++){
        echo "Transaction $i : </p>";
        switch($trantype) {
            case "deposit":
            $iBalance += $amt ;
            echo "<p>Deposit : +$amt </p>";
            break;
            case "withdraw":
            if ($amt<=$iBalance){
                $iBalance -= $amt ;
                echo "<p>Withdrawal : -$amt";
            }
            else{
                echo"<p style ='color:red';>Insufficient funds for withdrawal!</p>;
                }
            break;
            default :
            echo "<p style = 'color:red';>Invalid Transction Type!</p>;
            }
        }
        echo "<p>Final Balance : $iBalance </p>"
            }
    ?>
</body>
</html>
    
                
                
}?>
</body></html>
