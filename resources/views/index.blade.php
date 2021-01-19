<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{secure_asset('css/index.css')}}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Flandy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#main2">Tentang</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/api')}}">API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="MainOne">
        <div class="fondasi">
            <div class="text">
                <h2 id="c">Hallo<br>
                    Saya Flandy Rockyliano M</h2>
                <p>Saya Seorang <span>Full Stack Devoloper</span> </p>
            </div>
            <img src="{{secure_asset('./img/profile.png')}}" alt="" class="img">
        </div>
    </div>

    <div class="MainTwo">
        <div class="fondasi" id="main2">
            <img src="{{secure_asset('./img/profile2.png')}}" alt="" class="img2">
            <div class="text">
                <h3>Tentang</h3>
                <hr><br>
                <p> Nama Flandy Rockyliano Mamun,Saya
                    We have a strong brand presence across
                    indonesia that ensures timely delivery of
                    stands design in an exhibition without
                    compromising the quality. Get a customized
                    exhibition stand
                </p>
            </div>
        </div>
    </div>

    <div class="MainThere">
        <div class="fondasi">
            <span>
                <h2> Skill</h2>
            </span>
            <hr>
            <div class="skil">
                <div class="row">
                    <div class="col">
                        <img src="{{secure_asset('img/php.png')}}" alt="" width="60px">
                        <img src="{{secure_asset('img/php_btn.png')}}" alt="" width="200px" height="20px" class="phpbtn">
                    </div>
                    <div class="col">
                        <img src="{{secure_asset('img/mikrotik.png')}}" alt="" width="60px">
                        <img src="{{secure_asset('img/mikrotik_btn.png')}}" alt="" width="200px" height="20px" class="phpbtn">
                    </div>
                 
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{asset('img/photoshop.png')}}" alt="" width="60px">
                        <img src="{{asset('img/photoshop_btn.png')}}" alt="" width="200px" height="20px" class="phpbtn">
                    </div>
                    <div class="col">
                        <img src="{{asset('img/laravel.png')}}" alt="" width="60px">
                        <img src="{{asset('img/laravel_btn.png')}}" alt="" width="200px" height="20px" class="phpbtn">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{asset('img/js.png')}}" alt="" width="60px">
                        <img src="{{asset('img/laravel_btn.png')}}" alt="" width="200px" height="20px" class="phpbtn">
                    </div>
                    <div class="col">
                        <img src="{{asset('img/git.png')}}" alt="" width="60px">
                        <img src="{{asset('img/photoshop_btn.png')}}" alt="" width="200px" height="20px" class="phpbtn">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{secure_asset('js/index.js')}}"></script>
</body>

</html>
