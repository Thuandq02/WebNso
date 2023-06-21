@extends('master')

@section('content')
    <main class="flex-grow-1 flex-shrink-1">
        <div class="bg-light">
            <div class="container">
                <ol class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đổi mật khẩu</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">Đổi mật khẩu</div>
                <div class="card-body">
                    <form method="post" action="{{ route('set.password') }}">
                        @csrf
                        @if($errors->any())
                            <div class="error-message">
                                @foreach($errors->all() as $nameError)
                                    <p class="alert alert-warning">{{$nameError}}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="font-weight-bolder" for="username">Tài Khoản</label>
                            <input type="text" class="form-control " name="username" id="username"
                                   placeholder="Tài khoản" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="password">Mật khẩu hiện tại</label>
                            <input type="text" class="form-control " name="password" id="password"
                                   placeholder="Mật khẩu hiện tại" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="new_password">Mật khẩu mới</label>
                            <input type="text" class="form-control " name="new_password" id="new_password"
                                   placeholder="Mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="new_password_confirmation">Xác nhận mật khẩu</label>
                            <input type="text" class="form-control " name="new_password_confirmation"
                                   id="new_password_confirmation" placeholder="Xác nhận mật khẩu mới" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">Đổi số điện thoại</div>
                <div class="card-body">
                    <form method="post" action="{{ route('set.phone') }}">
                        @csrf
                        @if($errors->any())
                            <div class="error-message">
                                @foreach($errors->all() as $nameError)
                                    <p class="alert alert-warning">{{$nameError}}</p>
                                @endforeach
                            </div>
                        @endif

                        <div class="form-group">
                            <label class="font-weight-bolder" for="username">Tài Khoản</label>
                            <input type="text" class="form-control " name="username" id="username"
                                   placeholder="Tài khoản" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="phone">Số điện thoại hiện tại</label>
                            <input type="text" class="form-control " name="phone" id="phone"
                                   placeholder="Số điện thoại hiện tại" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="new_phone">Số điện thoại mới</label>
                            <input type="text" class="form-control " name="new_phone" id="new_phone"
                                   placeholder="Số điện thoại mới" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Đổi số điện thoại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

