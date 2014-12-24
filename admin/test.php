<?php
include("conn.php");
$query_pag_data = "select * from jobs";
$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
$finaldata = "";
// Table Header
$tablehead="<tr><th>Product Name</th><th>Category</th><th>Price</th><th>Discount</th><th>Edit</th></tr>";
// Table Data Loop
while($row=mysql_fetch_array($result_pag_data))
{
$title=$row["title"];
$description=$row["description"];
$email=$row["email"];
$location=$row["location"];
$company=$row["company"];
$url=$row["url"];
$to_apply=$row["to_apply"];
$status=$row["status"];

echo $tabledata.="<tr id='$id' class='edit_tr'>

<td class='edit_td' >
<span id='one_$id' class='text'>$title</span>
<input type='text' value='$name' class='editbox' id='one_input_$id' />
</td>


<td class='edit_td' >
<span id='two_$id' class='text'>$category</span>
<input type='text' value='$category' class='editbox' id='two_input_$id'/>
</td>


<td class='edit_td' >
<span id='three_$id' class='text'>$price $</span> 
<input type='text' value='$price' class='editbox' id='three_input_$id'/>
</td>
// New record
<td class='edit_td' >
<span id='four_$id' class='text'>$discount $</span> 
<input type='text' value='$discount' class='editbox' id='four_input_$id'/>
</td>


<td><a href='#' class='delete' id='$id'> X </a></td>


</tr>";
}
// Loop End
$finaldata = "<table width='100%'>". $tablehead . $tabledata . "</table>";

/* Total Count for Pagination */
$query_pag_num = "SELECT * FROM jobs";
$result_pag_num = mysql_query($query_pag_num);
$x=mysql_num_rows($result_pag_num);
$no_of_paginations = $x;
?>