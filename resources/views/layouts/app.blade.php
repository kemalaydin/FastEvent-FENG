<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ URL('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{URL('css/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <title>Anasayfa - FastEvent</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="#" class="logo">
                <img src="{{URL('img/logo-top.png')}}">
            </a>
        </div>
        <div class="col-md-8">
            <nav>
                <a href="#">Nedir?</a>
                <a href="#">Nasıl Kullanılır?</a>
                @if(auth()->check())
                    Selam {{ Auth()->User()->name }},
                    <a href="{{ route('event') }}">Etkinliklerim</a>
                    <a href="{{ route('logout') }}">Çıkış Yap</a>

                @else
                    <a href="{{ route('login') }}">Giriş Yap</a>
                    <a href="{{ route('register') }}">Kayıt Ol</a>
                @endif
            </nav>
        </div>
    </div>
</div>
@yield('content')
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <a src="#">
                    <img src="{{ asset('img/logo-top.png') }}">
                </a>
            </div>
            <div class="col">
                <b>Kurumsal</b><br>
                <a href="#">Hakkımızda</a><br>
                <a href="#">Ekibimiz</a><br>
                <a href="#">Sıkça Sorulan Sorular</a>
            </div>
            <div class="col">
                <b>Sözleşmeler</b><br>
                <a href="#">Veri Güvenliği</a><br>
                <a href="#">KVKK</a><br>
                <a href="#">Gizlilik Sözleşmesi</a><br>
                <a href="#">Çerez Kullanımı</a>
            </div>
            <div class="col">
                <b>Bizi takip edin</b><br>
                <a href="#">Facebook</a><br>
                <a href="#">Twitter</a><br>
                <a href="#">Instagram</a><br>
                <a href="#">Linkedin</a>
            </div>
            <div class="col">
                <b class="right">Görüş ve sorular için</b><br>
                <aqua class="right">bilgi@fastevent.net</aqua><br>
                <aqua class="right">+90-850-343-23-23</aqua>
            </div>
        </div>
        <div class="row footer-down">

            <div class="col">© 2020 FastEvent. Tüm Hakları Saklıdır.</div>
        </div>
    </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    feather.replace()
</script>
</body>

</html>
