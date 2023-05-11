<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

    <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">



    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../application/news/src/App.js" defer></script>
    <script src="../application/js/getJsonData.js" defer></script>

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

    <title>Lab 9 MVC Web 3D Applications</title>

</head>
<body id="bodyColor">
<div style="    display: flex;
    flex-direction: column;
    background-color: var(--bg-primary-color);">
<div class ="wrapper">
    <header class="header">
        <div class="logo">
            <a class="navbar-brand" href="Home">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
            </a>
        </div>
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
    <div id="box" type="hidden"></div>

    <div class="container-fluid">
    <div class="main_contents"">
        <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
        <div class="row">
            <!-- X3D Model -->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- X3D Models -->
                        <div>
                            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
<!--                            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>-->
<!--                            <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>-->

                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Fanta</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">DietCoke</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>

                            <!-- Place the X3D code here -->
                            <div class="model3D">
                                <x3d id="wire">
                                    <scene>
                                        <Switch whichChoice="0" id='SceneSwitch'>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/fanta.x3d" > </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/dietcoke.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper.x3d"> </inline>
                                            </transform>
                                        </Switch>
                                    </scene>
                                </x3d>
                            </div>
                            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
<!--                            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>-->
<!--                            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3D image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
<!--                    <div class="card-header gallery-header">-->
<!--                        <ul class="nav nav-tabs card-header-tabs">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link active" href="#">Gallery</a>-->
<!--                            </li>-->
<!--                    </div>-->

                    <div style="border: solid 1px saddlebrown;width: 100%">
                        <div class="">
                            <div class="card text-left">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <!-- Dropdown nav-tab -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#box" onclick="cameraFront();">Front</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraBack();">Back</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraLeft();">Left</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraRight();">Right</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraTop();">Top</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraBottom();">Bottom</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <h3>Camera Views</h3>
                                    </div>
                                    <a href="#box" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                                    <a href="#box" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                                    <a href="#box" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                                    <a href="#box" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                                    <a href="#box" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="card text-left">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Animation</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dAnimationSubtitle drinksText">
                                        <h3>Animation Options</h3>
                                    </div>
                                    <a href="#box" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                                    <a href="#box" class="btn btn-outline-light btn-responsive">RotY</a>
                                    <a href="#box" class="btn btn-outline-light btn-responsive">RotZ</a>
                                    <a href="#box" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card text-left">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#box">Polygon</a>
                                                <a class="dropdown-item" href="#box" onclick="wireFrame();">Wireframe</a>
                                                <a class="dropdown-item" href="#box">Vertex</a>
                                            </div>
                                        </li>
                                        <!-- Dropdown nav-tab -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#box" onclick="headLight();">Default</a>
                                                <a class="dropdown-item" href="#box" onclick="omniLight();">Onmi On/Off</a>
                                                <a class="dropdown-item" href="#box" onclick="targetLight();">Target On/Off</a>
                                                <a class="dropdown-item" href="#box" onclick="headLight();">Headlight On/Off</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dRendersubtitle drinksText">
                                        <h3>Render and Lighting Options</h3>
                                    </div>
                                    <a href="#box" class="btn btn-success btn-responsive">Poly</a>
                                    <a href="#box" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                                    <a href="#box" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                                    <a href="#box" class="btn btn-outline-dark btn-responsive">Default</a>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- End gallery card -->
            </div> <!-- End gallery column -->
        </div> <!-- End row for X3D Model and Gallery -->
    </div>
</div>

    <div class="card-body">
<!--        <div class="card-title title_gallery drinksText"></div>-->
        <div class="gallery" id="gallery" style="display: flex;justify-content: space-around;align-items: center;"></div>
        <div class="card-text description_gallery drinksText"></div>
    </div>
    <!-- Row to hold one card to hold the coke descriptive text, etc.-->
    <div id="cokeDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_coke" class="card-title drinksText"></div>
                    <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                    <div id="description_coke" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
                </div>
            </div>
        </div>
    </div> <!-- End coke description contents -->

    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_sprite" class="card-title drinksText"></div>
                    <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                    <div id="description_sprite" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
                </div>
            </div>
        </div>
    </div> <!-- End sprite description contents -->

    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_pepper" class="card-title drinksText"></div>
                    <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                    <div id="description_pepper" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>
                </div>
            </div>
        </div>
    </div> <!-- End pepper description contents -->

</div> <!-- End 3D App SPA Contents -->



<!-- My 3D App modals -->
<!-- Contact modal -->
<!-- The Modal -->

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
            </div>
        </div>
    </div>
</div>
<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
<script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
<script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../application/js/fontawesome-all.min.js"></script>
<!-- Custom JavaScript code for your 3d App -->
<script src="../application/js/custom.js" crossorigin="anonymous"></script>
<!-- JavaScript to swap for SPA and restyle -->
<script src="../application/js/swap_restyle.js"></script>
<!-- Include the x3dom JavaScript -->
<script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
<!-- JavaScript and PHP based Gallery generator  -->
<script type="text/javascript" src="../application/js/gallery_generator.js"></script>
<!-- JQuery code to get content data from a backend JSON file -->
<script src="../application/js/getJsonData.js"></script>
<!-- JavaScript model interactions -->
<script src="../application/js/modelInteractions.js"></script>
<!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
<script src="../application/js/jquery.fancybox.min.js"></script>
</body>
</html>