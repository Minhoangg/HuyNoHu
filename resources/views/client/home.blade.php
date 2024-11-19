@extends('layouts.client.master-layout')

@section('content')
<section style="
        background-image: url('{{ asset('assets/img/1527c243-151a-4266-b9ed-949b8f091476.jpg') }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    ">
    <div class="list-web-client">
        <div style="
        background-image: url('{{ asset('assets/img/bakground6.jpg') }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    " class="container-list-web">
            <h1 style="overflow: hidden; color: rgb(255, 109, 4);">NETSLOT</h1>
            <ul class="menu-web">
                @if ($lobbys->isEmpty())
                <h3 style="color: white;">Không có sảnh game nào trong dữ liệu!</h3>
                @else
                @foreach ($lobbys as $lobby)
                <div class="item-web-client">
                    <a href="{{route('client.list-game', $lobby->id) }}">
                        <img src="{{ asset('storage/' . $lobby->image) }}" alt="">
                        <p>{{$lobby->name}}</p>
                    </a>
                </div>
                @endforeach
                @endif
            </ul>
        </div>
    </div>

</section>
@endsection