<?php
require_once ('db.php');

session_start();  

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
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
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
                     echo '<script>window.location="cart.php"</script>';  
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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cos de cumparaturi</title>
  <link rel="stylesheet" href="css/style.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>

</style>
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
    </div><br><br><br><br><br><br><br><br>
 
<!--cart items details-->
<div class="container">

                     <table >  
                          <tr>  
                               <th width="40%">Nume produs</th>  
                               <th width="10%">Cantitate</th>  
                               <th width="20%">Pret</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td> <?php echo $values["item_price"]; ?> lei</td>  
                               <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> lei</td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><?php echo number_format($total, 2); ?> lei</td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
            
           <br>  
  </div><br> <br> <br> <br><br>
<!---footer-->

<div class="footer" id="foo">
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




</body>
<script src="tema.js"></script>
</html>