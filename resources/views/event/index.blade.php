@extends('layouts.app')

@section('content')
    <section class="top-head">
        <div class="top-title">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Etkinlik Yöneticisi</h4>
                    </div>
                    <div class="col">
                        <a href="{{ route('event.new') }}" class="list-buton right">Etkinlik oluştur</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events-empty">
        <div class="row">
            <div class="container">
                @forelse($Requests as $Request)
                    etkinlik var
                @empty
                    <div class="col">
                        <b>Henüz bir etkinliğin yok!</b>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
