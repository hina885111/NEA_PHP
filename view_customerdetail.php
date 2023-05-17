<?php
include("dbconnect.php");
$query="SELECT * FROM tbl_customer ";
$result=mysqli_query($conn,$query);

echo"<table border='1'>
<tr>
    <td>Sn</td>
    <td>SCNO</td>
    <td>Customer_id</td>
    <td>Full Name</td>
    <td>MobileNumber</td>
    <td>Demand Types</td>
    <td>Action</td>

          

</tr>";
$i=1;
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
       echo"<td>".$i."</td>";
       echo"<td>".$row["SC_No"]."</td>";
       echo"<td>".$row["Customer_id"]."</td>";
       echo"<td>".$row["customer_fullname"]."</td>";
       echo"<td>".$row["Mobile_no"]."</td>";
       echo"<td>".$row["Demand_type"]."</td>";
       ?>
       <td><a href="viewbill.php?Customer_id=<?php echo $row["Customer_id"];?>">View Bill</a>||
            <a href="view_paymentbill.php?Customer_id=<?php echo $row["Customer_id"];?>">View Payement</a>
        </td>

        <?php
        echo"</tr>";
        $i=$i+1;
}
       echo "</table>";

        ?>