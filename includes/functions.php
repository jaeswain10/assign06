
<?php

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}


//adjusted gross income function
function calc_AdjustedGrossIncome($wages,$taxableInterest){
  $adjusted = $wages + $taxableInterest;
return $adjusted;
}


//taxable income function
function calc_TaxableIncome($adjusted,$single){
  if ($single == 1){
    $taxableIncome = $adjusted - 10400;
  }else{
    $taxableIncome = $adjusted - 20800;
  }
  return $taxableIncome;
}

// function with a nested if statement to calculate taxes based off of taxable income and single
if($fileType="single")
  if($taxableIncome <= 9325){
    $taxRate=$taxableIncome*.10;
    echo "Your amount based on the tax table is"; $taxableRate;
}elseif($taxbleIncome == 9326 or $taxableIncome<= 37950){
    $taxRate= ($taxableIncome-9325)*.15 + 932.50;
    echo "Your amount based on the tax table is"; return $taxRate;
}elseif($taxbleIncome == 37951 or $taxableIncome<= 91900){
    $taxRate= ($taxableIncome-37950)*.25 +5226.25;
    echo "Your amount based on the tax table is"; return $taxRate;
  }elseif($taxbleIncome == 91901 or $taxableIncome<= 191650){
      $taxRate= ($taxableIncome-91900)*.28 + 18713.75;
      echo "Your amount based on the tax table is"; return $taxRate;
  }elseif($taxbleIncome == 191651 or $taxableIncome<= 416700){
      $taxRate= ($taxableIncome-191650)*.33 + 46643.75;
      echo "Your amount based on the tax table is"; return $taxRate;
    }elseif($taxbleIncome == 416701 or $taxableIncome<= 418400){
        $taxRate= ($taxableIncome-416700)*.35 + 120910.25;
        echo "Your amount based on the tax table is"; return $taxRate;
    }else{
      $taxbleIncome >= 418401;
          $taxRate=($taxableIncome-418400)*.396 + 121505.25;
          echo "Your amount based on the tax table is"; return $taxRate;
          }



// function with a nested if statement to calculate taxes based off of taxable income and Married

else{
  if($taxableIncome <= 18650){
    $taxRate=$taxableIncome*.10;
    echo "Your amount based on the tax table is"; $taxableRate;
  }elseif($taxbleIncome == 18651 or $taxableIncome<= 75900){
    $taxRate= ($taxableIncome-9325)*.15 + 18650;
    echo "Your amount based on the tax table is"; return $taxRate;
  }elseif($taxbleIncome == 75901 or $taxableIncome<= 153100){
    $taxRate= ($taxableIncome-75900)*.25 +10452.20;
    echo "Your amount based on the tax table is"; return $taxRate;
  }elseif($taxbleIncome == 153101 or $taxableIncome<= 233350){
      $taxRate= ($taxableIncome-153100)*.28 + 29752.50;
      echo "Your amount based on the tax table is"; return $taxRate;
  }elseif($taxbleIncome == 233351 or $taxableIncome<= 416700){
      $taxRate= ($taxableIncome-233350)*.33 + 52222.50;
      echo "Your amount based on the tax table is"; return $taxRate;
    }elseif($taxbleIncome == 416701 or $taxableIncome<= 470700){
        $taxRate= ($taxableIncome-416700)*.35 + 112728;
        echo "Your amount based on the tax table is"; return $taxRate;
    }else{
      $taxbleIncome >= 470701;
          $taxRate= ($taxableIncome-470700)*.396 + 131628;
          echo "Your amount based on the tax table is"; return $taxRate;
        }

}

//function to calculate refund or owe
 //function refund($totalPayments,$totalTax){
  // $refund=$totalTax-$totalPayments;
   //echo "Your refund amount is"; return $refund;
 //}

 //function owe($totalPayments,$totalTax){
  // $owe=$toalTax-$totalPayments
  // echo " You owe the IRS": return $owe;
 //}
?>
