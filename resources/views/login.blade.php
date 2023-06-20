@extends('master')

@section('content')

<main class="flex-grow-1 flex-shrink-1">
        <div class="bg-light">
            <div class="container">
                <ol class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đăng nhập tài khoản</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="signin card">
                <div class="card-body p-0">
                    <h5 class="card-title">Đăng nhập</h5>
                    <form method="post" action="{{ route('login.check') }}">
                        @csrf
                        @if(\Illuminate\Support\Facades\Session::has('registed_sucess'))
                            <div>
                                <p class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('registed_sucess')}}</p>
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control " name="username" value="" placeholder="Tên đăng nhập" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control " name="password" placeholder="Mật khẩu" required>
                        </div>
                        <div class="error-message">
                            @if($errors->any())
                                @foreach($errors->all() as $nameError)
                                    <p style="color: red">{{$nameError}}</p>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Đăng nhập</button>
                        </div>

                        <div class="form-group mb-0">
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-link" href="/reg">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

