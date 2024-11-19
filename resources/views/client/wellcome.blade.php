@extends('layouts.client.master-layout')

@section('content')
<div style="
        background-image: url('{{ asset('assets/img/5fca953b-6dcb-4d9c-bff6-901ef3d7296c.jpg') }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    "

    id="wellcome_wrap" class="container-fluid">
    <div class="wellcome">
        <img src="{{ asset('assets/img/logo_san_hu-removebg.png') }}" alt="">
        <div class="wellcome_button">
            <div class="">
                <button type="button" class="btn  button_login" data-bs-toggle="modal" data-bs-target="#modalLogin">
                    Đăng Nhập
                </button>
                <button type="button" class="btn  button_login" data-bs-toggle="modal" data-bs-target="#modalRegister">
                    Đăng Ký
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Để hiển thị modal -->
















<!-- Vertically centered modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalCenterLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content-custom"
            style=" height: 500px; background-image: url('{{ asset('assets/img/6c4c484a-732c-4a34-b3d2-00bd1aed6df3.jpg') }}');
            background-size: cover;
background-position: center;
background-repeat: no-repeat;
background-color: none;
position: relative;
display: flex;
justify-content: center;
align-items: center;
width: 100%;
pointer-events: auto;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, .2);
border-radius: .3rem;
outline: 0;
">
            @if(session('user'))
            <script>
                window.location.href = "{{ route('client.home-lobby') }}";
            </script>
            @endif

            <div id="login_wrap" class="container-fluid">
                <div class="login_box">
                    <form action="{{ route('client.login-submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" class="form-control" id="username" name="name" placeholder="Tên đăng nhập" value="{{ old('username') }}">
                            @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-unlock"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                            @if ($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </form>
                    @if (session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalCenterLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content-custom"
            style=" height: 500px; background-image: url('{{ asset('assets/img/6c4c484a-732c-4a34-b3d2-00bd1aed6df3.jpg') }}');
            background-size: cover;
background-position: center;
background-repeat: no-repeat;
background-color: none;
position: relative;
display: flex;
justify-content: center;
align-items: center;
width: 100%;
pointer-events: auto;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, .2);
border-radius: .3rem;
outline: 0;
">

            <div id="login_wrap" class="container-fluid">
                <div class="login_box">
                    <form action="{{ route('client.register-submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" class="form-control" id="username" name="name" placeholder="Tên đăng nhập" value="{{ old('username') }}">
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-user"></i>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" value="{{ old('phone') }}">
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-unlock"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </form>
                    @if (session('succesRegister'))
                    <div class="alert alert-danger mt-3">
                        {{ session('succesRegister') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection