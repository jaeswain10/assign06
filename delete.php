<?php
include('includes/conn.php');
include('includes/functions.php');

//get the income information from the URL
$incomeID= $_GET ['incomeID'] ?? false;
$fname = $_GET['fName'] ?? false;
$lName = $_GET['lName'] ?? false;
$social= $_GET['social'] ?? false;
$spouseFname= $_GET['spouseFname'] ?? false;
$spouseLname =$_GET['spouseLname'] ?? false;
$spouseSocial  =$_GET['spouseSocial'] ?? false;
$wages =$_GET['wages'] ?? false;
$taxableInterest  =$_GET['taxableInterest'] ?? false;
$adjustedIncome  =$_GET['adjustedIncome'] ?? false;
$fileType  =$_GET['$fileType'] ?? false;
$filingAmount  =$_GET['filingAmount'] ?? false;
$taxableIncome  =$_GET['taxableIncome'] ?? false;
$federalIncome  =$_GET['federalIncome'] ?? false;
$taxTable  =$_GET['taxTable'] ?? false;
$totalTax  =$_GET['totalTax'] ?? false;
$refund =$_GET ['refund'] ?? false;

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
$adjustedIncome  =$_POST['adjustedIncome'];
$fileType  =$_POST['$fileType'];
$filingAmount  =$_POST['filingAmount'];
$taxableIncome  =$_POST['taxableIncome'];
$federalIncome  =$_POST['federalIncome'];
$taxTable  =$_POST['taxTable'];
$totalTax  =$_POST['totalTax'];
$refund =$_POST ['refund'];

//sql statement
$sql = "DELETE FROM income WHERE incomeID=$incomeID";
$sql = "DELETE FROM income WHERE fname = $fName";
$sql = "DELETE FROM income WHERE lName = $lName";
$sql = "DELETE FROM income WHERE social= $social";
$sql = "DELETE FROM income WHERE spouseFname= $spouseFname";
$sql = "DELETE FROM income WHERE spouseLname =$spouseLname";
$sql = "DELETE FROM income WHERE spouseSocial =$spouseSocial";
$sql = "DELETE FROM income WHERE wages =$wages";
$sql = "DELETE FROM income WHERE taxableInterest  =$taxableInterest";
$sql = "DELETE FROM income WHERE adjustedIncome =$adjustedIncome";
$sql = "DELETE FROM income WHERE fileType  =$fileType";
$sql = "DELETE FROM income WHERE filingAmount =$filingAmount";
$sql = "DELETE FROM income WHERE taxableIncome  =$taxableIncome";
$sql = "DELETE FROM income WHERE federalIncome  =$federalIncome";
$sql = "DELETE FROM income WHERE taxTable =$taxTable";
$sql = "DELETE FROM income WHERE totalTax  =$totalTax";
$sql = "DELETE FROM income WHERE refund = $refund";

//run sql query
 mysqli_query($conn,$sql);
 //close connection
 mysqli_close($conn);

 //after savind redirect back to home page
header('Location: index.php');

}
?>
<!DOCTYPE html>
<html>
<body>
  <form action="delete.php" method="post">
    <fieldset>
      <legend> Are you sure you want to delete<?php echo $incomeID;?></legend>
      <input name="incomeID" type ="hidden" value="<?php echo $incomeID;?>">
      <buttin type="button" onclick="location='index.php'">Do Not Delete</button>
      </fieldset>
    </form>
  </body>
  </html>
