<html>
<body>

  <form action ="update.php" method="post">
  <fieldset>
  <legend> Update Income Information</legend>
  <input name="incomeId" type="hidden" value="<?php echo $incomeID;?>">
Enter IncomeID: <input type="text" name"incomeID value="<?php echo $incomeID;?>"></p><br>">
 Your First Name and Initial: <input type="text" name="fName"value="<?php echo $fName;?>"></p><br>><br>
 Last Name: <input type="text" name="lName"value="<?php echo $lName;?>"></p><br>><br>
 Your Social Security Number: <input type="text" name"social" value="<?php echo $social;?>"></p><br>><br>
 If a joint tax Return, spouse's first name and initial: <input type="text" name="spouseFname" value="<?php echo $spouseFname;?>"></p><br>><br>
 Last name:  <input type="text" name"spouseLname"value="<?php echo $wages;?>"></p><br>><br>
 Spouse Social Security Number: <input type="text" name="spouseSocial"value="<?php echo $spouseSocial;?>"></p><br>><br>
  <p> Wages, Salaries, and tips: <input type="text" name="wages" value="<?php echo $wages;?>"></p><br>
  <p>Taxable Interest: <input type="text" name ="taxableInterest"value="<?php echo $taxableInterest;?>"></p><br>
  <p>Adjusted Income:  <input type="text" name="adjustedIncome" value="<?php echo $adjustedIncome;?>"></p><br>
  <p> How are you filing?:<br>
   <input type="radio" name="fileType" value="single">
   Single $10,400<br>
   <input type="radio" name="fileType" value="married">
   Married $20,800<br>
   Insert Filing amount:<input type="text" name="filingAmount"value="<?php echo $filingAmount;?>"></p><br>
<p>Taxable Income( subtract line 5 from line 4):<input type="text" name="taxableIncome"value="<?php echo $taxableIncome;?>"></p><br>
<p>Federal income tax withheld from  Forms(s) W2 abd 1099:<input type="text" name="federalIncome"value="<?php echo $federalIncome;?>"></p><br>
<p>Total payments and Credits( comes from line 7):<input type="text" name="totalPayments" value="<?php echo $totalPayments?>"></p><br>
<p>Tax from the tax table: <input type="text"name="taxTable"value="<?php echo $taxTable;?>"></p><br>
<p>Total tax( line 10): <input type="text" name="totalTax value="<?php echo $totalTax;?>">;"></p><br>
<p>If line 9 is larger than line 12, subtract line 12 from 9. This is your refund:<input type="text" name="refund"value="<?php echo $refund;?>"></p><br>
<button type = "submit" value="Submit">Submit</button>
<button type="button" onclick="location= 'index.php'">Cancel Update</button>
</fieldset>
</form>
</body>
</html>








</html>
