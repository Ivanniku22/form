<html>
<head>
    <title>Records</title>
    <style>
        body
        {
            background-image: url("pexels-photo-2559941.jpeg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        table
        {
            background-color: white;
        }
    </style>
</head>


<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form_details";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

if($total != 0)
{
    ?>
    <h2 align = 'center'> Displaying all records </h2>
    <center><table border = 3 cellspacing = 7 width = "85%">
        <tr>
        <th width = "10%">First Name</th>
        <th width = "10%">Last Name</th>
        <th width = "10%">Gender</th>
        <th width = "20%">Email</th>
        <th width = "10%">Phone</th>
        <th width = "25%">Address</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>$result[fname]</td>
                <td>$result[lname]</td>
                <td>$result[gender]</td>
                <td>$result[email]</td>
                <td>$result[phone]</td>
                <td>$result[address]</td>
            </tr>
            ";
    }
}

else
{
    echo "Table has no records";
}
?>
</table>
</center>