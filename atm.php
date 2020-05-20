<?php

   require "account.php";

   $checkingDeposit = $checkingWithdraw = $savingsDeposit = $savingsWithdraw = 0 ;
    
   $checking = new CheckingAccount ('C123', 1000, '12-20-2019');
   $savings = new SavingsAccount('S123', 5000, '03-20-2020');

    //CHECKING ACCOUNT
    if (isset($_POST["checkings_withdrawbtn"]))
    {
        $checkingWithdraw = filter_input(INPUT_POST, "checkings_withdraw_amount", FILTER_VALIDATE_FLOAT);
        $checkingAccountID = filter_input(INPUT_POST, "c_accountID");
        $checkingBalance = filter_input(INPUT_POST, "c_balance",FILTER_VALIDATE_FLOAT);
        $checkingStartDate = filter_input(INPUT_POST, "c_startDate");
        $checking->withdrawal($checkingWithdraw);
        
    }
    if (isset($_POST["checkings_depositbtn"]))
    {
        $checkingDeposit = filter_input(INPUT_POST, "checkings_deposit_amount", FILTER_VALIDATE_FLOAT);
        $checkingAccountID = filter_input(INPUT_POST, "c_accountID");
        $checkingBalance = filter_input(INPUT_POST, "c_balance",FILTER_VALIDATE_FLOAT);
        $checkingStartDate = filter_input(INPUT_POST, "c_startDate");
        $checking->deposit($checkingDeposit);
    }

    //SAVINGS ACCOUNT
    if (isset($_POST["savings_withdrawbtn"]))
    {
        $savingsWithdraw = filter_input(INPUT_POST, "savings_withdraw_amount", FILTER_VALIDATE_FLOAT);        
        $savingAccountID = filter_input(INPUT_POST, "s_accountID");
        $savingBalance = filter_input(INPUT_POST, "s_balance",FILTER_VALIDATE_FLOAT);
        $savingStartDate = filter_input(INPUT_POST, "s_startDate");
        $savings->withdrawal($savingsWithdraw);
    }
    if (isset($_POST["savings_depositbtn"]))
    {
        $savingsDeposit = filter_input(INPUT_POST, "savings_deposit_amount", FILTER_VALIDATE_FLOAT);
        $savingAccountID = filter_input(INPUT_POST, "s_accountID");
        $savingBalance = filter_input(INPUT_POST, "s_balance",FILTER_VALIDATE_FLOAT);
        $savingStartDate = filter_input(INPUT_POST, "s_startDate");
        $savings->deposit($savingsDeposit);
    }
/*
    $checking = new CheckingAccount ($checkingAccountID, $checkingBalance, $checkingStartDate);
    $savings = new SavingsAccount($savingAccountID , $savingBalance, $savingStartDate);*/

    


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
<input type="hidden" name="c_accountID" value="C123">
<input type="hidden" name="c_balance" value="<?= $checkingBalance ?>">
<input type="hidden" name="c_startDate" value="12-20-2019">

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
<input type="hidden" name="s_accountID" value="S123">
<input type="hidden" name="s_balance" value="5000">
<input type="hidden" name="s_startDate" value="03-20-2020">

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