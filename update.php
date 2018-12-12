<?php
 include('includes/conn.php');
 include('includes/functions.php');

$incomeID=$_GET['incomeID'];
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
    $taxesWithheld = $_POST['taxesWithheld'];

    // caclucalte adjustedGrossIncome
    $adjustedIncome = calc_AdjustedGrossIncome($wages, $taxableInterest);

    // calculate taxable income
    $taxableIncome = calc_TaxableIncome($adjustedIncome, $single);

    //calculate tax rate function
    $taxRate= calc_Taxes($taxableIncome,$single);

//$sql statement
$sql= "INSERT INTO income (incomeID,fName,lName,social,spouseFname,spouseLname,spouseSocial,wages,taxableInterest,single,taxesWithheld)
VALUES
('$incomeID''$fName','$lName','$social','$spouseFname','$spouseLname','$spouseSocial','$wages','$taxableInterest','$single','$taxesWithheld')";
//run sql query
mysqli_query($conn,$sql);
//close connection
mysqli_close($conn);
//after saving redirect back to home page
//header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<h1> Update A User</h1>
<head>
  <link href="includes/css/style.css" rel="stylesheet">
</head>
<body>
  <form action="add.php" method="post">
    <fieldset>
      <legend>1040EZ: Income tax Return for Single and Joint Filers with No Dependents</legend>
  First Name  <input type="text" name="fName"><br>
  Last Name: <input type="text" name="lName"><br>
  Social Security Number: <input type="text" name"social"><br>
  Spouse's First Name : <input type="text" name="spouseFname"><br>
   Spouse's Last name:  <input type="text" name"spouseLname"><br>
   Spouse Social Security Number: <input type="text" name="spouseSocial"><br>
   Wages, Salaries, and tips: <input type="text" name="wages"><br>
   Taxable Interest: <input type="text" name ="taxableInterest"><br>
   Are you single?:<br>
   <input type="radio" name="single" value="1">
   Single $10,400<br>
   <input type="radio" name="single" value="0">
   Married $20,800<br>

 Taxes Withheld<input type="text" name="taxesWithheld"><br>


Submit Form : <input type="submit" value="Submit">


 </fieldset>
</form>








</body>
</html>
