@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Chỉnh sửa người dùng</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sửa thông tin người dùng</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('system.user-update', $user->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Tên</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $user->name) }}" placeholder="Nhập tên người dùng">
                                    @error('name')
                                        <small class="form-text text-muted text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone', $user->phone_number) }}" placeholder="Nhập số điện thoại">
                                    @error('phone')
                                        <small class="form-text text-muted text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Mật khẩu (nếu thay đổi)</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Nhập mật khẩu mới (nếu thay đổi)">
                                    @error('password')
                                        <small class="form-text text-muted text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="coin">Xu</label>
                                    <input type="number" name="coin" class="form-control" id="coin" value="{{ old('coin', $user->coin) }}" placeholder="Nhập số xu">
                                    @error('coin')
                                        <small class="form-text text-muted text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
