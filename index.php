<?php

//includes
include('includes/header.php');
include('icludes/conn.php');

//sql statement

$sql="SELECT* FROM income";
$incomes=mysqli_query($conn,$sql);

echo "<h2>Income List (SELECT)</h2>";
echo "<button type='button'onclick=\"location='add'\"> Add Income</button><br>";


//open table and give table apache_request_headers

echo "<table><tr><th>IncomeID</th><th>FName</th><th>lName</th><th>Social</th><th>spouseFName</th><th>spouseLname</th><th>spouseSocial</th><th><Wages></th><th>TaxableInterest</th><th>AdjustedIncome</th><th>FileType</th><th>Filing Amount</th><th>Taxable Income</th><th>Federal Income</th><th><Total Payments</th><th>Tax Table</th><th>Total Tax</th><th>Refund</th></tr>";

//run a for each loop with the array from the sql statement

foreach($incomes as $income){
echo "<tr><td>" . $income ['fName'] ."</td>";
echo "<tr><td>" .$income ['lName'] ."</td>";
echo "<tr><td>" .$income['social'] ."</td>";
echo "<tr><td>" .$income['spouseFname'] ."</td>";
echo "<tr><td>" .$income['spouseLname'] ."</td>";
echo "<tr><td>" .$income['spouseSocial'] ."</td>";
echo "<tr><td>" .$income['wages'] ."</td>";
echo "<tr><td>" .$income['taxableInterest'] ."</td>";
echo "<tr><td>" .$income ['adjustedIncome'] ."</td>";
 echo "<tr><td>" .$income['$fileType'] ."</td>";
echo "<tr><td>" .$income['filingAmount'] ."</td>";
echo "<tr><td>" .$income ['taxableIncome'] ."</td>";
 echo "<tr><td>" .$income['federalIncome'] ."</td>";
echo "<tr><td>" .$income['taxTable'] ."</td>";
echo "<tr><td>" .$income['totalTax'] ."</td>";
 echo "<tr><td>" .$income['refund'] ."</td>";

}
  echo "</table>";

 ?>





 ?>
