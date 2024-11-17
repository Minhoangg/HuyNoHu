@extends('layouts.client.master-layout')

@section('content')
<div style="background-color: black;" id="wellcome_wrap" class="container-fluid">
    <div class="wellcome">
        <img src="{{ asset('assets/img/logo_san_hu-removebg.png') }}" alt="">
        <div class="wellcome_button">
            <div class="">
                <button type="button" class="btn  button_login" data-bs-toggle="modal" data-bs-target="#modalLogin">
                    Đăng Nhập
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Để hiển thị modal -->
















<!-- Vertically centered modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content-custom"
            style="background-image: url('{{ asset('assets/img/frame_popup-desktop.png') }}');
            background-size: cover;
background-position: center;
background-repeat: no-repeat;
background-color: none;
position: relative;
display: flex;
flex-direction: column;
width: 100%;
pointer-events: auto;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, .2);
border-radius: .3rem;
outline: 0;
">
            <div id="login_wrap" class="container-fluid">
                <div class="login_box">
                    <form action="">
                        <div class="mb-3">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Tên đăng nhập">
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-unlock"></i>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Mật khẩu">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Đăng nhập
                        </button>
                        <p class="q-register" style="color: white"> Chưa có tài khoản? <span class="link-register-model"
                                style="
                            color: #00ff75">Đăng ký</span></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection