<?php
session_start();
$connection=mysqli_connect("localhost","root","","shop_management");

//view 
if(isset($_POST['checking_viewbtn']))
{
    $c_id = $_POST['customer_id'];
    // echo $return = $s_id;

    $query = "SELECT * FROM customer WHERE id='$c_id' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            echo $return = '
                <h5> ID : '.$row['id'].'</h5>
                <h5> Order Date : '.$row['Order_Date'].'</h5>
                <h5> Customer Name: '.$row['Customer_Name'].'</h5>
                <h5> Phone Number : '.$row['Ph_Number'].'</h5>
                <h5> Address : '.$row['Address'].'</h5>
                <h5> Total Price : '.$row['Total_Price'].'</h5>
            ';
        }
    }
    else
    {
        echo $return = "<h5>No Record Found</h5>";
    }

}


//Update
if(isset($_POST['checking_edit_btn']))
{
    $c_id=$_POST['customer_id'];
    $result_array=[];
    //echo $return=$b_id;
    $query="SELECT  * FROM customer WHERE id='$c_id'";
    $query_run =mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
            header('Content-type: application/json');
            echo json_encode($result_array);
        }
    }
    else{
        echo  $return = "<h4>No Record found</h4>";
    }
}

if(isset($_POST['update_customer']))
{
    $id = $_POST['edit_id'];
    $Order_Date = $_POST['Order_Date'];
    $Customer_Name = $_POST['Customer_Name'];
    $Ph_Number = $_POST['Ph_Number'];
    $Address = $_POST['Address'];
    $Total_Price = $_POST['Total_Price'];

    $query = "UPDATE customer SET Order_Date='$Order_Date', Customer_Name='$Customer_Name', Ph_Number='$Ph_Number', Address='$Address', Total_Price='$Total_Price' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully Updated";
        header('Location: SellReport.php');
    }
    else
    {
        $_SESSION['status'] = "Something Went Wrong.!";
        header('Location: SellReport.php');
    }
}

//Delete
if(isset($_POST['delete_customer']))
{
    $id = $_POST['customer_id'];

    $query = "DELETE FROM customer WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully Deleted";
        header('Location: SellReport.php');
    }
    else
    {
        $_SESSION['status'] = "Something Went Wrong.!";
        header('Location: SellReport.php');
    }
}
?>