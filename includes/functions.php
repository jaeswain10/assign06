
<?php

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}


//adjusted gross income function
function calc_AdjustedGrossIncome($wages,$taxableInterest){
  $adjustedIncome = $wages + $taxableInterest;
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
function calc_Taxes($taxableIncome,$single){
  if($single==1){
    if($taxableIncome <= 9325){
      $taxRate=$taxableIncome*.10;
    }elseif($taxableIncome<= 37950){
      $taxRate= ($taxableIncome-9325)*.15 + 932.50;
    }elseif($taxableIncome<= 91900){
      $taxRate= ($taxableIncome-37950)*.25 +5226.25;
    }elseif($taxableIncome<= 191650){
      $taxRate= ($taxableIncome-91900)*.28 + 18713.75;
    }elseif($taxableIncome<= 416700){
      $taxRate= ($taxableIncome-191650)*.33 + 46643.75;
    }elseif($taxableIncome<= 418400){
      $taxRate= ($taxableIncome-416700)*.35 + 120910.25;
    }else{
      $taxRate=($taxableIncome-418400)*.396 + 121505.25;
          }
  }else{
      if($taxableIncome <= 18650){
        $taxRate=$taxableIncome*.10;
      }elseif($taxableIncome<= 75900){
        $taxRate= ($taxableIncome-9325)*.15 + 18650;
      }elseif($taxableIncome<= 153100){
        $taxRate= ($taxableIncome-75900)*.25 +10452.20;
      }elseif($taxableIncome<= 233350){
        $taxRate= ($taxableIncome-153100)*.28 + 29752.50;
      }elseif($taxableIncome<= 416700){
        $taxRate= ($taxableIncome-233350)*.33 + 52222.50;
      }elseif($taxableIncome<= 470700){
        $taxRate= ($taxableIncome-416700)*.35 + 112728;
      }else{
        $taxRate= ($taxableIncome-470700)*.396 + 131628;
        }
        return $taxRate;
      }
    }

?>
