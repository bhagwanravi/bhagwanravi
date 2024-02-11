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
    <title>E-Commerce Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="index.css">
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
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" style="font-size:20px"></i>Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!---<button class="btn btn-outline-light" type="submit">Search</button>--->
        <input type="Submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
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

<!--fourth child-->
    <div class="col-md-10">
      <!--product-->
      <div class="row">

      <!---<div class="col-md-4" style="width:27%;">
        //card
        <div class='card'>
                    <img src='./images/t-shirt1.jpg' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <a href='#' class='btn btn-info'>Add to cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Add to cart</a>
    
                    </div>
    </div>
      </div>

      <div class="col-md-8">
      //related images
      </div>-->
      <!--fetching products-->
        <?php
        //calling function 
        view_details();
        get_unique_categories();
        get_unique_brands();

        ?>

      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
  <img src="../images/jaclyn-moy-ugZxwLQuZec-unsplash.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">Add to cart</a>

  </div>
</div>
  </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
  <img src="../images/amit-lahav-rxN2MRdFJVg-unsplash.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Eat fresh apple its is good for health.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
        <div class="col-md-4 mb-2" >
          <div class="card" style="width: 18rem;">
  <img src="../images/sabrianna-mmCm6c2ru5A-unsplash.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
  <img src="../images/fabian-heimann-4R_WEmhx8og-unsplash.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
  <img src="../images/quaritsch-photography-m2zuB8DqwyM-unsplash.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
    <div class="col-md-4">
          <div class="card" style="width: 18rem;">
  <img src="../images/nordwood-themes-Nv4QHkTVEaI-unsplash.jpg" style="object-fit:cover;"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
<div class="col-md-4 mb-2" >
          <div class="card" style="width: 18rem; margin-left:-639% ;margin-top:10%">
  <img src="../images/biryani.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
<div class="col-md-4 mb-2" >
          <div class="card" style="width: 18rem; margin-left:-957% ;margin-top:-975%">
  <img src="../images/cups.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
<div class="col-md-4">
          <div class="card" style="width: 18rem;margin-top:-2957%">
  <img src="../images/t-shirts.jpg" style="object-fit:cover;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?add_to_cart" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>


<div class="box3 col-md-2 bg-secondary p-0">
  
        <!--brands to display-->
        
       <ul class="navbar-nav me-auto text-center">
        <li class="navbar nav-item bg-info">
          <a href="#" id="link"class="nav-link text-center"><h4>Delivery Brand</h4></a>
        </li>

          <?php
          
          getbrands();
          ?>


        <!--<li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Brand1</h4></a>
        </li>

        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Brand2</h4></a>
        </li>
        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Brand3</h4></a>
        </li>
        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Brand4</h4></a>
        </li>
        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Brand5</h4></a>
        </li>
       </ul>-->

       <!--catagories are displayed-->

       <ul class="navbar-nav me-auto text-center" style=" width: 281px;">
        <li class="navbar nav-item bg-info">
          <a href="#" id="link"class="nav-link text-center"><h4>Categories</h4></a>
        </li>


        <?php
        
        getcategories();

        ?>
        
        
      
        <!--<li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Catagories1</h4></a>
        </li>

        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Catagories2</h4></a>
        </li>
        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Catagories3</h4></a>
        </li>
        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Catagories4</h4></a>
        </li>
        <li class="navbar nav-item ">
          <a href="#" id="link"class="nav-link text-center"><h4>Catagories5</h4></a>
        </li>-->
       </ul>
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