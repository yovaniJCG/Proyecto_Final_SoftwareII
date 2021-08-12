<?php  
session_name("yova");
session_start();

if (!isset($_SESSION["usuario"])) {
  header("location:dlogin.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;800;900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="Iconos/css/all.min.css">

  <link rel="stylesheet" href="css/reset.css?t=1">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/layout.css?t=1">
  <link rel="stylesheet" href="css/nav.css?t=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header class="container-fluid header">
    <div class="container f0">
      <div class="item ph12 md4  inli-block  vertical-middle">
          <a href="index.php">
        <h1 class="logo round">Productos</h1>
      </a>
      </div>
      <!--Begin Pattern HTML-->
      <a href="#menu" class="menu-link"><i class="fas fa-bars f4"></i></a>
      <nav class="item ph12 md8  inli-block  vertical-middle center md-right p0 menu" id="menu" role="navigation">
        <ul>
          <li class="nobullet vertical-middle"><a class="item" href="#sec1">Inicio</a></li>
          <li class="nobullet vertical-middle"><a class="item" href="listar_productos.php">Productos</a></li>
          <li class="nobullet vertical-middle"><a class="item" href="vender_producto.php">Vender</a></li>
          <li class="nobullet vertical-middle"><a class="item" href="ventas.php">Ventas</a></li>
          <li class="nobullet  vertical-middle "><a class="item " href="destruir_session.php"><i title="Salir"
                class="fas fa-sign-out-alt   f2"></i></a>
          </li>
        </ul>
      </nav>
    </div>
    <!--End Pattern HTML-->
  </header>

  <section class="container-fluid home allvh " id="sec1">
    <article class="arti container md-flex md-ai-center center">
      <div class="titu item md6">
        <h1 class="titulo ">SoftSystem</h1>
        <p class="parra">La mejor solución para tu negocio</p>
      </div>

      <div class="img item fig  md6">
        <svg class="svg fixed-top" id="a98b94c8-3ab5-4721-96c2-a749f3d38b5b" data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg" width="846" height="605" viewBox="0 0 846 605">
          <title>pie graph</title>
          <rect y="22" width="822" height="470" fill="#f1f1f1" />
          <rect x="23" y="1" width="822" height="470" fill="none" stroke="#3f3d56" stroke-miterlimit="10"
            stroke-width="2" />
          <line x1="23" y1="26.08661" x2="845" y2="26.08661" fill="none" stroke="#3f3d56" stroke-miterlimit="10"
            stroke-width="2" />
          <circle cx="42" cy="14" r="7" fill="#f9a826" />
          <circle cx="63" cy="14" r="7" fill="#f9a826" />
          <circle cx="84" cy="14" r="7" fill="#f9a826" />
          <path d="M703.566,473.34136a130.62333,130.62333,0,0,0-92.36465-222.988V380.97671Z"
            transform="translate(-177.5 -147.0199)" fill="#3f3d56" />
          <path d="M611.2013,250.35334a130.639,130.639,0,0,0-62.48794,245.35537l62.48794-114.732Z"
            transform="translate(-177.5 -147.0199)" fill="#f9a826" />
          <rect x="153" y="345.12564" width="25.01299" height="25.01299" fill="#f9a826" />
          <rect x="189.12987" y="345.12564" width="25.01299" height="25.01299" fill="#3f3d56" />
          <rect x="225.25974" y="345.12564" width="25.01299" height="25.01299" fill="#575a89" />
          <rect x="585.16883" y="350.68408" width="102.83117" height="4.16883" fill="#3f3d56" />
          <rect x="585.16883" y="363.19058" width="102.83117" height="4.16883" fill="#3f3d56" />
          <rect x="585.16883" y="375.69707" width="102.83117" height="4.16883" fill="#3f3d56" />
          <polygon
            points="630.349 561.222 632.002 574.994 641.367 579.401 651.833 576.096 658.994 579.401 661.198 566.731 648.528 552.408 630.349 561.222"
            fill="#ffb9b9" />
          <path
            d="M814.45956,718.7087s-8.54063-9.95667-8.67727-4.97833-18.86617,22.05526-18.86617,22.05526-29.196,8.8139-6.61042,14.32259,72.1638-10.46651,73.81641-13.77172-13.77172-28.64517-15.42433-26.4417S828.78215,719.81044,814.45956,718.7087Z"
            transform="translate(-177.5 -147.0199)" fill="#2f2e41" />
          <path
            d="M793.52655,555.10069s-3.30521,25.89083,0,29.74691,1.6526,11.56825,0,12.67,2.20347,5.50869,4.95782,7.71217,6.61042,12.11911,6.61042,12.11911,14.87346,39.11168,14.87346,42.96776,6.61042,12.11911,6.05955,14.87345,3.85608,11.56825,3.30522,13.22085,7.16129,16.52607,4.95781,18.72954-32.50125,9.91564-30.84864,4.95782,2.75434-11.01738,1.6526-11.01738-6.05955-6.05955-4.95782-8.263-33.05212-60.04469-33.05212-60.04469Z"
            transform="translate(-177.5 -147.0199)" fill="#2f2e41" />
          <path
            d="M814.45956,718.7087s-8.54063-9.95667-8.67727-4.97833-18.86617,22.05526-18.86617,22.05526-29.196,8.8139-6.61042,14.32259,72.1638-10.46651,73.81641-13.77172-13.77172-28.64517-15.42433-26.4417S828.78215,719.81044,814.45956,718.7087Z"
            transform="translate(-177.5 -147.0199)" opacity="0.1" />
          <path
            d="M793.52655,555.10069s-3.30521,25.89083,0,29.74691,1.6526,11.56825,0,12.67,2.20347,5.50869,4.95782,7.71217,6.61042,12.11911,6.61042,12.11911,14.87346,39.11168,14.87346,42.96776,6.61042,12.11911,6.05955,14.87345,3.85608,11.56825,3.30522,13.22085,7.16129,16.52607,4.95781,18.72954-32.50125,9.91564-30.84864,4.95782,2.75434-11.01738,1.6526-11.01738-6.05955-6.05955-4.95782-8.263-33.05212-60.04469-33.05212-60.04469Z"
            transform="translate(-177.5 -147.0199)" opacity="0.1" />
          <polygon
            points="559.838 554.384 553.778 569.808 556.533 591.292 574.161 590.19 584.076 581.376 584.076 562.647 559.838 554.384"
            fill="#ffb9b9" />
          <path
            d="M740.64315,720.133s-6.05955-19.83128-9.36477-14.32259a87.16079,87.16079,0,0,0-5.50868,11.01738s-26.99257,17.62779-34.15386,17.62779-13.77172,8.8139-4.407,12.11912,80.9777,7.71216,82.07943,0-1.10173-32.50126-4.40694-29.74691S744.49923,725.64171,740.64315,720.133Z"
            transform="translate(-177.5 -147.0199)" fill="#2f2e41" />
          <path
            d="M726.87143,476.09818s-11.56824,19.83128-12.67,22.03475-7.16129,16.52606,4.40695,22.03475,21.48388-40.21341,21.48388-40.21341Z"
            transform="translate(-177.5 -147.0199)" fill="#ffb9b9" />
          <path
            d="M738.99055,444.1478s-17.6278,34.15386-14.32259,35.2556,16.52606,7.71216,16.52606,7.71216l6.05956-34.70473Z"
            transform="translate(-177.5 -147.0199)" fill="#575a88" />
          <path
            d="M738.99055,444.1478s-17.6278,34.15386-14.32259,35.2556,16.52606,7.71216,16.52606,7.71216l6.05956-34.70473Z"
            transform="translate(-177.5 -147.0199)" opacity="0.1" />
          <path
            d="M740.09228,472.793s-3.85608,28.64518-2.20347,34.70473-1.10174,96.9529,1.10174,101.91071,3.85608,36.90821,3.85608,40.76429-4.407,35.2556-5.50869,38.00994-4.407,12.11911-2.75434,16.52606S758.82182,720.133,762.127,716.277s.55087-15.9752,3.30521-16.52607,6.05956-26.44169,6.05956-26.44169l18.17867-101.35985s34.15386-84.83378,26.4417-93.09681S740.09228,472.793,740.09228,472.793Z"
            transform="translate(-177.5 -147.0199)" fill="#2f2e41" />
          <circle cx="582.97443" cy="103.2221" r="26.99257" fill="#ffb9b9" />
          <path
            d="M750.55879,272.27676s8.8139,23.13648,7.71216,28.0943,25.89083-8.8139,25.89083-8.8139-1.65261-26.99257,0-34.15386S750.55879,272.27676,750.55879,272.27676Z"
            transform="translate(-177.5 -147.0199)" fill="#ffb9b9" />
          <path
            d="M824.57343,422.99994c-.121,4.6218-.19823,7.37614-.19823,7.37614s1.6526,25.34-1.10174,33.603-2.75434,14.32259-4.407,19.83128c-.4847,1.603-7.07872,2.46236-16.33872,2.84246-8.49449.34705-19.23091.29749-29.53764.06059-17.06591-.39661-32.97506-1.311-35.65221-1.80132-6.05956-1.10173,1.10174-10.4665-1.10174-15.42432S740.09228,401.18,740.09228,401.18s-.55087-35.80647,2.20348-49.57819,13.22085-35.80646,15.42432-38.56081.55087-4.40695-4.407-7.71216,0-15.97519,0-15.97519c9.36477-7.71216,33.05213-8.8139,33.05213-8.8139s36.35733,37.45907,38.56081,45.17123c1.33305,4.66033.85387,41.888.26992,70.63237C824.97018,407.157,824.73321,416.77513,824.57343,422.99994Z"
            transform="translate(-177.5 -147.0199)" fill="#575a88" />
          <path d="M778.10222,491.52251s-20.933,42.96776-4.40695,45.7221,24.7891-39.11168,24.7891-39.11168Z"
            transform="translate(-177.5 -147.0199)" fill="#ffb9b9" />
          <path
            d="M735.23542,236.56021c-.95456-4.62956,2.58357-8.95718,6.30994-11.86548a46.1123,46.1123,0,0,1,28.36939-9.67417c7.22409.03924,14.67976,1.95023,20.13991,6.68055,6.36868,5.51741,9.2738,14.36539,8.73908,22.77467s-4.19195,16.38512-9.125,23.21643c-2.36764,3.27871-6.17014,6.67272-9.95349,5.24377a9.251,9.251,0,0,1-3.68162-3.10971,57.10307,57.10307,0,0,1-6.31115-9.69932c-1.354-2.63119-2.52691-5.4045-4.44595-7.657s-4.80319-3.94663-7.73456-3.54215c-2.42142.33412-4.79667,2.0387-7.10613,1.23786-2.56934-.891-3.19043-4.17648-3.39476-6.88822-.224-2.97233-.06534-6.41538-.89068-9.22555C745.24766,234.53388,735.67905,238.7784,735.23542,236.56021Z"
            transform="translate(-177.5 -147.0199)" fill="#2f2e41" />
          <path
            d="M824.57343,422.99994c-6.1697,22.2496-20.32148,59.74723-21.13124,61.36127-.20389.41316-.5233,1.22292-.9144,2.2916-8.49449.34705-19.23091.29749-29.53764.06059,1.5976-4.17556,3.45947-8.20792,3.45947-9.51348,0-2.75434,13.22085-73.81641,13.22085-73.81641S779.204,371.984,769.83919,345.5423s27.81887-21.20845,27.81887-21.20845C817.48934,319.376,821.07,327.9145,821.07,327.9145s1.74622,46.43822,4.126,68.42889c.61152,5.63541,1.26151,9.66226,1.93355,10.8962C828.011,408.85364,826.821,414.92422,824.57343,422.99994Z"
            transform="translate(-177.5 -147.0199)" opacity="0.1" />
          <path
            d="M789.67047,306.43062s-25.34,10.4665-15.9752,36.9082S793.52655,401.18,793.52655,401.18,780.3057,472.2421,780.3057,474.99645s-8.263,17.6278-4.95782,20.38214,25.34,8.263,25.89083,5.50869a186.304,186.304,0,0,1,6.05956-18.72954c1.10173-2.20347,26.99256-71.06207,23.68735-77.12162s-6.05955-79.3251-6.05955-79.3251S809.50174,301.4728,789.67047,306.43062Z"
            transform="translate(-177.5 -147.0199)" fill="#575a88" />
          <path
            d="M733.566,514.34136,636.2013,422.97671l-57.48794,118.732a130.03537,130.03537,0,0,0,62.48794,15.89138C677.272,557.60009,709.92781,537.9795,733.566,514.34136Z"
            transform="translate(-177.5 -147.0199)" fill="#575a89" />
          <path
            d="M733.566,514.34136,636.2013,422.97671l-57.48794,118.732a130.03537,130.03537,0,0,0,62.48794,15.89138C677.272,557.60009,709.92781,537.9795,733.566,514.34136Z"
            transform="translate(-177.5 -147.0199)" opacity="0.1" />
          <path d="M725.566,521.34136,633.2013,428.97671l-62.48794,114.732A130.69161,130.69161,0,0,0,725.566,521.34136Z"
            transform="translate(-177.5 -147.0199)" fill="#575a89" />
          <line x1="397" y1="604" x2="793" y2="604" fill="none" stroke="#3f3d56" stroke-miterlimit="10"
            stroke-width="2" />
          <line x1="738.08215" y1="604.96019" x2="738.08215" y2="488.86667" fill="#3f3d56" stroke="#3f3d56"
            stroke-miterlimit="10" stroke-width="2" />
          <circle cx="738.08215" cy="488.86667" r="16.41727" fill="#3f3d56" />
          <path d="M915.58215,707.43741s-2.34533-50.44293-50.42446-44.57962" transform="translate(-177.5 -147.0199)"
            fill="#3f3d56" />
        </svg>
      </div>
    </article>

    <div class="container center irabajo">
      <a href="#sec2"><i class="bajar fas fa-angle-up"></a></i>
    </div>
  </section>

  

  <section class="container-fluid tablero center allvh" id="sec2">
    <h2 class="titulo">Mi Empresa</h2>

    <div class="container sec2">

      <a href="lista_clientes.php">
        <figure class="ph11 block mauto md4 md-inli-block md-v-top ">
          <img class="center" src="images/clientes.svg" alt="">
          <figcaption class="f1  center">Clientes</figcaption>
        </figure>
      </a>

      <a href="lista_proveedores.php">
        <figure class="ph11 block mauto  md4 md-inli-block md-v-top">
          <img class="mauto" src="images/proveedores.svg" alt="">
          <figcaption class="f1 center">Proveedores</figcaption>
        </figure>
      </a>

      <a href="lista_usuarios.php">
        <figure class="ph11 block mauto  md4 md-inli-block md-v-top">
          <img class="mauto" src="images/users.svg" alt="">
          <figcaption class="f1 center">Usuarios</figcaption>
        </figure>
      </a>

      <a href="ventas.php">
        <figure class="ph11  block mauto md4 md-inli-block md-v-top">
          <img class="mauto" src="images/reportes.svg" alt="">
          <figcaption class="f1 center">Reportes</figcaption>
        </figure>
      </a>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffa700" fill-opacity="1"
      d="M0,160L60,149.3C120,139,240,117,360,133.3C480,149,600,203,720,224C840,245,960,235,1080,202.7C1200,171,1320,117,1380,90.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
    </path>
  </svg>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('body').addClass('js');

      var $menu = $('#menu'),
        $menulink = $('.menu-link')

      var $links = $('#menu').find('a');//dentro id menu encuentra enlances 'a'

      $menulink.click(function () {
        $menulink.toggleClass('active')
        $menu.toggleClass('active')
        return false;
      });

      //esto es para cuando le de click a un enlace del menu me lleve a la seccion y automatico se cierre el menu
      $links.click(function () {
        $menulink.toggleClass('active')
        $menu.toggleClass('active')

      });
    });

    //Esto es para el video
    var mq48 = window.matchMedia('(min-width:48em)')

    function mediaQueries(mq48) {
      if (mq48.matches) {//si la minima anchura es de 48em entonces que me muestre el video
        //si conside mostrar iframe de video de youtobe
        document.getElementById("logos-video").innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/xb9J2fdA0Hg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="item block mauto"></iframe>'
      } else {// si no que solo me muestre el link del video
        //mostrar link de video de youtube
        document.getElementById("logos-video").innerHTML = '<a href="https://youtu.be/xb9J2fdA0Hg" target="_blank">Ver video</a>'
      }
    }

    mediaQueries(mq48)
    mq48.addListener(mediaQueries)

  </script>
</body>

</html>