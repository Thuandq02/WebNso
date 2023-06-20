@include('header')
<main class="flex-grow-1 flex-shrink-1">
        <div class="bg-light">
            <div class="container">
                <ol class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Thông tin tài khoản</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex">
                    <div class="w-50">Tài khoản:</div>
                    <div class="w-50">t</div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="w-50">Tình trạng:</div>
                    <div class="w-50"><span style="color:red;font-weight: bold;">Chưa kích hoạt</span></div>
                </li>
                <!--
                                <center><h3>Để kích hoạt tài khoản và mua đồ vui lòng liên hệ <font color="red">Admin</font> theo khung giờ(kích hoạt nick free)</center></h3>
                -->
                <div class="text-center">
                    <a href="/repass" class="btn btn-sm btn-primary mb-1">Đổi mật khẩu</a>
                </div>
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <button type="submit">Đăng xuất</button>
                </form>
            </ul>
        </div>

    </main>

    <footer class="footer bg-light text-muted border-top text-center py-4">
        <div class="container">
            <p class="m-0">Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.</p>
        </div>
    </footer>

    <div class="modal fade" id="modalDownload" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Tải game</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho JAVA</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản cho Android</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-windows mr-2"></i>Tải về phiên bản cho PC</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9898950164652934"
            crossorigin="anonymous"></script>
</div>
<!-- Code made in tui 127.0.0.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
