<?php
require_once ('db.php');
$pag="help.php"
 ?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Help</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="scripts.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
      mark {
  background-color:blue;
  color: black;
}

.figure-caption{
  color: black;
  
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
    
  </div><br><br><br><br><br>
   

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<button onclick="downFunction()" id="myBtn2" title="Go to down"><i class="fas fa-arrow-down"></i></i></button>

<div class="container">
<h2 style="text-align: center;">Descriere site </h2>
<div class="row justify-content-evenly">
<div class="col align-self-start">
  <div class="toc">
<div class="list-group">
<H3>Cuprins:</H3>
  <a href="#baranav" class="list-group-item list-group-item-action">Bara de navigație</a>
  <a href="#exp" class="list-group-item list-group-item-action">Buton Explore Now</a>
  <a href="#latest" class="list-group-item list-group-item-action">Latest Products</a>
  <a href="#social" class="list-group-item list-group-item-action ">Linkuri catre social media</a>
  <a href="#move" class="list-group-item list-group-item-action ">Butoane Up si Down</a>
  <a href="#adauga" class="list-group-item list-group-item-action ">Adauga produs in cos</a>
  <a href="#contact" class="list-group-item list-group-item-action ">Contact</a>
  <a href="#tema" class="list-group-item list-group-item-action ">Comutare la tema intunecata</a>
  <a href="#stergere" class="list-group-item list-group-item-action ">Stergerea unui produs din cos</a>
</div>
</div>
</div>
</div><br>
<div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
  
<div class="br1" id="baranav"><br><br><br></div>
<figure class="figure">

<h2  class="sectiune">Bara de navigație</h2>
  <img src="images/navbar (2).jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">(1) - Dacă se da click pe titlul site-ului se încarcă pagina de început a site-ului.<br>(2) - Dacă se da click pe "Home" se încarcă pagina de start a site-ului.<br>(3) - Dacă se da click pe "Produse" se încarca pagina cu produsele a site-ului.<br>(4) - Dacă se da click pe "Contact" se încarca pagina de contact a site-ului.<br>
  (5) - Dacă se da click pe "Despre" se încarca pagina despre a site-ului.<br>(6) - Pentru a folosi funcția de căutare a site-ului se scrie text în căsuță din stanga lupei și se apasă pe lupa.<br>
  (7) - Dacă se da click pe pictograma se încarca pagina Help.<br>(8) - Dacă se da click pe imaginea cu cosul se încarca Cos de cumparaturi.</figcaption>
</figure>
<div class="br1" id="exp"><br><br><br></div>
<h2  class="sectiune">Butonul "Explore Now"</h2>
<figure class="figure">
  <img src="images/explore now.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">- Dacă se da click pe acest buton se încarcă pagina cu produse a site-ului.
   </figcaption>
</figure>
<div class="br1" id="latest"><br><br><br></div>
<h2  class="sectiune">Sectiunea Latest Products</h2>
<figure class="figure">
  <img src="images/latest.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">- Dacă se da click pe un produs se încarcă pagina cu detalii a produsului.
   </figcaption>
</figure>
<div class="br1" id="social"><br><br><br></div>
<h2  class="sectiune">Linkuri cate social media</h2>
<figure class="figure">
  <img src="images/social.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">- Dacă se da click pe buton vom fi redirectionati catre pagina de login.
   </figcaption>
</figure>
<div class="br1" id="move"><br><br><br></div>
<h2  class="sectiune">Butoane Up/Down</h2>
<figure class="figure">
  <img src="images/up.jpg" class="figure-img img-fluid rounded" alt="..."><img src="images/down.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">(1) Dacă se da click pe buton vom ajunge in partea de jos a pagini.<br>(2) Dacă se da click pe buton vom ajunge in partea de sus a pagini.
   </figcaption>
</figure>
<div class="br1" id="adauga"><br><br><br></div>
<h2  class="sectiune">Adauga produs in cos</h2>
<figure class="figure">
  <img src="images/acos.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">- In casuta text va trebui sa adaugam cantitatea iar la apasarea pe butonul "Add to Cart" produsul se adauga in cos.
   </figcaption>
</figure>
<div class="br1" id="contact"><br><br><br></div>
<h2  class="sectiune">Contact</h2>
<figure class="figure">
  <img src="images/contact.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">- Se introduc datele personale plus subiectul si mesajul , iar dupa se apasa pe butonul "Submit" pentru a trimite o cerere de contact.
   </figcaption>
</figure>
<div class="br1" id="tema"><br><br><br></div>
<h2  class="sectiune">Schimbare tema site</h2>
<figure class="figure">
  <img src="images/8.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">-Prin comutarea acestui buton de la sfarsitul unei pagini putem schimba tema.
   </figcaption>
</figure>
<div class="br1" id="stergere"><br><br><br></div>
<h2  class="sectiune">Stergerea unui produs din cos</h2>
<figure class="figure">
  <img src="images/9.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">-Pentru a sterge un produs din cos trebuie sa dam click pe cosul de cumparaturi din bara de navigatie iar dupa dam pe butonul "Remove".
   </figcaption>
</figure>
</div>
</div>
</div>
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


function downFunction() {
  var mybtndown = document.getElementById("foo");
  mybtndown.scrollIntoView();

}



</script>
</body>
<script src="tema.js"></script>
</html>
