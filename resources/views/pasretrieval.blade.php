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
                    <li class="breadcrumb-item active">Lấy lại mật khẩu</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">Lấy lại mật khẩu</div>
                <div class="card-body">
                    <form method="post" action="{{ route('pass.retrieval') }}">
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
                            <label class="font-weight-bolder" for="new_password">Mật khẩu mới</label>
                            <input type="text" class="form-control " name="new_password" id="new_password"
                                   placeholder="Mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="confirm_new_password">Xác nhận mật khẩu mới</label>
                            <input type="text" class="form-control " name="confirm_new_password"
                                   id="confirm_new_password" placeholder="Xác nhận mật khẩu mới" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

