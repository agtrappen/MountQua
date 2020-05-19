<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Eigen meta tags -->
        <meta name="description" content="MountQua | Vanaf de top gezuiverd">
        <meta name="author" content="MountQua">
        <!-- Bootstrap CSS via CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- FontAwesome icons via CDN -->
        <script src="https://kit.fontawesome.com/c389f20b38.js" crossorigin="anonymous"></script>
        <!-- Eigen stylesheets -->
        <link href="css/levi.css" rel="stylesheet"> 
        <<link href="css/main.css" rel="stylesheet">
        <title><?php echo $lang['titel'];?></title>
    </head>
    <body>
        <!-- navbar -->
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-bold logo-text"><img src="image/logo.png" /></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 menu-item" href="index.html">Home</a>
                    <a class="p-2 menu-item" href="products.html"><?php echo $lang['onze producten'] ?></a>
                    <a class="p-2 menu-item" href="about.html"><?php echo $lang['over ons']; ?></a>
                    <a class="p-2 menu-item font-weight-bold" href="contact.html">contact</a>
            </nav>
            <a class="p2 menu-item" href="account/login.html"><i class="fas fa-user"></i></a>&emsp;
            <a class="p2 menu-item" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
        </div>

        <!-- background image -->
        <header>
            <div class="overlay"></div>
            <img src="image\contactheader.jpg"></img>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-4">Contact</h1>
                        <p class="lead mb-0"></p>
                    </div>
                </div>
            </div>
        </header>
