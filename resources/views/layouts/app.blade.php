<!DOCTYPE html>
<html lang="{{str_replace('_','_',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/resources/css/app.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}
.container-fluid{
    max-width:1200px;
    margin: 0 auto;
}
.container{
    max-width: 1200px;
    margin: 0 auto;
}
.navbar{
    height:70px;
    background:#275242;
    display: flex;
    align-items: center;
}
.navbar a{
    text-align: center;
    text-decoration: none;
    color:#ffff;
    font-size: 20px;
}
.titlebar{
    padding:20px 0px;
}
h1{
    margin: 10px 0px;
}

.btn {
    display: inline-block;
    border: none;
    background-color: transparent;
    font-size: 18px;
    cursor: pointer;
}
input[type="file"]{
    border:none;
}
/* Button 1 */
.btn-1 {
    color: #2E2E2E;
    font-weight: 500;
    border-radius: 30px;
    padding: 13px 40px;
    background: linear-gradient(90deg, #FFE259 15.1%, #FFA751 85.42%);
}
.footer{
    padding: 20px 0px;
    background:#736633;
    text-align: center;
}
    </style>
</head>
<body>
    <!--navabr-->
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a href="{{route('posts.index')}}">Mini-Blog</a>

                <ul>
                    <li><a href="">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!--body-->
    @yield('content')

    <!--footer-->
    <footer id="footer" class="footer">
        <div class="container">
            All right reserved @shakil  2023
        </div>
    </footer>
</body>
</html>