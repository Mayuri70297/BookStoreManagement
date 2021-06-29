<?php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "shop_management");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id"); 
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'             =>     $_POST["hidden_name"],  
                     'item_author'           =>     $_POST["hidden_author"], 
                     'item_price'            =>     $_POST["hidden_price"],  
                     'item_quantity'         =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="AddSell.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'             =>     $_POST["hidden_name"],  
                'item_author'           =>     $_POST["hidden_author"], 
                'item_price'            =>     $_POST["hidden_price"],  
                'item_quantity'         =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="AddSell.php"</script>';  
                }  
           }  
      }  
 }  
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
.searchbox{
  padding: 5px; 
  border-radius:5px; 
  padding-right:100px; 
  text-align:left;
}
.title{
  font-size: 45px;
  color : tomato;
  letter-spacing: 3px;
  font-weight: bold;
}
.bg-success th{
  text-align: center;
  font-size: 18px;
}
.bg-warning th{
  text-align: center;
  font-size: 18px;
}

.bg-secondary{
  text-align: center;
  font-size: 5px;
  color: #fff;
  
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
   <br /> 

   <div class="container text-center" style="margin-top:40px">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center title">Order Details</h1></br>
                    </div>
                    <div class="card-body">
                      <div class="message-show">

                      </div>
                      <form class="form-group" action="AddSelldb.php" method="POST">
                      <div class="row" style="text-align: left"> 

                          <div class="col-sm-6">
                            <label for="">Order Date</label>
                            <input type="date" class="form-control" name="Order_Date" required>
                          </div>
                          <br>
                          <div class="col-sm-6">
                            <label for="">Customer Name</label>
                            <input type="text" class="form-control" placeholder="Customer Name" name="Customer_Name" required>
                          </div>

                          <div class="col-sm-6">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number" name="Ph_Number" required>
                          </div>
                         
                          <div class="col-sm-6">
                            <label for="">Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="Address" required>
                          </div>

                          <div class="col-sm-6">
                            <label for="">Total Quantity</label>
                            <input type="text" class="form-control" placeholder="Total Quantity" name="Total_Quantity" required>
                          </div>

                          <div class="col-sm-6">
                            <label for="">Total Price</label>
                            <input type="text" class="form-control" placeholder="Total Price" name="Total_Price" required>
                          </div>
                      </div>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-center">
                                <tr class="bg-warning">
                                    <th width="30%">Item Name</th> 
                                    <th width="10%">Quantity</th>  
                                    <th width="20%">Price</th>  
                                    <th width="15%"><b>Total</b></th>  
                                    <th width="5%">Action</th>  
                                </tr>
                            </thead>
                          <tbody class="book-data">
                          <?php   
                            if(!empty($_SESSION["shopping_cart"]))  
                            {  
                                 $total = 0;  
                                 foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                 {  
                            ?>  
                            <tr>  
                                 <td name="product_name"><?php echo $values["item_name"]; ?></td>  
                                 <td><?php echo $values["item_quantity"]; ?></td>  
                                 <td name="product_price">Rs. <?php echo $values["item_price"]; ?></td>  
                                 <td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                 <td><a href="AddSell.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="btn btn-danger">Remove</span></a></td> 
                            </tr>  
                            <?php  
                                      $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                 }  
                            ?>  
                            <tr>  
                                 <td colspan="3" align="right"><b>Total</b></td>  
                                 <td align="center"><b>Rs. <?php echo number_format($total, 2); ?></b></td> 
                                 <td align="right"><input type="submit" name="save" value="Save" class="btn btn-primary"></td>  
                            </tr>  
                            <?php  
                            }  
                          ?>  
                          </tbody>
                        </table> 
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top:40px">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center title">Book Details</h1></br>
                    </div>
                    <div class="card-body">
                      <div class="message-show">
                      </div>
                        <br>

                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-center">
                                <tr class="bg-success">
                                    <th scope="col">Id</th>
                                    <th scope="col">Book_Name</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Barcode</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Select_Type</th>
                                    <th scope="col">Price</th>
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                          <tbody class="book-data">
                                <?php                                     
                                         $query = "SELECT * FROM add_book ORDER BY id ASC"; 
                                         $result = mysqli_query($connect, $query);  
                                         if(mysqli_num_rows($result) > 0)
                                         {
                                             while($row = mysqli_fetch_array($result))
                                             {   
                                                ?> 
                                                <tr>
                                                <form method="post" action="AddSell.php?action=add&id=<?php echo $row["id"]; ?>">  
                                                    <td class="book_id"><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['Book_Name']; ?></td>
                                                    <td><?php echo $row['Author']; ?></td>
                                                    <td><?php echo $row['Barcode']; ?></td>
                                                    <td><?php echo $row['Stock']; ?></td>
                                                    <td><?php echo $row['Select_Type']; ?></td>
                                                    <td>Rs. <?php echo $row['Price']; ?></td>  
                                                    <td>
                                                      <input type="text" name="quantity" class="form-control" value="1" />  
                                                      <input type="hidden" name="hidden_name" value="<?php echo $row["Book_Name"]; ?>" /> 
                                                      <input type="hidden" name="hidden_author" value="<?php echo $row["Author"]; ?>" /> 
                                                      <input type="hidden" name="hidden_barcode" value="<?php echo $row["Barcode"]; ?>" /> 
                                                      <input type="hidden" name="hidden_stock" value="<?php echo $row["Stock"]; ?>" /> 
                                                      <input type="hidden" name="hidden_type" value="<?php echo $row["Select_Type"]; ?>" /> 
                                                      <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />  
                                                      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Add to Cart" />   
                                                    </td>
                                                  </form> 
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

    <div style="clear:both"></div>  
                <br />  
</body>
</html>
