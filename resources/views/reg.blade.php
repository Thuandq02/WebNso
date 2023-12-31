@extends('master')

@section('content')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
    <main class="flex-grow-1 flex-shrink-1">
        <div class="bg-light">
            <div class="container">
                <ol class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đăng ký tài khoản</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">Đăng ký tài khoản</div>
                <div class="card-body">
                    <form method="post" action="{{ route('register.user') }}">
                        @csrf
                        @if($errors->any())
                            <div class="error-message">
                                @foreach($errors->all() as $nameError)
                                    <p class="alert alert-warning">{{$nameError}}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="font-weight-bolder" for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control " name="username" id="username" placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="phone">Số điện thoại</label>
                            <input type="text" class="form-control " name="phone" id="phone"
                                   placeholder="Số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="password">Mật khẩu</label>
                            <input type="text" class="form-control " name="password" id="password"
                                   placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="repassword">Xác nhận mật khẩu</label>
                            <input type="text" class="form-control " name="repassword"
                                   id="repassword" placeholder="Xác nhận mật khẩu" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

