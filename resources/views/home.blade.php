@extends('layouts.app')

@section('content')
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Etkinlik planlama için</h1>
                    <h1>en hızlı cevap <blue>FastEvent</blue>.</h1>

                    <div class="list-goods">
                        <p><i data-feather="map-pin"></i> Etkinlik mekanı bul</p>
                        <p><i data-feather="briefcase"></i> Hizmet verenlerle anlaş!</p>
                        <p><i data-feather="dollar-sign"></i> En uygun fiyatı anında gör!</p>
                    </div>
                    <div class="search-bar">
                        <form class="row">

                            <div class="col">
                                <label>Etkinlik türü</label>
                                <input class="w3-input" type="text">
                            </div>
                            <div class="col">
                                <label>Şehir / Bölge</label>
                                <input class="w3-input" type="text">
                            </div>
                            <div class="col">
                                <label>Katılımcı sayısı <label class="small">(yaklaşık)</label></label>
                                <input class="w3-input" type="text">
                            </div>
                            <div class="col">
                                <label>Tarih</label>
                                <input class="w3-input" type="text">
                            </div>
                            <div class="col">

                                <button type="submit" class="btn btn-aqua-search"><i data-feather="search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="fast-way-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="img/svg/fastway.svg" width="100%">
                </div>
                <div class="col-md-7">
                    <h1>
                        <blue>Etkinlik planlamak için</blue>
                    </h1>
                    <h1>
                        <blue>en </blue>hızlı<blue> yol</blue>
                    </h1>
                    <br>
                    <p>
                        <aqua>FastEvent.</aqua> etkinliğiniz için en uygun önerileri size sunarak en hızlı
                        şekilde karar vermenizi sağlar. Tek yapmanız gereken etkinlik
                        detaylarını etkinlik yardımcısı sistemimize söylemek.
                    </p>
                    <br>
                    <img src="img/svg/road.svg" style="margin-left: -100px;">
                </div>
            </div>
        </div>
    </section>
    <section class="safe-place">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Güvenli <blue>bir sistem</blue>
                    </h1>
                    <h1>
                        <blue>artık çok kolay</blue>
                    </h1>
                    <br>
                    <p>
                        <aqua>FastEvent.</aqua> kişisel verilerinize saygılıdır. Sistemimizdeki bilgileriniz
                        kesinlikle üçüncü şahıslarla paylaşılmaz. Ödeme işlemleriniz en güvenli
                        şekilde şifrelenir. Kesinlikle kayıt altına alınmaz.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="img/safety.png" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="places">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h4 class="list-title">Etkinlik mekanları &nbsp;&nbsp;</h4>
                </div>
                <div class="col-md-2">
                    <a href="#" class="list-buton">tümünü gör</a>
                </div>
            </div>
            <div class="row listing">
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/iism.png">
                        <h6>
                            <center>İsmet İnönü Sanat Merkezi</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/iism.png">
                        <h6>
                            <center>İsmet İnönü Sanat Merkezi</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/iism.png">
                        <h6>
                            <center>İsmet İnönü Sanat Merkezi</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/iism.png">
                        <h6>
                            <center>İsmet İnönü Sanat Merkezi</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="places">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h4 class="list-title">Firmalar &nbsp;&nbsp;</h4>
                </div>
                <div class="col-md-2">
                    <a href="#" class="list-buton">tümünü gör</a>
                </div>
            </div>
            <div class="row listing">
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/renkli-kutu.png">
                        <h6>
                            <center>Renkli Kutu Fotoğrafçılık</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/mai.png">
                        <h6>
                            <center>Mai Catering & Events</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/opus.png">
                        <h6>
                            <center>Opus Teknik Ses & Işık Siste..</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element">
                        <img class src="img/speaker.png">
                        <h6>
                            <center>SpeakerAgency</center>
                        </h6>
                        <label class="ad-info left">İzmir, Konak</label>
                        <label class="ad-info right">500 Kişilik</label>
                        <br>
                        <br><br>

                        <a href="#" class="details-buton">
                            <div class="element-buton">
                                <center>İncele</center>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
