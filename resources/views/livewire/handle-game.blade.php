<div class="core-game"
    style="
background-image: url('{{ asset('assets/img/photo_6183962405080515886_y.jpg') }}');
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
">


    <h1 style="text-align: center; color: yellow">Game nổ hủ</h1>

    <section>
        <div class="loader d-flex justify-content-center align-items-center">
            <h2 class="text-danger"> {{ $percentage  }}%</h2>
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
        </div>
    </section>

    <div id="language-screen">
        <div class="">
            <button class=" text-center btn btn-primary">{{ $roundText ?: 'Round: 0 - 0' }}</button>
            <button class="btn btn-primary">{{ $startTime ?: '00:00' }} - {{ $endTime ?: '00:00' }}</button>
        </div>
        <div id="scan">
            <div class="fingerprint"></div>
            <h3> Nhận tỉ lệ</h3>
        </div>
        <button id="french-button" wire:click="generateRandomPercentage(50, 100)"
            aria-label="Sélectionner la langue française">Nhận tỉ lệ</button>
    </div>
</div>
