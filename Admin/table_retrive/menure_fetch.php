<?php
$connect = mysqli_connect("localhost", "root", "", "data");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tb_data 
  WHERE fname LIKE '%".$search."%'
  OR id LIKE '%".$search."%' 
  OR Quantity LIKE '%".$search."%' 
  OR languages LIKE '%".$search."%' 
  OR address LIKE '%".$search."%'
  OR times LIKE '%".$search."%'
  OR phone LIKE '%".$search."%'
  OR times LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM tb_data2 ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Phone</th>
     <th>Address</th>
     <th>Quantity</th>
     <th>Food Types</th>
     <th>Notes</th>
     <th>Date</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["fname"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["Quantity"].'</td>
    <td>'.$row["whowant"].'</td>
    <td>'.$row["languages"].'</td>
    <td>'.$row["note"].'</td>
    <td>'.$row["times"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>