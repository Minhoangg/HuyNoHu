@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Quản lý người dùng</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="display: flex; justify-content: space-between">
                            <h4 class="card-title">Danh sách người dùng</h4>
                            <a href="{{ route('system.user-create') }}" class="btn btn-success">Thêm Người Dùng</a>
                        </div>
                        <div class="card-body">
                            <!-- Hiển thị thông báo thành công nếu có -->
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Username</th>
                                            <th>Số điện thoại</th>
                                            <th>Xu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->phone_number }}</td>
                                                <td>{{ $user->coin }}</td>
                                                <td class="d-flex justify-content-between">
                                                    <a class="btn btn-warning">Thêm xu</a>
                                                    <a href="{{ route('system.user-edit', $user->id) }}" class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('system.user-delete', $user->id) }}" 
                                                        class="btn btn-danger" 
                                                        onclick="event.preventDefault(); 
                                                        if (confirm('Bạn có chắc chắn muốn xóa người dùng này?')) {
                                                            document.getElementById('delete-form-{{ $user->id }}').submit();
                                                        }">
                                                         Xóa
                                                     </a>
                                                 
                                                     <!-- Form ẩn để gửi yêu cầu DELETE -->
                                                     <form id="delete-form-{{ $user->id }}" action="{{ route('system.user-delete', $user->id) }}" method="POST" style="display: none;">
                                                         @csrf
                                                         @method('DELETE')
                                                     </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
