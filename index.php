<?php
require_once ('db.php');
$pag="index.php";
 ?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WebShop</title>
  <link rel="stylesheet" href="css/style.css">
  
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
video {
    width: 80%;
    height: auto;
    
  }
  .btn {background-color: blue;
    transition-duration: 0.4s;
   
    color: white;
  }
  
</style>

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
   <div class="container-fluid">
<div class="header">
  <div class="row">
  
    <div class="col-2">
        <h1><br><br>
           Achizitii Echipamente IT
        </h1>
        <p>Furnizorul dvs. de incredere cu o gama larga de echipamente pentru afacerea dvs.</p>
        <a href="products.php" class="btn">Explore Now &#8594;</a>
     </div>
    <div class="col-2">
        <img src="images/echipamente.png">
        
    </div>
    
    </div>
</div>
</div>
</div><br><br>
<div class="container">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

              <!-- Indicators/dots -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
              </div>
              
              <!-- The slideshow/carousel -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/monitor_cat.webp" alt="New York" class="d-block" style="width:100%">
                
                </div>
                <div class="carousel-item">
                  <img src="images/smartphone_cat.png" alt="Chicago" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                <img  src="images/monitor_cat.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                <img  src="images/pc_cat.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                </div>
              </div>
              
              <!-- Left and right controls/icons -->
              <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" ></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>

</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<button onclick="downFunction()" id="myBtn2" title="Go to down"><i class="fas fa-arrow-down"></i></i></button>

<br><br><h2 style="text-align: center;">Latest Products</h2><br><br>
<div class="container" >
<div class="d-flex flex-wrap">
  
         <?php
 
 $query = "SELECT id, nume, pret,imagine1,categorie FROM produse order by data DESC LIMIT 4"; 
 #echo $query;	
 $result = mysqli_query ($con,$query); // Rulare query.
 
$num=mysqli_num_rows($result);
 if($num>0){
    while($product=mysqli_fetch_array($result)) {

?>
         <div class="col-2">
         <div class="card " style="width: 18rem;">
         <a href="product-details.php?myid=<?php echo $product['id']; ?>&cat=<?php echo $product['categorie']; ?>"><img src="<?php  echo $product['imagine1'];  ?>" class="card-img-top" alt="..."></a>
            <h4><?php echo $product['nume']; ?></h4>
            <p><?php echo $product['pret'];?> lei</p>
         </div><br>
         </div>
         
         <?php
    }
 
 }
  
?>
         </div>
           
     
  </div>   
</div>
</div>
<div class="container">
<video width="800px" height="500px" 
        controls="controls"/> 
          
        <source src="Video/Top 5 - Best Laptops 2021.mp4" 
            type="video/mp4"> 
    </video> 
    </div><br><br>

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
          </div><br><br>

          <div class="col">
          <div class="theme-switch-wrapper">
          <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
         </label>
  <em>Activare tema intunecata!</em>
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
  //up button
  //Get the button:
mybuttontop = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunctionDown()};

function scrollFunctionDown() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybuttontop.style.display = "block";
  } else {
    mybuttontop.style.display = "none";
  }
}



// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
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

        mybuttondown = document.getElementById("myBtn2");

function downFunction() {
  var mybtndown = document.getElementById("foo");
  mybtndown.scrollIntoView();

}



/*
window.onscroll = function(ev) {
  if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
        // you're at the bottom of the page
        mybuttondown.style.display = "none";
    }
    else{mybuttondown.style.display = "block";}
}
*/

</script>

</body>
<script>
  const toggleSwitch = document.querySelector('.footer .theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light'); //add this
    }    
}

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}
  </script>
</html>
