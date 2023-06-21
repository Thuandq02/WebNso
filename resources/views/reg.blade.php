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
            <div class="signin card">
                <div class="card-body p-0">
                    <h5 class="card-title">Đăng ký tài khoản</h5>
                    <form method="post" action="{{route('register.user')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control " name="username" value="" placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control " name="password" placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repassword" placeholder="Xác nhận mật khẩu" required="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Đăng ký</button>
                        </div>
                        @csrf
                        @if($errors->any())
                            <div class="error-message">
                                @foreach($errors->all() as $nameError)
                                    <p class="alert alert-warning">{{$nameError}}</p>
                                @endforeach
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

