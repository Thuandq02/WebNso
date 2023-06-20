
<!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
    <meta property='og:image' content='http://familynso.xyz/img/logo-alt.jpg' />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="Bnokvfoe0nRbXdt0IxpeOTLdt4KafTn2kVI3yayo">
    <title>NSO MÈO</title>
    <link rel="shortcut icon" href='http://27.0.14.78/dl/image/iconninja32.png' type="image/x-icon" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="wrapper d-flex flex-column">
    <header class="header border-bottom">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container">
                <h2><a href="/">NSO MÈO</a></h2>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#siteNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="siteNav">
                    <div class="d-flex justify-content-center ml-sm-auto mx-n1 my-2">
                        <a class="btn btn-outline-danger" data-toggle="modal" data-target="#modalDownload">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            <span>Tải Game</span>
                        </a>
                        <nav class="my-2 my-md-0 mr-md-3">
                            <a class="btn btn-outline-success" href="/login">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                <span>Đăng nhập</span>
                            </a>
                            <a class="btn btn-outline-danger" href="/reg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                <span>Đăng ký</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalDownload" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="btn btn-success mx-1">Tải game</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="list-group">
                                <a href="/filegame/nsodl.jar" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho java</a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="list-group">
                                <a href="/filegame/nsodeluc.apk" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho apk</a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="list-group">
                                <a href="/filegame/nso_meo.zip" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho PC</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
