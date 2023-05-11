<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../application/news/src/App.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="../application/news/css/wrapper.css" rel="stylesheet"/>

    <link href="../application/news/css/header.css" rel="stylesheet"/>
    <link href="../application/news/css/content.css" rel="stylesheet"/>
    <link href="../application/news/css/thumbnails.css" rel="stylesheet"/>
    <link href="../application/news/css/sidebar.css" rel="stylesheet"/>

    <link href="../application/news/css/reset.css" rel="stylesheet"/>
    <link href="../application/news/css/colors.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="text/css" >
    <link rel="stylesheet" href="../application/css/custom.css">
    <title>Landing Page - Coca-Cola</title>
</head>
<body>
<div class ="wrapper" style="min-height: 100vh;">
    <header class="header">
        <div class="logo">
            <a class="navbar-brand" href="Home">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
            </a>
        </div>
        <!--      <a href='#'>-->
        <!--        <img src="../application/news/assets/logo.png" alt="logo Coca-Cola" class="logo"/>-->
        <!--      </a>-->
        <div class="toggleMenu"tabindex="0" role="button" aria-label="Toggle menu"></div>
        <nav class="navbar">
            <ul>
                <div id="marker" aria-hidden="true"></div>
                <li>
                    <a href='home'>Home</a>
                </li>
                <li>
                    <a id="navAbout" class="nav-link" href="about" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="There are some descriptions of the production process.">About</a>
                </li>
                <li>
                    <a href='models'>Models</a>
                </li>
                <li>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#contactModal">Contact us</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="content">
        <div class="textBox">
            <h2>137 YEARS<br/><span>FAMILY</span></h2>
            <p>Our vision is to craft the brands and choice of drinks that people love, to refresh them in body & spirit. And done in ways that create a more sustainable business and better shared future that makes a difference in people's lives, communities and our planet.</p>
            <a href="models">View all 3D models</a>
        </div>
        <div class="imageBox">
            <img src="../application/news/assets/coke001.png" alt="Classic Coca-Cola can" class="coke"/>
        </div>
    </section>
    <div style="!important;background-color: var(--bg-primary-color);width: 100%;">
    <div id="carouselExample" class="carousel slide" style="width: 80%;margin: 0 auto;padding: 10px">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../application/assets/images/Shapr3D1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../application/assets/images/Shapr3D2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../application/assets/images/Shapr3D3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

    <nav class= "sidebar">
        <ul class="socialMedia">
            <li>
                <a href='https://github.com/Fianlhuman/Web3D_Assignments_2023' target="_blank">
                    <img src="../application/news/assets/github.svg" alt="My GitHub link"/>
                </a>
            </li>
            <li>
                <a href='https://uk.linkedin.com/in/jiawei-ren-976969197' target="_blank">
                    <img src="../application/news/assets/linkedin.svg" alt="My LinkedIn link"/>
                </a>
            </li>
            <li>
                <a href='https://github.com/Fianlhuman' target="_blank">
                    <img src="../application/news/assets/external-link.svg" alt="My Dev.to blog link"/>
                </a>
            </li>
            <li>
                <a href='mailto:jr528@sussex.ac.uk'>
                    <img src="../application/news/assets/mail.svg" alt="Mail me now">
                </a>
            </li>
        </ul>
    </nav>





</div>
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black">3D App Contact Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="color: black">Jiawei Ren</p>
                <p style="color: black">Email: jr528@sussex.ac.uk</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!--                  <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>



</body>
</html>