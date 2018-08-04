<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="container-fluid">
        <div><i class="fas fa-home"></i></div>
        <div><span>Sweet Home</span></div>
            <div class="row">
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Best Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Life style</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3">
                    <form class="form-inline">
                        <input type="text" class="form-control mr-3 w-75" placeholder="search">
                    </form>
                </div>
            </div>
        <div class="main-content mt-3 row">
            <div class="col-md-9">
                @section('content')
                @show()
            </div>
            <div class="col-md-3">
                <div class="nav flex-column nav-pills">
                    <span>Search By Area</span>
                    <a class="nav-link" href="#">District1</a>
                    <a class="nav-link active" href="/admin/product">District2</a>
                    <a class="nav-link" href="/admin/category">District3</a>
                    <a class="nav-link" href="/admin/order">District4</a>
                    <a class="nav-link" href="/admin/article">District5</a>
                </div>
                <div class="nav flex-column nav-pills">
                    <span>Search By Price</span>
                    <a class="nav-link" href="/admin">< 10000$</a>
                    <a class="nav-link active" href="/admin/product">10000 - 15000$</a>
                    <a class="nav-link" href="/admin/category">15000 - 30000$</a>
                    <a class="nav-link" href="/admin/order">30000 - 50000$</a>
                    <a class="nav-link" href="/admin/article">< 50000$</a>
                </div>
            </div>
        </div>
        <footer class="text-center mt-5">
            <p>Aptect FPT Copyright 2018</p>
        </footer>
    </div>
</body>
</html>