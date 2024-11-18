<div class="core-game"
    style="background-image: url('{{ asset('assets/img/photo_6183962405080515886_y.jpg') }}'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <h4 style="text-align: center; color: yellow">{{ $nameGame }}</h4>

    <section>
        <div class="modelViewPort" id="modelViewPort" style="display: none">
            <div class="eva">
                <div class="head">
                    <div class="eyeChamber">
                        <div class="eye"></div>
                        <div class="eye"></div>
                    </div>
                </div>
                <div class="body">
                    <div class="hand"></div>
                    <div class="hand"></div>
                    <div class="scannerThing"></div>
                    <div class='scannerOrigin'></div>
                </div>
            </div>
        </div>
        <div class="loader d-flex justify-content-center align-items-center">
            <h4 class="text-danger"> {{ $percentage }}%</h4>
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
        <img id="imgGame" style="margin-left:10px; " src="{{ asset('storage/' . $imgGame) }}" alt="ảnh" width="100px" height="100px">

    </section>




    <div id="language-screen">
        <div class="d-flex justify-content-center">
            <button  style="font-size: 13px; padding: 10px;" class=" text-center btn btn-primary">{{ $roundText ?: 'Round: 0 - 0' }}</button>
            <button  style="font-size: 13px; padding: 14px;" class="btn btn-primary">{{ $startTime ?: '00:00' }} - {{ $endTime ?: '00:00' }}</button>
        </div>


        <!-- Phần tử scan (sẽ hiển thị sau 3s khi nhấn nút) -->
        <div id="scan" style="display: none">
            <div class="fingerprint"></div>
            <h3> Nhận tỉ lệ</h3>
        </div>


        <!-- Nút bấm gọi Livewire action -->
        <button style="font-size: 13px" id="french-button" wire:click="generateRandomPercentage()"
            aria-label="Sélectionner la langue française">Nhận tỉ lệ</button>
    </div>
</div>

<!-- JavaScript để hiển thị phần tử scan trong 3 giây -->
<script>
    document.getElementById('french-button').addEventListener('click', function() {
        var scanElement = document.getElementById('scan');
        var modelViewPort = document.getElementById('modelViewPort');
        var imgGame = document.getElementById('imgGame');

        // Hiển thị phần tử scan
        scanElement.style.display = 'block';
        modelViewPort.style.display = 'block';
        imgGame.style.display = 'none';

        // Ẩn phần tử scan sau 3 giây
        setTimeout(function() {
            scanElement.style.display = 'none';
        }, 3000); // 3000ms = 3 giây
    })
</script>
