
<link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />
<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

<div class="container d-flex  justify-content-center align-items-center" style="min-height: 100vh">
    <div class="page-inner" style="width: 60%; max-width: 600px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="post" action="">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Đăng nhập quản trị</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Tên đăng nhập :</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ old('email') }}" placeholder="Nhập email người dùng">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật Khẩu</label>
                                        <input type="password" class="form-control" name="password"
                                            value="{{ old('password') }}" placeholder="Nhập mật khẩu">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('login'))
                                <div class="text-danger">
                                    {{ $errors->first('login') }}
                                </div>
                            @endif
                            <div class="card-action d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
