<?php
include("dbconnect.php");


$CUID=$_GET["Customer_id"];
$query="SELECT *from tbl_customer where customer_id=$CUID";
$res=mysqli_query($conn,$query);
while($row1=mysqli_fetch_array($res)){
    ?>
    <br>
       <span>SCNO :</span><?php echo $row1["SC_No"];?><br>
    <span>Customer_id :</span><?php echo $row1["Customer_id"];?><br>
    <span>Full Name :</span><?php echo $row1["customer_fullname"];?><br>
    <span>MobileNumber :</span><?php echo $row1["Mobile_no"];?><br>
    <span>Demand Types :</span><?php echo $row1["Demand_type"];?><br>
    <?php

}?>
<?php
$query1="SELECT * FROM  tbl_customerbill where customer_id=".$CUID."";
$result=mysqli_query($conn,$query1);


echo"<table border='1'>
<tr>
    
    <td>Customer_id</td>
    <td>Bill id</td>
    <td>Date of reading</td>
    <td>Current reading </td>
    <td>Previous reading</td>
    <td>Bill month</td>
    <td>Bill year</td>
    <td>Bill Amount</td>


    

    <td>Payment Status</td>

          

</tr>";
$i=1;
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
       
       echo"<td>".$row["customer_id"]."</td>";
       echo"<td>".$row["bill_id"]."</td>";
       echo"<td>".$row["Date_of_reading"]."</td>";
       echo"<td>".$row["current_reading"]."</td>";
       echo"<td>".$row["previous_reading"]."</td>";
       echo"<td>".$row["bill_month"]."</td>";
       echo"<td>".$row["bill_year"]."</td>";
       echo"<td>".$row["bill_amount"]."</td>";
       
       
       if($row['PaymentStatus']==0)
       $paymentstatus="Unpaid";
       else
       $paymentstatus="Paid";

       $BID=$row['bill_id']
       



       ?>
       
       <td><?php echo $paymentstatus?>||
        <a href="pay.php?bill_amount=<?php echo $row["bill_amount"];?> &&BID=<?php echo $row["bill_id"];?>">Pay now</a>
       
   </td>

      
        <?php
        echo"</tr>";
        $i=$i+1;
}
       echo "</table>";

        ?>