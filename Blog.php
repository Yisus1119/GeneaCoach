<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!--Contenidos de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/Home.css">
    <link rel="stylesheet" href="Css/Blog.css">
</head>

<body>
    <!-- Header -->
    <?php require_once 'componentsPhp/header.php' ?>
    <!-- End Header -->

    <!-- Gradient -->
    <section class="banner">
        <div style="height: 500px; overflow: hidden">
            <div class="Div-text">
                <span class="text">Mejora tu futuro con nosotros</span>
            </div>
            <svg id="wave" style="transform: rotate(180deg); transition: 0.3s" viewBox="0 0 1450 480" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(64, 84, 178, 1)" offset="0%"></stop>
            <stop stop-color="rgba(110, 193, 228, 1)" offset="100%"></stop>
          </linearGradient>
        </defs>
        <path style="transform: translate(0, 0px); opacity: 1" fill="url(#sw-gradient-0)" d="M0,192L80,176C160,160,320,128,480,144C640,160,800,224,960,256C1120,288,1280,288,1440,264C1600,240,1760,192,1920,168C2080,144,2240,144,2400,192C2560,240,2720,336,2880,360C3040,384,3200,336,3360,296C3520,256,3680,224,3840,240C4000,256,4160,320,4320,312C4480,304,4640,224,4800,216C4960,208,5120,272,5280,264C5440,256,5600,176,5760,120C5920,64,6080,32,6240,80C6400,128,6560,256,6720,288C6880,320,7040,256,7200,232C7360,208,7520,224,7680,248C7840,272,8000,304,8160,280C8320,256,8480,176,8640,160C8800,144,8960,192,9120,232C9280,272,9440,304,9600,272C9760,240,9920,144,10080,104C10240,64,10400,80,10560,136C10720,192,10880,288,11040,296C11200,304,11360,224,11440,184L11520,144L11520,480L11440,480C11360,480,11200,480,11040,480C10880,480,10720,480,10560,480C10400,480,10240,480,10080,480C9920,480,9760,480,9600,480C9440,480,9280,480,9120,480C8960,480,8800,480,8640,480C8480,480,8320,480,8160,480C8000,480,7840,480,7680,480C7520,480,7360,480,7200,480C7040,480,6880,480,6720,480C6560,480,6400,480,6240,480C6080,480,5920,480,5760,480C5600,480,5440,480,5280,480C5120,480,4960,480,4800,480C4640,480,4480,480,4320,480C4160,480,4000,480,3840,480C3680,480,3520,480,3360,480C3200,480,3040,480,2880,480C2720,480,2560,480,2400,480C2240,480,2080,480,1920,480C1760,480,1600,480,1440,480C1280,480,1120,480,960,480C800,480,640,480,480,480C320,480,160,480,80,480L0,480Z"></path>
      </svg>
        </div>
    </section>
    <!--End Gradient -->

    <!-- Blog -->
    <section class="container-curso">

        <span class="Title-divs">Blog</span>

        <!-- DIV GRID -->
        <div class="Grid-curso">

            <!-- Blog 1 -->
            <div class="curso-1">
                <div class="Div-Curso-img">
                    <img src="assets/img/blog/html.jpg" alt="" />
                </div>

                <div class="Div-title">
                    <span class="Title-curso"><h5 onclick="window.open('https://boxicons.com/?query=user','blank'); return false;"> Ventajas de aprender HTML en 2021</h5></span>
                </div>
                <hr>
                <div class="Description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
                <hr>
                <div class="Button">
                    <a id="Button-1" href="#">Leer m&aacute;s</a>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="curso-2">
                <div class="Div-Curso-img">
                    <img src="assets/img/blog/TecnologiaWeb.jpg" alt="" />
                </div>

                <div class="Div-title">
                    <span class="Title-curso"><h5 onclick="window.open('https://boxicons.com/?query=user','blank'); return false;">las mejores tecnologías del 2021</h5></span>
                </div>
                <hr>
                <div class="Description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
                <hr>
                <div class="Button">
                    <a id="Button-1" href="#">Leer m&aacute;s</a>
                </div>
            </div>

            <!-- Blog 3-->
            <div class="curso-3">
                <div class="Div-Curso-img">
                    <img src="assets/img/blog/marketindigital.jpg" alt="" />
                </div>

                <div class="Div-title">
                    <span class="Title-curso"><h5 onclick="window.open('https://boxicons.com/?query=user','blank'); return false;"> Conoce el marketing Digital</h5></span>
                </div>
                <hr>
                <div class="Description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
                <hr>
                <div class="Button">
                    <a id="Button-1" href="#">Leer m&aacute;s</a>
                </div>
            </div>

            <!-- Blog 4-->
            <div class="curso-4">
                <div class="Div-Curso-img">
                    <img src="assets/img/blog/TecnologiaWeb.jpg" alt="" />
                </div>

                <div class="Div-title">
                    <span class="Title-curso"><h5 onclick="window.open('https://boxicons.com/?query=user','blank'); return false;">las mejores tecnologías del 2021</h5></span>
                </div>
                <hr>
                <div class="Description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
                <hr>
                <div class="Button">
                    <a id="Button-1" href="#">Leer m&aacute;s</a>
                </div>
            </div>

            <!-- Blog 5-->
            <div class="curso-5">
                <div class="Div-Curso-img">
                    <img src="assets/img/blog/marketindigital.jpg" alt="" />
                </div>

                <div class="Div-title">
                    <span class="Title-curso"><h5 onclick="window.open('https://boxicons.com/?query=user','blank'); return false;"> Conoce el marketing Digital</h5></span>
                </div>
                <hr>
                <div class="Description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
                <hr>
                <div class="Button">
                    <a id="Button-1" href="#">Leer m&aacute;s</a>
                </div>
            </div>

            <!-- Blog 6-->
            <div class="curso-6">
                <div class="Div-Curso-img">
                    <img src="assets/img/blog/html.jpg" alt="" />
                </div>

                <div class="Div-title">
                    <span class="Title-curso"><h5 onclick="window.open('https://boxicons.com/?query=user','blank'); return false;"> Ventajas de aprender HTML en 2021</h5></span>
                </div>
                <hr>
                <div class="Description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
                <hr>
                <div class="Button">
                    <a id="Button-1" href="#">Leer m&aacute;s</a>
                </div>
            </div>

</body>

</html>