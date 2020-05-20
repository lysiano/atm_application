<?php

   require "account.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM APPLICATION</title>
    <style>
        .box{
            border: groove;
        }
        
    </style>
</head>
<body>
<div class="content">
<h1> ATM </h1>
<form method="post">

<div id="checkingswrapper" class="box">
<?= $checking->getAccountDetails(); ?>
    <div class="withdraw">
        <input type="text" name="checkings_withdraw_amount" size="8px" value="" >
        <input type="submit" name="checkings_withdrawbtn" value="Withdraw">
    </div>

    <div class="deposit">
        <input type="text" name="checkings_deposit_amount" size="8px" value="" >
        <input type="submit" name="checkings_depositbtn" value="Deposit">
    </div>
</div>



<div id="savingswrapper" class="box">
<?= $savings->getAccountDetails(); ?>
    <div class="withdraw">
        <input type="text" name="savings_withdraw_amount" size="8px" value="" >
        <input type="submit" name="savings_withdrawbtn" value="Withdraw">
    </div>  

    <div class="deposit">
        <input type="text" name="savings_deposit_amount" size="8px" value="" >
        <input type="submit" name="savings_depositbtn" value="Deposit">
    </div>
</div>

</form>
</div>
</body>
</html>