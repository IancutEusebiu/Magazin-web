<?php
require_once ('db.php');
$pag="despre.php"
 ?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Despre</title>
  <link rel="stylesheet" href="css/style.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
      mark {
  background-color:blue;
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
   


<div class="container">
<h2 style="text-align: center;">Despre noi </h2>
<h4><mark>Colaboratori</mark></h4>
 <h6>Colaborarea cu liderii internaţionali din domeniul IT, precum: Intel®, Dell®, Toshiba®, IBM®, Xerox ®, Microsoft ®, Fujitsu®, HP® şi alţii, a consolidat şi a crescut garanţia unei oferte complete de produse şi servicii, bazate pe cele mai bune competenţe şi tehnologii.
</h6>
<h4><mark>Echipa</mark></h4>
<h6>Echipa IT-World este o echipă puternică şi dinamică care alături de principii şi valori solide a facut posibilă dezvoltarea continuă a companiei in cei peste 15 ani de existenţă pe piaţa locală, dezvoltare atât pe sectorul business la clienţi corporate şi instituţii publice cât şi la persoane fizice, ajungând astfel în topul companiilor de IT regionale.
</h6>
<h4><mark>Principii</mark></h4>
<h6>
Pornind de la concepţia potrivit căreia un brand solid se construieşte în timp, în jurul unui produs/serviciu de calitate constantă, IT-World a aşezat la baza activităţii sale principii solide şi indispensabile construirii unei afaceri de succes:
   <br>» Ne orientam dupa NEVOILE CLIENTILOR si personalizam serviciile oferite
   <br>» Lucram in SINERGIE cu valorile clientilor nostri
   <br>» Credem in INOVATIE, promtitudine si eficienta
   <br>» Asiguram un RAPORT OPTIM intre costuri si performanta
   <br>» Aducem un PLUS DE VALOARE prin produsele si serviciile noastre
</h6>
<h4><mark>Misiunea</mark></h4>
<h6>
Misiunea IT-World este aceea de a oferi clienţilor servicii, produse şi soluţii IT avansate si de înaltă calitate precum şi personalizarea produselor şi serviciilor în funcţie de nevoile fiecărei companii sau instituţii beneficiare.
</h6>
<h4><mark>Viziunea</mark></h4>
<h6>
Dezvoltarea domeniului IT&C în cadrul comunităţilor unde IT-World va fi prezent, atât în ce priveşte noua tehnologie cât şi personalizarea tehnologiei la nivel de individ sau companie.
Ne propunem să dezvoltăm şi să implementăm soluţii IT care să ajute la dezvoltarea şi succesul clienţilor noştri , pentru că:<br>
     <strong>Ştim că succesul nostru se clădeşte pe succesul CLIENŢILOR noştri<strong>.
</h6>
<h4><mark>Cum comand?</mark></h4>
<h6>
 Modalitati de plasare comanda :<br>
    -telefonic la numarul:0321212232
</h6>
<h4><mark>Politica de retur</mark></h4>
<h6>
In cazul in care intentionezi sa returnezi un produs, te rugam sa citesti cu atentie urmatoarele conditii:<br>

1. IT-World SRL ofera clientilor sai, persoane fizice, posibilitatea sa returneze produsele cumparate in maxim 15 zile de la data primirii acestora, fara invocarea vreunui motiv.<br>
2. Produsele returnate trebuie sa fie in aceeasi stare in care au fost trimise Clientului: in ambalajul original intact, cu toate accesoriile, fara sa prezinte vreo urma de deteriorare si cu etichetele inițiale intacte.<br>
3. In cazul in care o comanda la care s-a oferit un produs cadou este returnata, clientul este obligat sa returneze si cadoul in starea lui originala.<br>
4. Daca s-au achizitionat mai multe bucati din acelasi produs si se returneaza toate, doar unul din produse poate fi desigilat.<br>
5. Nu se accepta pentru returnare produsele care prezinta modificari fizice, lovituri, ciobiri, zgarieturi, socuri, urme de folosire excesiva si/sau interventii neautorizate etc.<br>
6. Expedierea coletului retur intra in sarcina clientului, care poate expedia coletul cu ce firma de curierat rapid doreste. Costurile de transport sunt suportate de client.<br>
7. Va rugam sa ambalati foarte bine produsul retur, pentru a ajunge in siguranta la noi (daca se poate, utilizati folie cu bule si puneti produsul intr-o alta cutie). De asemenea, coletul trebuie sa fie protejat si impotriva interperiilor.<br>
Este interzisa lipirea awb-ul direct pe ambalajul produsului.<br>
8. In coletul retur va rugam sa puneti o copie a facturii (daca aveti posibilitate) si o notificare scrisa cu contul bancar si titularul contului (asa cum apare la banca), precum si un numar de telefon.<br>
9. Va rugam sa trimiteti coletele retur la adresa de unde le-ati primit (o gasiti si pe acest site la sectiunea `contact`)<br>
10. Rambursarea in contul bancar a contravalorii produsului conform facturii, mai putin costul transportului, se efectueaza in maxim 30 zile  de la primirea returului.<br>
11. In cazul in care produsul prezinta deteriorari, altele decat cele cauzate de normala utilizarea a produsului, ne rezervam dreptul sa retinem o parte din suma ce trebuie returnata intrucat produsul nu mai poate fi vandut ca si produs nou.<br>

</h6>
<h4><mark>Date de contact</mark></h4>
<h6>
Date comerciale<br> 
      SC IT-World SRL<br> 
      J24/2072/2006; RO 20169099<br> 
      B-dul Bucuresti, Nr 21<br> 
      Timisoara<br> 
      Telefon:0321212232<br> 
      Email:itworld@it.ro<br> 
</h6>
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
<script src="scripts.js"></script>
</html>
