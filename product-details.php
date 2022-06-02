<?php
require_once ('db.php');
$pag="product-details.php";

$id = $_GET["myid"];
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produs</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="scripts.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body >
 
<div class="wrapper">
    <nav>
     
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="index.php"><img src="images/logo.png"  width="100px" height="90px"></a></div>
        <ul class="links">
          <li class="<?php echo ($pag == "index.php" ? "active" : "")?>"><a class="nav-link" href="index.php">Home</a></li>
          <li class="<?php echo ($pag == "products.php" ? "active" : "")?>"><a class="nav-link" href="products.php">Produse</a></li>
          <li class="<?php echo ($pag == "despre.php" ? "active" : "")?>"><a class="nav-link" href="despre.php">Despre</a></li>
          <li class="<?php echo ($pag == "contact.php" ? "active" : "")?>"><a class="nav-link" href="contact.php">Contact</a></li>
          <li><a class="nav-link" href="help.php"> <img src="images/info.svg"  width="30px" height="30px"></a></li>
          
        </ul>
        
      </div>
      
      <form id="searchForm" action="javascript:search();" class="search-box">
        <input id="input" type="text" placeholder="Search.." name="search">
        <button type="submit" onclick="FindNext ();"><i class="fas fa-search"></i></button>
        
      </form>
      
     <div class="mode">
      
          
           
     </div>
     <div class="cart">
       <a href="cart.php"> <img src="images/cart.png"  width="30px" height="30px"></a>
     </div>
     
    </nav>
    
  </div>
  <br><br><br><br>
    
 <!---Single product details-->
<div class="container single-product">
    <div class="row">
    <?php
 
 $query = "SELECT * FROM produse WHERE id =$id";
 #echo $query;	
 $result = mysqli_query ($con,$query); // Rulare query.
 
$num=mysqli_num_rows($result);
 if($num>0){
    while($product=mysqli_fetch_array($result)) {
 
?>
 <div class="col-2">
            <img src="<?php echo $product['imagine1'];?>" id="ProductImg" ><br><br>
            <div class="small-image-row">
                <div class="small-image-col">
                    <img src="<?php echo $product['imagine1'];?>" class="small-img">
                </div><br>
                <div class="small-image-col">
                <img src="<?php echo $product['imagine2'];?>" class="small-img">
            </div><br>
            <div class="small-image-col">
                <img src="<?php echo $product['imagine3'];?>" class="small-img">
            </div><br>
                 </div>
        </div>
        <div class="col-2">
        <form method="post" action="cart.php?action=add&id=<?php echo $product["id"]; ?>">  
            <h2><?php echo $product['nume'];?></h2>
            <h4><?php echo $product['pret'];?> lei</h4>
            <h3>Cantitate:</h3>
            <input type="text" name="quantity" class="form-control" value="1" />  
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <br>
            <p> <?php echo $product['descriere'];?></p>
            <input type="hidden" name="hidden_name" value="<?php echo $product["nume"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $product["pret"]; ?>" /> 
               
         </form>
        </div>
        <?php 
if ($_GET["cat"]=="laptop" || $_GET["cat"]=="pc") {  
        ?>
        <div class="container mt-3">
   <br>       
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Procesor</th>
        <th>RAM</th>
        <th>Stocare</th>
        <th>Placa video</th>
      </tr>
    </thead>
    <tbody>
        
      <tr>
        <td><?php echo $product['i1'] ?></td>
        <td><?php echo $product['i2'] ?></td>
        <td><?php echo $product['i3'] ?></td>
        <td><?php echo $product['i4'] ?></td>
      </tr>
      
    </tbody>
  </table>
</div>
<?php
}
else if($_GET["cat"]=="smartphone")
{ ?>
    <div class="container mt-3">
    <br>       
   <table class="table table-dark table-striped">
     <thead>
       <tr>
         <th>Procesor</th>
         <th>RAM</th>
         <th>Stocare</th>
         <th>Camera foto</th>
       </tr>
     </thead>
     <tbody>
         
       <tr>
         <td><?php echo $product['i1'] ?></td>
         <td><?php echo $product['i2'] ?></td>
         <td><?php echo $product['i3'] ?></td>
         <td><?php echo $product['i4'] ?></td>
       </tr>
       
     </tbody>
   </table>
 </div>
 <?php
}
else if($_GET["cat"]=="monitor")
{ ?>
    <div class="container mt-3">
    <br>       
   <table class="table table-dark table-striped">
     <thead>
       <tr>
         <th>Diagonala</th>
         <th>Rezolutie</th>
         <th>Rata refresh</th>
         <th>Numar de culori</th>
       </tr>
     </thead>
     <tbody>
         
       <tr>
         <td><?php echo $product['i1'] ?></td>
         <td><?php echo $product['i2'] ?></td>
         <td><?php echo $product['i3'] ?></td>
         <td><?php echo $product['i4'] ?></td>
       </tr>
       
     </tbody>
   </table>
 </div>
 <?php
}

?>

    </div>
</div>

<?php
    }
 
 }
  
?>
       




<!---footer-->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Useful Links</h3>
                
            </div>
            <div class="col">
                <img src="images/logo.png">
                <p>Helping Technology Work With You & For You</p>
            </div>
           
            <div class="col">
          <div class="theme-switch-wrapper">
          <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
         </label>
  <em>Comuta intre teme</em>
        </div>
        </div>
    </div>
    <div class="container">
                <!-- Facebook -->
          <a class="btn btn-primary" style="background-color: #3b5998;" href="https://ro-ro.facebook.com/" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <!-- Twitter -->
          <a class="btn btn-primary" style="background-color: #55acee;" href="https://twitter.com/i/flow/login" role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a class="btn btn-primary" style="background-color: #dd4b39;" href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a class="btn btn-primary" style="background-color: #ac2bac;" href="https://www.instagram.com/accounts/login/" role="button"
            ><i class="fab fa-instagram"></i
          ></a>
          <!-- Youtube -->
          <a class="btn btn-primary" style="background-color: #ed302f;" href="https://www.youtube.com/" role="button"
            ><i class="fab fa-youtube"></i
          ></a>
      </div>
      <hr>
      <p class="copyright">Copyright 2021</p>
  </div>
</div>

<!--js for product gallery-->
<script>
    var ProductImg=document.getElementById("ProductImg");
    var SmalllImg=document.getElementsByClassName("small-img");

SmalllImg[0].onclick=function(){
    ProductImg.src=SmalllImg[0].src;
}
SmalllImg[1].onclick=function(){
    ProductImg.src=SmalllImg[1].src;
}
SmalllImg[2].onclick=function(){
    ProductImg.src=SmalllImg[2].src;
}

function FindNext () {
            var str = document.getElementById ("input").value;
            if (str == "") {
                alert ("Introduceti textul dorit in casuta search");
                return;
            }
            
            if (window.find) {        // Firefox, Google Chrome, Safari
                var found = window.find (str);
                if (!found) {
                    alert ("Nu sa putut gasi nici un rezutat dupa :\n" + str);
                }
            }
            else {
                alert ("Browserul nu suporta cautarea!");
            }
        }
</script>
</body>
<script src="tema.js"></script>
</html>