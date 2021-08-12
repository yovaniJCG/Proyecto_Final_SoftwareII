
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoftSystem</title>
  <meta name="description" content="Bienvenidos al SoftSystem.">
    <link rel="shortcut icon" type="image/x-icon" href="images/bodega.png">
   <link rel="stylesheet" href="Iconos/css/all.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <style>
    html {
      box-sizing:border-box;
      font-family: sans-serif;
       background-image: linear-gradient(to right, #a8caba 0%, #5d4157 100%);
      font-size: 20px;
      text-align: center;
      transition:all ease .03s;
    }


    textarea:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus,
    .uneditable-input:focus {
      border-color: rgba(139, 34, 95, 0.8);
      border: 1px solid rgb(64, 64, 218);
      border-radius: 6px;
      box-shadow: 0 0.5px 0.5px rgba(6, 22, 250, 0.075) inset,
        0 0 8px rgb(50, 50, 207);
      outline: 0 none;
      transition:.3s;
    }

    textarea,
    input[type="text"],
    input[type="password"],
    input[type="dateti"],
    input[type="datetime-local"],
    input[type="date"],
    input[type="month"],
    input[type="time"],
    input[type="week"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="sea"],
    input[type="tel"],
    input[type="color"],
    .uneditable-input {
      border: 1px solid rgb(7, 153, 75);
      border-radius: 6px;
      outline: 0 none;
    }

    img{
      width:100px;
      height: 100px; 
      display:inline-block;
      vertical-align: middle;
      border-radius:5%;
    }

    .logo a{
    font-size:25px;
     color: #eecf27;
    
    }

     .logo:hover img{
      transform: scale(1.02);
     }

    .logo span{
      color:#FFF;
        /* color: #eecf27; */
    }

    .nav{
      width:100%;
      margin: 0 auto;
      background-color: #000;
      
    }

    .nav .max-width{
      display:flex;
      max-width:100%;
      margin:0 auto;
      padding: 0 80px;
      /* background: yellow; */
    }

    * {
      padding: 0;
      margin: 0;
    }

    .for {
      width: 30%;
      padding: 1rem;
      background-color: rgb(196, 197, 197);
      margin-top: 2%;
      border-radius: 5%;
      display: inline-block;
      transition: all ease 0.3s;
    }

    .for:hover{
      cursor: pointer;
     box-shadow: 2px 2px 2px 1px gray;
      transform: scale(1.01);
    }

      .for h1 span{
        color:crimson;
      }

           .for h1{
           letter-spacing: 5px;
           font-weight: 600;
           font-family: cursive;
             font-size:40px;
           }

    .item {
      max-width: 100%;
      width: 80%;
      height: 35px;
      font-size: 18px;
      padding-left: 10px;
      margin-top: 8px;
      border: none;
      border-radius: 2%;
    }

    .itemB {
      max-width: 100%;
      width:82%;
      padding: 0.5rem;
      margin-top: 8px;
      font-size: 16px;
      color: #FFF;
      background-image: linear-gradient(45deg, #874da2 0%, #c43a30 100%);
      border-radius: 5%;
      border: thin solid crimson;
      cursor: pointer;
      transition: all ease 0.7s;
    }

  

    .conten{
      width:100%;
      max-width: 100%;
      color:crimson;
      /* background-color:crimson; */
      font-size:18px;
      /* padding:10px; */
      /* border-radius:4%; */
    }

    .conten i{
      font-size:20px;
      color: red;
    }
    
    .log{
      display: block;
      width: 90%;
      background-color: skyblue;
      margin: auto;
      text-align: center;
    border-radius: 6px;
    border: groove;
    transition: all ease 0.5s;
    }
     
     .logi{
      width: 50%;
      height: 180px;
      transition: all ease 0.5s;
     }
    
.log:hover .logi{
  transform: scale(1.03);
}

.msm{
  width: 82%;
  padding: 0.5rem 0;
  margin: auto;
  font-size: 18px;
  color: #BD4229;
  border-color: #F9E8E8;
  border-radius: 5%;
  border: ridge;
  background-color: #FEE8DD;
  transition: all ease 1s;
}

.msm i{
  font-weight: 900;
  color: red;
}

    @media(max-width: 320px) {
      .for {
        width: 100%;
        margin: 5px auto;
      }
    }

    /* .col12 {
      width: 100%;
    } */
  </style>
</head>

<body>

<nav class="nav">
  <div class="max-width">
    <div class="logo">
    <a href="dlogin.php">
      <img src="images/bodega.png" alt="">
      Softsy<span>stem</span>
      </a>
    </div>
  </div>
</nav>

  <form action="dverificar_loguin.php" method="POST">
    <div class="for">
      <div class="log"><img class="logi" src="images/perfil.png"></div>
      <h1>Lo<span>gin</span></h1>
      <hr>
      <?php 

        if(isset($_GET["status"])){
            if($_GET["status"] === "a"){
      ?>
            <div class="msm">
            <i class="fas fa-times vertical-align:middle"></i> El usuario ingresado no existe.
            </div>
        <?php
        }else if($_GET["status"]==="b"){
            ?>
          <div class="msm">
          <i class="fas fa-times"></i> Usuario o contraseña incorrectos.
            </div>
               <?php
        }else if($_GET["status"]==="c"){
            ?>
          <div class="msm">
               <i class="fas fa-times"></i> Acceso denegado "campos vacíos".
            </div>
               <?php
        }else if($_GET["status"]==="d"){
          ?>

           <div class="msm">
               <i class="fas fa-check-circle"></i> DiseñosYGC 99582020 <a href="#"> ver respository.</a>
            </div>

            <?php
        }
      }
        ?>
      
      <input class="item col12" type="text"  name="user" id="user" placeholder="Ingresa tu usuario" maxlength="5"><br>
      <input class="item col12" type="password" name="contra" id="contra" placeholder="Ingresa tu contraseña" maxlength="8" 
        ><br> 
      <input class="itemB" type="submit" name="enviar" value="INGRESAR">
    </div>

  </form>



</body>


</html>