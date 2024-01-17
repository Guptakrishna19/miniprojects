<?php
include'config.php';
$sql="SELECT * FROM ajax";
$output='';
$result=mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0){
    $output.='<table style="width:100%">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>SURNAME</th>
      <th>Action</th>
    </tr>';
    while($row=mysqli_fetch_assoc($result)){
        
        
    $output.='<tr>
      <td>'.$row["id"].'</td>
      <td>'.$row["fname"].'</td>
      <td>'.$row["lname"].'</td>
      <td><button class="edit-btn" data-eid="'.$row["id"].'">edit</button><button class="delete-btn" data-did="'.$row["id"].'">Delete</button></td>
    </tr>';

   } 
 $output.='</table>';
//  mysqli_close($conn);
 echo $output;
   }
   else{
    echo 'error';
   }
   echo'helo';
?>