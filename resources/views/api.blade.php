<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('./css/index.css')}}" rel="stylesheet">
    <title>Document</title>
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
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#main2">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/api')}}">API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="ApiMainOne">
        <div class="fondasi">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('./img/profile.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
