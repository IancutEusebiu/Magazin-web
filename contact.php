
<?php 
$success ="";
$failed="";
$emailErr="";
require_once ('sentMail.php');
$pag="contact.php"
?>
 

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="scripts.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>


/* Add a background color and some padding around the form */
.container-sm {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;

}
   textarea{
     width:80%;
     height: 80px;
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
  <br> <br> <br> <br> <br> 
  <div class="container-sm">
  <h4>Formular de contact:</h4><br>
  <form action="mailto:pesm2706@gmail.com" name="myform"  onsubmit="return checkForm(this);">
      <label for="nume">Nume:</label> <input type="text" name="nume" id="nume" /><br><br>
      <label for="pnume">Prenume:</label> <input type="text" name="pnume" id="pnume" /><br><br>
      <label for="telefon">Telefon:</label> <input type="text" name="telefon" id="telefon" /><br><br>
      <label for="email">E-mail:</label> <input type="text" name="email" id="email" /><br><br>
      <label for="subiect">Subiect:</label> <input type="text" name="subiect" id="subiect" /><br><br>
     
      <label for="mesaj">Mesaj:</label><br> <textarea placeholder="Introduceti mesajul ...." name="mesaj" id="mesaj"></textarea><br><br>
      <button type="submit" name="fsubmit" id="fsubmit" value="Submit" class="btn btn-primary" onclick="myFunction()">Submit</button>
 
</form>

</div><br> <br>
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
var regx_chr = /^([a-zA-Z]+)$/;
var regx_mail = /^([a-zA-Z0-9]+[a-zA-Z0-9._%-]*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$/;    // RegExp pt. adresa e-mail
var regx_telefon=/^(\+4|)?(07[0-8]{1}[0-9]{1}|02[0-9]{2}|03[0-9]{2}){1}?(\s|\.|\-)?([0-9]{3}(\s|\.|\-|)){2}$/;
// Functia care e apelata la "onsubmit"
// preia campurile din formular, verifica /valideaza datele adaugate
function checkForm(frm1) {
  var fre = false;             // variabila ce va fi returnata de functie

  // preluare casete formular
  var nume = frm1.nume;
  var pnume = frm1.pnume;
  var email = frm1.email;
  var telefon=frm1.telefon;
  var subiect=frm1.subiect;
  var mesaj=frm1.mesaj;
   
  if(nume.value.length<3 || nume.value.length>18 || nume.value.search(regx_chr)==-1) {
    alert('Numele trebuie sa contina intre 3 si 18 caractere \n Litere');
    nume.select();    // 
  }
  else if(pnume.value.length<3 || pnume.value.length>18 || pnume.value.search(regx_chr)==-1) {
    alert('Prenumele trebuie sa contina intre 3 si 18 caractere \n Litere');
    pnume.select();    
  }
  else if(telefon.value.search(regx_telefon)==-1){
    alert('Numarul de telefon trebuie sa fie sub forma:\n02********-03******** sau 072*******-078*******');
    telefon.select(); 
  }
  else if(email.value.search(regx_mail)==-1) {
    alert('Adaugati o adresa de e-mail corecta\n de forma:abc@xyz.com');
    email.select();    // selecteaza casuta pt. E-mail
  }
  else if(subiect.value<3) {
    alert('Subiectul trebuie sa contina minim trei caractere!');
    subiect.select();    // selecteaza casuta pt. E-mail
  }
  else if(mesaj.value<3) {
    alert('Mesajul este prea scurt!(minim 3 caractere)');
    mesaj.select();    // selecteaza casuta pt. E-mail
  }
   
  else fre = true;

  return fre;
}

function myFunction() {
    var vari =confirm("Sunteti sigur ca doriti sa trimiteti cererea de contact?");
    if (!vari) {
    return false;
    }
}
</script>
</body>
<script src="tema.js"></script>
</html>
