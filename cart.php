<!--connect file-->

<?php
include('include/connect.php');
include('functions/common_function.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website cart-details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="index1.css">
</head>
<body>
    <!--first child-->

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:20px"></i>Cart
        <?php
        
        cart_item();
        ?>
        
        </a>

        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<!--calling cart function-->

<?php

cart();
?>
<!--secondary child-->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
</nav>

<!--third child-->

<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>

<!--fourth child-table-->

<div class="container4" style="width:90%; margin-left:90px;">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                   <th>Product Title</th>
                   <th>Product Image</th>
                   <th>Quantity</th>
                   <th>Total Price</th>
                   <th>Remove</th>
                   <th colspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Apple</td>
                    <td><img src="./images/apple1.jpg" alt=""></td>
                    <td><input type="text" name="" id=""></td>
                    <td>9000</td>
                    <td><input type="checkbox"></td>
                    <td>
                        <button class="bg-info px-3 py-2 border-0 mx-3">Update</button><button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!--subtotal-->

        <div class="d-flex mb-5">
            <h4 class="px-3"style="margin-left:-2%">Subtotal:<strong class="text-danger">5000/-</strong></h4>
            <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue Shopping</button></a>
            <a href="#"><button class="bg-secondary p-3 py-2 border-0 text-light">Checkout</button></a>
        </div>
    </div>
</div>
<!--last child-->

<!--include footer-->

<?php

//include('./include/footer.php');

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    
</body>
</html>