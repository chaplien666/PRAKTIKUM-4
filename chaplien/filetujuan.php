<?php
parse_str($_POST['dataform'], $hasil);

echo 'firstname : ' . $hasil['firstname'];
echo 'lastname  : ' . $hasil['lastname'];
echo 'username : ' . $hasil['username'];
echo 'email : ' . $hasil['email'];
echo 'address : ' . $hasil['address'];
echo 'address2 : ' . $hasil['address2'];
echo 'paymentMethod : ' . $hasil['paymentMethod'];
echo 'Name_Card : ' . $hasil['Name_Card'];
echo 'Credit_Number : ' . $hasil['Credit_Number'];
echo 'CVV : ' . $hasil['CVV'];

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "billing";

$link = mysqli_connect("localhost","root","","billing_address");
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil','$hasil','$hasil','$hasil','$hasil')";
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]')";
$sql = "INSERT INTO `tbl_user`(`Firstname`, `Lastname`, `Username`, `Email`, `Address`, `Address2`, `Payment`, `Name_Card`, `Credit_Number`, `Expiration`, `CVV`, `Time_Insert`) VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]',
  '$hasil[email]','$hasil[address]','$hasil[address2]','$hasil[paymentMethod]','$hasil[Name_Card]','$hasil[Credit_Number]','$hasil[Expiration]','$hasil[CVV]', now())";
if(mysqli_query($link,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($link);
  }
mysqli_close($link);
?>
