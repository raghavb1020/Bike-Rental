



<?php 
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$message = $_POST['message'];
$AdharNo = $_POST['AdharNo'];
$LicenceNo = $_POST['LicenceNo'];
$conn = mysqli_connect("localhost", "root", "", "rent") or die("connection failed");
$sql = "INSERT INTO booking( fromdate, todate, message, AdharNo,LicenceNo) VALUES ('{$fromdate}','{$todate}','{$AdharNo}','{$LicenceNo}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
echo "Registration successfully...";
mysqli_close($conn);
?>
