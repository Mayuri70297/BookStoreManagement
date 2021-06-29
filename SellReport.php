<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Management</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!--
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.min.css"> 
</head>
<style>
  body{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
  .navbar .navbar-nav .nav-item{
    font-size: 18px;
    font-weight: bold;
  }
  .navbar .navbar-nav .nav-item a{
    color: #fff;
    padding: 5px 15px;
    margin-left: 5px;
    border: 1px solid transparent;
    transition: 0.6s ease;
  }
  .navbar .navbar-nav .nav-item a:hover{
    background-color: #fff;
    color: #000;
  }
.bookdetail{
  font-size: 45px;
  color : tomato;
  letter-spacing: 3px;
  font-weight: bold;
}
.searchbox{
  padding: 5px; 
  border-radius:5px; 
  padding-right:100px; 
  text-align:left;
}
.bg-success th{
  text-align: center;
  font-size: 18px;
}
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand font-weight-bold" style="font-size: 35px;" href="#">Book Shop</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="AddBook.php" class="nav-link">Add Book</a></li>
          <li class="nav-item"><a href="BookDetails.php" class="nav-link">Book Report</a></li>
          <li class="nav-item"><a href="AddSell.php" class="nav-link">Add Sell</a></li>
          <li class="nav-item"><a href="SellReport.php" class="nav-link">Sell Report</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
      </ul>
      </div>
  </div>
  </nav> 

<!--View Modal-->
<div class="modal fade" id="customerViewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="viewLabel">BOOK DETAILS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <div class="customer_viewing_data">

          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!--EDIT-->
<div class="modal fade" id="editcustomermodal" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel">UPDATE CUSTOMER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="customer.php" method="POST">
      <div class="modal-body">
      <div class="row">
        <input type="hidden" name="edit_id" id="edit_id">

        <div class="col-md-6">
            <label for="">Order Date</label><br>
            <input type="text" name="Order_Date" id="edit_date" class="from-control" placeholder="Enter Date">
        </div>
        
        <div class="col-md-6">
          <label for="">Customer Name</label><br>
          <input type="text" name="Customer_Name" id="edit_name" class="from-control" placeholder="Enter Customer Name">
        </div>

        <div class="col-md-6">
          <label for="">Phone Number</label><br>
          <input type="text" name="Ph_Number" id="edit_number" class="from-control" placeholder="Enter Phone Number">
        </div>

        <div class="col-md-6">
          <label for="">Address</label><br>
          <input type="text" name="Address" id="edit_address" class="from-control" placeholder="Enter Address">
        </div>

        <div class="col-md-6">
          <label for="">Total Price</label><br>
          <input type="text" name="Total_Price" id="edit_price" class="from-control" placeholder="Enter Total Price">
        </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update_customer" class="btn btn-primary">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!--Delete-->
<div class="modal fade" id="deletecustomerModal" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteLabel">DELETE CUSTOMER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="customer.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="customer_id" id="delete_id">
                <h4>Are you sure, you want to delete this data ?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="delete_customer" class="btn btn-danger">YES.! Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="container-fluid" style="margin-top:40px">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <?php 
                  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                  {
                ?>

                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <?php
                     unset($_SESSION['status']);
                   }
                  ?>
                    <div class="card-header">
                        <h1 class="card-title text-center bookdetail">Customer Details</h1></br>
                    </div>
                    <div class="card-body">
                      <div class="message-show">

                      </div>
                        <form action=" " method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="text" name="filter_value" class="from-control searchbox" placeholder="Search...">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <button type="submit" name="filter_btn" class="btn btn-primary">
                                      Fetch Data
                                    </button> 
                                 </div>
                            </div>
                        </form>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-center">
                                <tr class="bg-success">
                                    <th scope="col">Id</th>
                                    <th scope="col">Order_Date</th>
                                    <th scope="col">Customer_Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                          <tbody class="customer-data">
                                <?php
                                    $connection=mysqli_connect("localhost","root","","shop_management");
                                    if(isset($_POST['filter_btn']))
                                    {
                                        $value_filter=$_POST['filter_value'];
                                        $query="SELECT  * FROM customer WHERE CONCAT(id,Order_Date,Customer_Name,Total_Price) LIKE '%$value_filter%'";
                                        $query_run =mysqli_query($connection,$query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            while($row = mysqli_fetch_array($query_run))
                                            {   
                                                ?> 
                                                <tr>
                                                  <td class="customer_id"><?php echo $row['id']; ?></td>
                                                  <td><?php echo $row['Order_Date']; ?></td>
                                                  <td><?php echo $row['Customer_Name']; ?></td>
                                                  <td><?php echo $row['Ph_Number']; ?></td>
                                                  <td><?php echo $row['Address']; ?></td>
                                                  <td><?php echo $row['Total_Price']; ?></td>
                                                  <td>
                                                    <a href="#" class="btn btn-secondary view_btn" style="border-radius:30px; margin-right:5px;margin-bottom:5px">View</a>
                                                    <a href="#" class="btn btn-info edit_btn" style="border-radius:30px; margin-right:5px;margin-bottom:5px">Update</a>
                                                    <a href="#" class="btn btn-danger delete_btn" style="border-radius:30px">Delete</a>
                                                  </td>
                                                </tr>
                                                <?php                                                
                                            }
                                        }
                                        else{
                                            ?>
                                            <tr>
                                                <td colspan="8" class="text-center">No Record found</td>
                                            </tr>
                                            <?php  
                                        }
                                    }
                                ?>
                                <tr>                  
                                </tr>
                                </tr>
                          </tbody>
                        </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<script>
//View Opeartion
$(document).ready(function () {
       $('.view_btn').click(function (e) { 
           e.preventDefault();
           
           var customer_id = $(this).closest('tr').find('.customer_id').text();
           // console.log(stud_id);
           $.ajax({
               type: "POST",
               url: "customer.php",
               data: {
                   'checking_viewbtn': true,
                   'customer_id': customer_id,
               },
               success: function (response) {
                   // console.log(response);
                   $('.customer_viewing_data').html(response);
                   $('#customerViewModal').modal('show');
               }
           });
       });
   });
        


//Update Operation
      $(document).ready(function(){
        $('.edit_btn').click(function (e){
          e.preventDefault();
          var customer_id = $(this).closest('tr').find('.customer_id').text();
          //console.log(book_id);

            $.ajax({
              type: "POST",
              url: "customer.php",
              data: {
                'checking_edit_btn':true,
                'customer_id':customer_id,
              },
              success: function (response){
                console.log(response);
                
                $.each(response, function (key, value) { 
                //console.log(value['Book_Name']);
                 $('#edit_id').val(value['id']);
                 $('#edit_date').val(value['Order_Date']);
                 $('#edit_name').val(value['Customer_Name']);
                 $('#edit_number').val(value['Ph_Number']);
                 $('#edit_address').val(value['Address']);
                 $('#edit_price').val(value['Total_Price']);
                });

                $('#editcustomermodal').modal('show');
              }
            });
        });
      });

      function getdata()
        {
            $.ajax({
                type: "GET",
                url: "customer.php",
                success: function (response) {
                    // console.log(response);
                    $.each(response, function (key, value) { 
                        // console.log(value['fname']);
                        $('.customer-data').append('<tr>'+
                                '<td class="stud_id">'+value['id']+'</td>\
                                <td>'+value['Order_Date']+'</td>\
                                <td>'+value['Customer_Name']+'</td>\
                                <td>'+value['Ph_Number']+'</td>\
                                <td>'+value['Address']+'</td>\
                                <td>'+value['Total_Price']+'</td>\
                                <td>\
                                    <a href="#" class="badge btn-info viewbtn">VIEW</a>\
                                    <a href="#" class="badge btn-primary edit_btn">EDIT</a>\
                                    <a href="" class="badge btn-danger">Delete</a>\
                                </td>\
                            </tr>');
                    });
                }
            });
        }

//Delete Opearation
        $(document).ready(function () {
     
            $('.delete_btn').click(function (e) { 
                e.preventDefault();
                var customer_id = $(this).closest('tr').find('.customer_id').text();
                // console.log(stud_id);
                $('#delete_id').val(customer_id);
                $('#deletecustomerModal').modal('show');
            });
        });
    
    
    
    </script>
</body>
</html>
