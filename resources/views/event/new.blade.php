@extends('layouts.app')

@section('content')

    <section class="top-head">
        <div class="top-title">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h4>Etkinlik Yöneticisi</h4>
                    </div>
{{--                    <div class="col-2">--}}
{{--                        <a href="#" class="save-exit right">--}}
{{--                            <aqua>Kaydet ve çık</aqua>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <div class="col-2">
                        <a href="#" class="list-buton right">İlerle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <aqua>Genel Bilgiler &nbsp;</aqua>
                        <img src="{{ asset('img/svg/progress-1.svg')}}">
                        <grey>&nbsp; Ekstra Servisler &nbsp;</grey>
                        <img src="{{ asset('img/svg/progress-2.svg')}}">
                        <grey>&nbsp; Tamamla</grey>
                    </center>
                </div>
            </div>
            <form action="{{ route('event.new.2') }}" method="post">
                {{ csrf_field() }}
            <div class="row">
                <div class="col">
                    <div class="categories">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h6>Etkinliğinizin kategorisi nedir?</h6>
                                </center>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <center>

                                    <ul class="ks-cboxtags">
                                        <li>
                                            <input type="checkbox" name="category[]" id="checkboxOne" value="Music">
                                            <label for="checkboxOne">
                                                <i class="icon" data-feather="music"></i> &nbsp;Müzik
                                            </label>
                                        </li>
                                        <li><input type="checkbox" name="category[]" id="checkboxTwo" value="Eğlence">
                                            <label for="checkboxTwo">
                                                <i data-feather="mic"></i> &nbsp;Eğlence
                                            </label>
                                        </li>
                                        <li><input type="checkbox" name="category[]" id="checkboxThree" value="Konferans">
                                            <label for="checkboxThree">
                                                <i data-feather="message-circle"></i> &nbsp;Konferans
                                            </label>
                                        </li>
                                        <li><input type="checkbox" name="category[]" id="checkboxFour" value="Düğün">
                                            <label for="checkboxFour">
                                                <i data-feather="heart"></i> &nbsp;Düğün
                                            </label>
                                        </li>
                                        <li><input type="checkbox" name="category[]" id="checkboxFive" value="Toplantı">
                                            <label for="checkboxFive">
                                                <i data-feather="coffee"></i> &nbsp;Toplantı
                                            </label>
                                        </li>
                                        <li><input type="checkbox" name="category[]" id="checkboxSix" value="Sanat">
                                            <label for="checkboxSix">
                                                <i data-feather="edit-3"></i> &nbsp;Sanat
                                            </label>
                                        </li>
                                        <li><input type="checkbox" name="category[]" id="checkboxSeven" value="diğer">
                                            <label for="checkboxSeven">
                                                <i data-feather="more-horizontal"></i> &nbsp;Diğer
                                            </label>
                                        </li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="categories">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h6>Etkinlik başlığı</h6>
                                    <form>
                                        <input class="event-desc" type="text" name="title"
                                               placeholder="Etkinlik başlığını giriniz." />

                                </center>
                                <br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h6>Etkinlik açıklaması</h6>
                                    <input class="event-desc" type="textarea" name="description"
                                           placeholder="Etkinlik açıklaması giriniz." />

                                </center>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="categories">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h6>Etkinliğiniz ne zaman gerçekleşecek?</h6>
                                    <input class="event-time" type="text" name="date" placeholder="01 . 01 . 2020" />
                                    &nbsp; &nbsp;
                                    <input class="event-time" type="text" name="time" placeholder="19 : 30" />

                                </center>
                                <br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h6>Etkinliğiniz nerede gerçekleşecek?</h6>
                                    <form>
                                        <input class="event-desc" type="textarea" name="place"
                                               placeholder="Etkinlik konumu giriniz." />

                                </center>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="categories">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h6>Tahmini bütçeniz ve katılımcı sayınız nedir?</h6>
                                    <input class="event-time" type="text" name="budget" placeholder="2020 ₺" />
                                    &nbsp; &nbsp;
                                    <input class="event-time" type="text" name="people" placeholder="500 people" />

                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-4">
                </div>

{{--                <div class="col-2">--}}
{{--                    <a href="#" class="save-exit center">--}}
{{--                        <aqua>Kaydet ve çık</aqua>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="col-2">
                    <button type="submit" class="list-buton center">İlerle</button>
                </div>
                <div class="col-4"></div>
            </div>
            </form>
            <br><br>
        </div>
    </section>
@endsection
