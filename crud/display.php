<html>
    <hade>
        <title>Display</title>
        <style>
        body
        {
            background: chocolate;
        } 
        table
        {
            background-color:  white; 
        }
        .update, .delete
        {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 24px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete
        {
            background-color: red;

        }
         </style>
</hade>


<?php
include("connection.php");
//error_reporting(0);

$query = "SELECT * FROM darshit";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;

if($total != 0)
{
    ?>

    <h2 align="center"><mark>Displaying All Records</mark></h2>
    <center><table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="5%">ID</th>
        <th width="8%">First Name</th>
        <th width="8%">Last Name</th>
        <th width="10%">Gender</th>
        <th width="20%">Email</th>
        <th width="7%">Phone</th>
        <th width="3%">caste</th>
        <th width="24%">Address</th>
        <th width="15%">operations</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo " <tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['caste']."</td>
                <td>".$result['addres']."</td>

        <td>
                <a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

                <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a>
        </td>
        </tr> 
        ";
    }
}
else
{
    echo "not records";
}

?>
</table>
</center>

<script>
    function checkdelete() 
    {

        return confirm('Are you sure your want to delete this record ?');
        
    }
</script>

