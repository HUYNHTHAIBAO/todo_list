<html lang="en" data-bs-theme="light" dir="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Investment AdminUIUX - Bootstrap HTML Admin template - adminuiux.com</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/6104/6104865.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <style data-fullcalendar=""></style>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap"
        rel="stylesheet">
    <style>:root {
            --adminuiux-content-font: "Open Sans", sans-serif;
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Lexend", sans-serif;
            --adminuiux-title-font-weight: 600
        }</style>
    <script defer="defer" src="{{asset('storage/Components')}}/assets/js/app.js?3016045972592aa23dfe"></script>
    <link href="{{asset('storage/Components')}}/assets/css/app.css?3016045972592aa23dfe" rel="stylesheet">
</head>
<body
    class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed theme-blue roundedui"
    data-theme="theme-blue" data-sidebarfill="adminuiux-sidebar-fill-white" data-bs-spy="scroll"
    data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
<div class="pageloader" style="display: none;">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
            <div class="col-12 mb-auto pt-4"></div>
            <div class="col-auto"><img src="https://cdn-icons-png.flaticon.com/128/6104/6104865.png" alt=""
                                       class="height-60 mb-3">
                <p class="h3 mb-4">ToDo List</p>
                <div class="loader10 mb-2 mx-auto"></div>
            </div>

        </div>
    </div>
</div>
<main class="flex-shrink-0 pt-0 h-100">
    <div class="container-fluid">
        <div class="auth-wrapper">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4 minvheight-100 d-flex flex-column px-0">
                    <header class="adminuiux-header">
                        <nav class="navbar">
                            <div class="container-fluid"><a class="navbar-brand" href="/"><img
                                        data-bs-img="light"
                                        src="https://cdn-icons-png.flaticon.com/128/6104/6104865.png" alt=""> <img
                                        data-bs-img="dark" src="https://cdn-icons-png.flaticon.com/128/6104/6104865.png"
                                        alt="">
                                    <div class=""><span class="h4">ToDo List</span>
                                    </div>
                                </a>
                                <div class="ms-auto"></div>
                                <div class="ms-auto"></div>
                            </div>
                        </nav>
                    </header>
                    <div class="h-100 py-3 px-3">
                        <div class="row h-100 align-items-center justify-content-center">
                            <div class="col-11 col-sm-8 col-md-11 col-xl-11 col-xxl-10 login-box">
                                <div class="text-center mb-4"><h1 class="mb-3">Đăng ký tài khoản</h1></div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3"><input class="form-control" id="namef"
                                                                               placeholder="Enter first name"
                                                                               value="" autofocus=""> <label
                                                for="namef">Tên</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3"><input class="form-control" id="namel"
                                                                               placeholder="Enter last name"
                                                                               value=""> <label for="namel">Họ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3"><input type="email" class="form-control" id="emailadd"
                                                                       placeholder="Enter email address"
                                                                       value=""> <label for="emailadd">Email
                                    </label></div>

                                <div class="position-relative">
                                    <div class="form-floating mb-3"><input type="password" class="form-control"
                                                                           id="checkstrength"
                                                                           placeholder="Enter your password"> <label
                                            for="checkstrength">Mật khẩu</label></div>
                                    <button
                                        class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2">
                                </div>

                                <div class="position-relative">
                                    <div class="form-floating mb-3"><input type="password" class="form-control"
                                                                           id="passwd"
                                                                           placeholder="Nhập lại mật khẩu"> <label
                                            for="passwd">Nhập lại mật khẩu</label></div>
                                    <button
                                        class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2">
                                </div>
                                <a href="/" class="btn btn-lg btn-theme w-100 mb-4">Đăng nhập
                                </a>
                                <div class="text-center mb-3">Bạn đã có tài khoản ?
                                    <a href="/" class="">Đăng nhập</a>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col">
                                        <hr class="">
                                    </div>
                                    <div class="col-auto"><p class="text-secondary">Hoặc đoặc nhập với</p></div>
                                    <div class="col">
                                        <hr class="">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <button class="btn btn-lg btn-outline-theme w-100 mb-3 text-start"><img
                                                src="{{asset('storage/Components')}}/assets/img/g-logo.png" alt=""
                                                class="me-2"> Google
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-lg btn-outline-theme w-100 mb-4 text-start"><img
                                                src="{{asset('storage/Components')}}/assets/img/f-logo.png" alt=""
                                                class="me-2"> Facebook
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-8 p-4 d-none d-md-block">
                    <div class="card adminuiux-card      position-relative overflow-hidden h-100">
                        <div class="position-absolute start-0 top-0 h-100 w-100 coverimg opacity-75 z-index-0">
                        </div>
                        <div class="card-body position-relative z-index-1">
                            <div
                                class="row h-100 d-flex flex-column justify-content-center align-items-center gx-0 text-center">
                                <div class="col-10 col-md-11 col-xl-8 mb-4 mx-auto">
                                    <img src="https://plus.unsplash.com/premium_photo-1683309563255-fef9e541cdec?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8dG9kb3xlbnwwfHwwfHx8MA%3D%3D" alt="" style="border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('storage/Components')}}/assets/js/investment/investment-auth.js"></script>
</body>
</html>
