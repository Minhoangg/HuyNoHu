@extends('layouts.client.master-layout')

@section('content')
<section style="
        background-image: url('{{ asset('assets/img/backgouund2.jpg') }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    ">
    <div class="list-game-client">
        <ul style="
        background-image: url('{{ asset('assets/img/bakground6.jpg') }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    " class="list-game">
            <h1>Tên web</h1>
            <ul class="container-game">
                @if ($games->isEmpty())
                <h3 style="color: white;">Không game nào trong dữ liệu!</h3>
                @else
                @foreach ($games as $game)
                <a href="">
                    <li class="game-item">
                        <div class="top-game-item">
                            <div class="game-info">
                                <img src="{{ asset('storage/' . $game->image) }}" alt="">
                                <h5>{{$game->title}}</h5>
                            </div>
                            <div class="proportion">
                                <img src="{{ asset('assets/img/percent_background.png') }}" width="50" alt="">
                            </div>
                        </div>
                        <div class="bottom-game-item">
                            <img src="{{ asset('assets/img/slot_item_bg.png') }}" alt="">
                            <div class="process-bar">
                            </div>
                        </div>
                    </li>
                </a>
                @endforeach
                @endif
            </ul>
        </ul>
    </div>
</section>
@endsection