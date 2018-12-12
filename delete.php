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
$single=$GET ['single']?? false;
$taxesWithheld['taxesWithheld']?? false;
if(is_post_request()){

//get post variables
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
$sql = "DELETE FROM income WHERE single =$single";
$sql = "DELETE FROM income WHERE taxesWithheld =$taxesWithheld";


//run sql query
 mysqli_query($conn,$sql);
 //close connection
 mysqli_close($conn);

 //after savind redirect back to home page


}
?>
<!DOCTYPE html>
<html>
<head>
  <link href="includes/css/style.css" rel="stylesheet">
</head>
<body>
  <form action="delete.php" method="post">
    <fieldset>
      <legend> Are you sure You would like to Delete?</legend>
      <input name="incomeID" type ="hidden" value="<?php echo $incomeID;?>">
      <button type="button" onclick="location='index.php'">Do Not Delete</button>
      </fieldset>
    </form>
  </body>
  </html>
