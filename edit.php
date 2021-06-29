<?php
session_start();
$connection=mysqli_connect("localhost","root","","shop_management");

//Add Book
if(isset($_POST['checking_add']))
{
    $Book_Name = $_POST['Book_Name'];
    $Author = $_POST['Author'];
    $Barcode = $_POST['Barcode'];
    $Stock = $_POST['Stock'];
    $Type = $_POST['Type'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];

    $query = "INSERT INTO add_book (Book_Name,Author,Barcode,Stock,Select_Type,Price,Description) 
    VALUES ('$Book_Name','$Author','$Barcode','$Stock','$Type','$Price','$Description')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo $return  = "Successfully Stored";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}

//view 
if(isset($_POST['checking_viewbtn']))
{
    $b_id = $_POST['book_id'];
    // echo $return = $s_id;

    $query = "SELECT * FROM add_book WHERE id='$b_id' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            echo $return = '
                <h5> ID : '.$row['id'].'</h5>
                <h5> Book Name : '.$row['Book_Name'].'</h5>
                <h5> Author : '.$row['Author'].'</h5>
                <h5> Barcode : '.$row['Barcode'].'</h5>
                <h5> Stock : '.$row['Stock'].'</h5>
                <h5> Type : '.$row['Select_Type'].'</h5>
                <h5> Price : '.$row['Price'].'</h5>
                <h5> Description : '.$row['Description'].'</h5>
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
    $b_id=$_POST['book_id'];
    $result_array=[];
    //echo $return=$b_id;
    $query="SELECT  * FROM add_book WHERE id='$b_id'";
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

if(isset($_POST['update_book']))
{
    $id = $_POST['edit_id'];
    $Book_name = $_POST['Book_name'];
    $Author = $_POST['Author'];
    $Barcode = $_POST['Barcode'];
    $Stock = $_POST['Stock'];
    $Type = $_POST['Type'];
    $Price = $_POST['Price'];

    $query = "UPDATE add_book SET Book_name='$Book_name', Author='$Author', Barcode='$Barcode', Stock='$Stock', Select_Type='$Type', Price='$Price' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully Updated";
        header('Location: BookDetails.php');
    }
    else
    {
        $_SESSION['status'] = "Something Went Wrong.!";
        header('Location: BookDetails.php');
    }
}

//Delete
if(isset($_POST['delete_book']))
{
    $id = $_POST['book_id'];

    $query = "DELETE FROM add_book WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully Deleted";
        header('Location: BookDetails.php');
    }
    else
    {
        $_SESSION['status'] = "Something Went Wrong.!";
        header('Location: BookDetails.php');
    }
}
?>