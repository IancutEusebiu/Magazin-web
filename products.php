<?php
require_once ('db.php');
$pag="products.php";
//pagination
 
 

 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produse</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="scripts.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/regular.min.js"/>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
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
 
 
<div class="container">
     <form action="search_product.php" method="get" class="search-box">
        <input type="text" placeholder="Cauta produs dupa nume" name="search">
        <button type="submit"><i class="fas fa-search"></i></button>
        
      </form>

      <div class="card-header">
                        <h4>Sorteaza produse dupa pret:</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <select name="sort_pret" class="form-control">
                                            <option value="">--Select Option--</option>
                                            <option value="pret-crescator" <?php if(isset($_GET['sort_pret']) && $_GET['sort_pret'] == "pret-crescator") { echo "selected"; } ?> > Pret crescator</option>
                                            <option value="pret-descrescator" <?php if(isset($_GET['sort_pret']) && $_GET['sort_pret'] == "pret-descrescator") { echo "selected"; } ?> > Pret descrescator</option>
                                        </select>
                                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                                            Sorteaza
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
</div><br><br>

<div class="container">
  <div class="d-flex flex-wrap">
    <?php
    if(isset($_GET['sort_pret']))
    {$sortare=$_GET['sort_pret'];}
    $sort_option = "";
    $per_page_record = 8;
    // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {    
       $page  = $_GET["page"];    
   }    
   else {    
     $page=1;    
   }    
   
   $start_from = ($page-1) * $per_page_record;
  
   
   
   if(isset($sortare))
                               {
                                
                                   if($_GET['sort_pret'] == "pret-crescator"){
                                       $sort_option = "ASC";
                                       $query = "SELECT * FROM produse ORDER BY pret ASC  LIMIT $start_from, $per_page_record"; 
                                   }elseif($_GET['sort_pret'] == "pret-descrescator"){
                                       $sort_option = "DESC";
                                       $query = "SELECT * FROM produse ORDER BY pret DESC  LIMIT $start_from, $per_page_record"; 
                                   }
                               } 
                               elseif(empty($_GET['sort_pret']))
                               {
                                
                                $query = "SELECT * FROM produse LIMIT $start_from, $per_page_record"; 
                               }

    $rs_result = mysqli_query ($con, $query);
    $query2 = "SELECT COUNT(*) FROM produse";     
    $rs_result2 = mysqli_query($con, $query2);     
    $row = mysqli_fetch_row($rs_result2);     
    $total_records = $row[0];

    
     $num=mysqli_num_rows($rs_result);
        if($num>0){
            while($product=mysqli_fetch_array($rs_result)) {
              
                
            ?>
            <div class="col-2"><br>
              <div class="card "  style="width: 18rem;">
                            <a href="product-details.php?myid=<?php echo $product['id']; ?>&cat=<?php echo $product['categorie']; ?>"><img src="<?php  echo $product['imagine1'];  ?>" class="card-img-top" alt="..."></a>
                          
                            <h4><?php echo $product['nume']; ?></h4>
                            <p><?php echo $product['pret'];?> lei</p>
           
                           
                </div>
           </div>
         <?php
            }
        
        }

     ?>
 </div>
</div><br>
<div class="pagination"> 
 <?php
 
 // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='products.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='products.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='products.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='products.php?page=".($page+1)." '>  Next </a>";   
        }   
  
      ?>      
</div>
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

<script>
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
