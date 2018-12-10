<?php
 include('includes/conn.php');
 include('includes/functions.php');

if(is_post_request()){
//get post variables
    $incomeID= $_POST ['incomeID'];
    $fname = $_POST['fName'];
    $lName = $_POST['lName'];
    $social= $_POST['social'];
    $spouseFname= $_POST['spouseFname'];
    $spouseLname =$_POST['spouseLname'];
    $spouseSocial  =$_POST['spouseSocial'];
    $wages =$_POST['wages'];
    $taxableInterest  =$_POST['taxableInterest'];
    $single  =$_POST['single'];
    $taxesPaid = $_POST['taxesPaid'];

    // caclucalte adjustedGrossIncome
    $adjustedIncome = calc_AdjustedGrossIncome($wages, $taxableInterest);

    // calculate taxable income
    $taxableIncome = calc_TaxableIncome($adjustedIncome, $single);

//$sql statement
$sql= "INSERT INTO income (fName,lName,social,spouseFname,spouseLname,spouseSocial,wages,taxableInterest,adjustedIncome,fileType,filingAmount,taxableIncome,federalIncome,taxTable,totalTax,refund)
VALUES
('$fName','$lName','$social','$spouseFname','$spouseLname','$spouseSocial','$wages','$taxableInterest','$adjustedIncome','$fileType','$filingAmount','$taxableIncome','$federalIncome','$taxTable','$totalTax','$refund')";
//run sql query
mysqli_query($conn,$sql);
//close connection
mysqli_close($conn);
//after saving redirect back to home page
header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<body>
  <form action="add.php" method="post">
    <fieldset>
      <legend>1040EZ: Income tax Return for Single and Joint Filers with No Dependents</legend>
   First Name  <input type="text" name="fName"><br>
   Last Name: <input type="text" name="lName"><br>
    Social Security Number: <input type="text" name"social"><br>
    spouse's first name : <input type="text" name="spouseFname"><br>
   Last name:  <input type="text" name"spouseLname"></p><br>><br>
   Spouse Social Security Number: <input type="text" name="spouseSocial"><br>
  1. Wages, Salaries, and tips: <input type="text" name="wages"><br>
  2. Taxable Interest: <input type="text" name ="taxableInterest"><br>
  5. Are you single?:<br>
   <input type="radio" name="single" value="1">
   Single $10,400<br>
   <input type="radio" name="single" value="0">
   Married $20,800<br>

7. Federal income tax withheld from  Forms(s) W2 abd 1099:<input type="text" name="taxesPaid"><br>


Submit Form : <input type="submit" value="Submit">


 </fieldset>
</form>








</body>
</html>
