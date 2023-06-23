@extends('master')

@section('content')
    <div class="bg-light">
        <!-- <div class="container" style="background: #28a745;border-radius: 3px;">
            <ol class="breadcrumb bg-transparent rounded-0">
                <li class="breadcrumb-item"><a href="/" style="color:#fff;">Giới Thiệu Game</a></li>
            </ol>
        </div>
    </div>
    <div class="container"> -->
        <div class="container pb-5">

            <div class="py-3 text-center">
                <h1> <img width="60" height="30" src="{{ asset('/img/new.gif') }}"><font color="red">Khai mở Server Mèo bản chính thức 10h 23/06/2023</font></h1>
                <h1> <font color="red">Đóng top vào 00h00 08/07/2023</font><img width="60" height="30" src="{{ asset('/img/new.gif') }}"></h1>
                <h1>___________________________</h1>
            </div>

            <div class="py-3 text-center">
                <h3>Chúng tôi rất vui khi có thể đem đến cho bạn những phút giây giải trí !!!</h3>
            </div>
            <div class="py-3 text-center">
                <h4>Bạn muốn nạp lượng, hãy inbox ngay cho <a href="https://zalo.me/0767993549">ADMIN</a> của chúng tôi (nạp tỉ lệ 1 : 1) !</h4>
            </div>

            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-bold">Box Zalo </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-3"></ul>
                        <a href="https://zalo.me/g/kvteno692" class="btn btn-block btn-outline-primary">Vào nhóm ngay</a>
                    </div>
                </div>

                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-bold">Zalo Admin </h5>
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled mb-3"></ul>
                        <a href="https://zalo.me/0767993549" class="btn btn-block btn-outline-primary">Inbox</a>
                    </div>
                </div>

                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-bold">Bảng Xếp Hạng</h5>
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled mb-3"></ul>
                        <a href="/bxh" class="btn btn-block btn-outline-primary">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 text-center">
            <h1>___________________________</h1>
        </div>

        <div class="container" style="margin-bottom: 50px">
            <h2><img src="{{ asset('/img/sao.gif') }}">Đua top Level:</h2>
            <h2 style="color: red">- Top 1: 3 rhb + 2 rbn + 100k lượng + Nhất Vĩ Li Mao Bảo Bảo Sơ Cấp</h2>
            <h2 style="color: orange">- Top 2: 5 rbn + 70k lượng</h2>
            <h2 style="color: yellowgreen">- Top 3: 3 rhb + 40k lượng</h2>
            <h2>- Top 4: 20k lượng</h2>
            <h2>- Top 5: 20k lượng</h2>
            <h2>- Top 6-10: 10k lượng</h2>
            <h2><img src="{{ asset('/img/sao.gif') }}">Đua top Nạp:</h2>
            <h2 style="color: red">- Top 1: 3 rhb + 2 rbn + 100k lượng + Nhất Vĩ Li Mao Bảo Bảo Trung Cấp</h2>
            <h2 style="color: orange">- Top 2: 5 rbn + 70k lượng</h2>
            <h2 style="color: yellowgreen">- Top 3: 3 rbn + 40k lượng</h2>
            <h2>- Top 4: 20k lượng</h2>
            <h2>- Top 5: 20k lượng</h2>
            <h2 style="color: red">* Lưu Ý: Quà top nạp sẽ không bán và chỉ tính từ 200k trở lên. Cảm ơn AE!!!</h2>
            <h2><img src="{{ asset('/img/sao.gif') }}">Đua top Sự Kiện:</h2>
            <h2 style="color: red">- Top 1: 3 rhb + 2 rbn + 100k lượng + 1 gậy mặt trăng</h2>
            <h2 style="color: orange">- Top 2: 5 rbn + 70k lượng</h2>
            <h2 style="color: yellowgreen">- Top 3: 3 rbn + 40k lượng</h2>
            <h2>- Top 4: 20k lượng</h2>
            <h2>- Top 5: 20k lượng</h2>
            <h2 style="color: blueviolet; margin-top: 50px">Mong anh em ủng hộ server phát triển!!!</h2>
        </div>
    </div>
@endsection
