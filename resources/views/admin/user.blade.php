@extends('layouts.admin.master')

@section('content')
<div class="container-custom">
    <div class="d-flex align-items-center justify-content-between pt-2">
        <div>
            <h2>Danh sách người dùng</h2>
        </div>
        <div>
            <a href="" class="btn btn-primary">Thêm Người Dùng</a>
        </div>
    </div>
    <hr>
    <table class="table table-striped table-custom">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Vai trò</th>
                <th scope="col">update</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row col-1"></th>
                <td class="col-2"></td>
                <td class="col-3"></td>
                <td class="col-2"></td>
                <td class="col-4">
                    <a href="">
                        <div class="btn btn-primary">Sửa</div>
                    </a>
                    <a href="">
                        <div class="btn btn-danger">Xóa</div>
                    </a>
                    <a href="">
                        <div class="btn btn-danger">Sửa mật khẩu</div>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
