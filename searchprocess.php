<?php
     include("dbconnect.php");

    if(isset($_POST["submit"]))
    {
        $name = $_POST["txtcustomer"];
        $query =" select * from tbl_customer where name like '%.$name.'";
        

    }




    ?>