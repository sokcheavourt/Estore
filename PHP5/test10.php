<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $basic = 400;
    $workday = 26;
    $ActworkDay = 24;
    $OT = 40;
    $Bonus =20;
    $Ded=120;

    $salary;
    $SalaryBeforeTax;


    //A find salary
    $salary = ($basic/$workday)*$ActworkDay;

    // B find OT amount
    function Cal_OT($basic,$workday,$onus,$OT){
        $OTPerHour=0.0;
        $OTPerHour = $basic/$workday/8;
        $OTAM=$OTPerHour*$OT;
        return $OTAM;
    }
    
    // C find deduction amount
  function Deduction($basic,$workday,$Ded){
    $DedHour = 0;
    $DedAM = 0.0;
    $DedHour =$Ded/60;
    $DedAM = ($basic / $workday /8)*$DedHour;
    return $DedAM;

    

   }
   echo $DedAM;
 
    
    ?>
</body>
</html>