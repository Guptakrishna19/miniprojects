<?php

$id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","user") or die("Connection Failed");

$sql = "SELECT * FROM restapi WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>First Name</td>
      <td><input type='text' id='edit-name' value='{$row["name"]}'>
          <input type='text' id='edit-id' hidden value='{$row["id"]}'>
      </td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input type='text' id='edit-age' value='{$row["age"]}'></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type='text' id='edit-city' value='{$row["city"]}'></td>
    </tr>
    <tr>
      <td></td>
      <td><input type='submit' id='edit-submit' value='save'></td>
    </tr>";

  }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
