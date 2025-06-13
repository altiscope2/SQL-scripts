<?php
class payClass
{
 public  $RegPay;
 public  $ExtraPay;
function CalcPayment($hoursWorked, $payRate,$pr,$hw)
    {
        $payRate=filter_input(INPUT_GET, 'payRate', FILTER_VALIDATE_FLOAT);
 	

	
function GetRegPay($hoursWorked, $payRate,$pr,$hw)
    {
    if ($h<=40)
    
    $this->$RegPay=$pr*$hw
    
    
    
function GetExraPay($hoursWorked, $payRate,$pr,$hw)
    {
    if ($h>40)
    $this->$ExtraPay=(40*$p) +(($h-40))*($p*1.5));
    }
    return $ExtraPay;
    }   
}

?>
   