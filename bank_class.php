<?php


// 1) Create a Bank Class
// 2) Define Properties of Bank Class
// 	- accno
// 	- name
// 	- balance
// 3) Define Methods
// 	- depositAmount($amt)
// 	- deductAmount($amt)
// 	- checkBalance()
// 4) Create an Account for User
// 5) CheckBalance, DepositAccount, DeductAmount
class bank{
    
    public $accno;
    public $name;
    public $balance = 0;

    function depositAmount($amt){
       if ($this->balance = $this->balance + $amt) {
            echo "<p style='color:green'>$amt has been succesful added, your 
            new balance is $this->balance</p>";
        }
        
    }

    function deductAmount($amt){

          if ($this->balance <= 0) {

              echo "<p style='color:red'> You cannot withdraw as you have Insufficient fund </p>";
          } elseif ($this->balance < $amt){
            echo "<p style='color:red'>Your balance is lower than amount created,please deposit into your account  </p>";
          }
          
          else{
         $this->balance = $this->balance - $amt;
                echo "<p style='color:red'>$amt has been succesfulfy deducted from your account, your new balance is <span style='color:green'>$this->balance</span> </p>";
          }


    }


    function checkBalance()
       {
          echo "<p style='color:black;'>Dear: $this->name with accno:$this->accno your Balance is: $this->balance </p> ";
    }
}

$user1= new bank();
$user1->name="<strong style='color:lemon;'>Nolum</strong>";
$user1->accno= 111;
$user1->checkBalance();
$user1->depositAmount(500);
$user1->checkBalance();
$user1->deductAmount(200);
$user1->deductAmount(100);
$user1->deductAmount(210);
$user1->deductAmount(10);
$user1->checkBalance();
$user1->depositAmount(1000);
$user1->deductAmount(1190);
$user1->deductAmount(10);

$user2 = new bank();
$user2->accno = 102;
$user2->name = "<strong style='color:blue;'>Raphael</strong>";
$user2->checkBalance();
$user2->depositAmount(500);
$user2->checkBalance();
$user2->deductAmount(100);
$user2->checkBalance();
$user2->deductAmount(1000);
$user2->checkBalance();



