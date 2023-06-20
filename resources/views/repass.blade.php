@extends('master')

@section('content')
    <main class="flex-grow-1 flex-shrink-1">
        <div class="bg-light">
            <div class="container">
                <ol class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/detail">Thông tin tài khoản</a></li>
                    <li class="breadcrumb-item active">Đổi mật khẩu</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">Đổi mật khẩu</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="password">Mật khẩu hiện tại</label>
                            <input type="text" class="form-control " name="password" id="password" placeholder="Mật khẩu hiện tại" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="new_password">Mật khẩu mới</label>
                            <input type="text" class="form-control " name="new_password" id="new_password" placeholder="Mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="new_password_confirmation">Xác nhận mật khẩu</label>
                            <input type="text" class="form-control " name="new_password_confirmation" id="new_password_confirmation" placeholder="Xác nhận mật khẩu mới" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

