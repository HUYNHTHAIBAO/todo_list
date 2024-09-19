<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,viewport-fit=cover"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>
        ToDo List
    </title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/6104/6104865.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap"
        rel="stylesheet"
    />
    <style>
        :root {
            --adminuiux-content-font: "Open Sans", sans-serif;
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Lexend", sans-serif;
            --adminuiux-title-font-weight: 600;
        }
    </style>
    <script
        defer="defer"
        src="{{asset('storage/Components')}}/assets/js/appfd76.js?3016045972592aa23dfe"
    ></script>
    <link href="{{asset('storage/Components')}}/assets/css/appfd76.css?3016045972592aa23dfe" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('storage/Components')}}/Fontawesome/css/all.css">
</head>
<body
    class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed theme-blue roundedui"
    data-theme="theme-blue"
    data-sidebarfill="adminuiux-sidebar-fill-white"
    data-bs-spy="scroll"
    data-bs-target="#list-example"
    data-bs-smooth-scroll="true"
    tabindex="0"
></body>
</html>
<div class="pageloader">
    <div class="container h-100">
        <div
            class="row justify-content-center align-items-center text-center h-100"
        >
            <div class="col-12 mb-auto pt-4"></div>
            <div class="col-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/6104/6104865.png" alt="" class="height-60 mb-3"/>
                <p class="h3 mb-4">ToDo List</p>
                <div class="loader10 mb-2 mx-auto"></div>
            </div>

        </div>
    </div>
</div>
<header class="adminuiux-header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button
                class="btn btn-link btn-square sidebar-toggler"
                type="button"
                onclick="initSidebar()"
            >
                <i class="sidebar-svg" data-feather="menu"></i>
            </button>
            <a class="navbar-brand" href="/"
            ><img data-bs-img="light" src="https://cdn-icons-png.flaticon.com/128/6104/6104865.png" alt=""/>
                <img data-bs-img="dark" src="https://cdn-icons-png.flaticon.com/128/6104/6104865.png" alt=""/>
                <div class="">
                    <span class="h4">ToDo List</span>
                    {{--                    <p class="company-tagline">AdminUIUX HTML template</p>--}}
                </div>
            </a
            >
{{--            <div--}}
{{--                class="collapse navbar-collapse right-in-device justify-content-center"--}}
{{--                id="header-navbar"--}}
{{--            >--}}
{{--                <ul class="navbar-nav mx-lg-3 mb-2 mb-md-0">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">Trang chủ</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">Danh sách</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">Transaction</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">News</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="ms-auto">
                <button
                    class="btn btn-link btn-square btn-icon btn-link-header"
                    type="button"
                    onclick="openSearch()"
                >
                    <i data-feather="search"></i>
                </button>
                <button
                    class="btn btn-link btn-square btnsunmoon btn-link-header"
                    id="btn-layout-modes-dark-page"
                >
                    <i class="sun mx-auto" data-feather="sun"></i>
                    <i class="moon mx-auto" data-feather="moon"></i>
                </button>

                <div class="dropdown d-none d-sm-inline-block">
                    <button
                        class="btn btn-link btn-square btn-icon btn-link-header dropdown-toggle no-caret"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fa-regular fa-language"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item active" data-value="FR">VN -Vietnamese</a></li>
                        <li><a class="dropdown-item" data-value="EN">EN - English</a></li>
                    </ul>
                </div>
                <div class="dropdown d-inline-block">
                    <button
                        class="btn btn-link btn-square btn-icon btn-link-header dropdown-toggle no-caret"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i data-feather="bell"></i>
                        <span
                            class="position-absolute top-0 end-0 badge rounded-pill bg-danger p-1"
                        ><small>9+</small>
              <span class="visually-hidden">unread messages</span></span
                        >
                    </button>
                    <ul
                        class="dropdown-menu dropdown-menu-end notification-dd sm-mi-95px"
                    >
                        <li>
                            <a class="dropdown-item p-2" href="#"
                            >
                                <div class="row gx-3">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40 rounded-circle bg-pink">
                                            <i class="fa-light fa-user"></i>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <p class="mb-2 small">
                                            Congratulation! Your property
                                            <span class="fw-bold">#H10215</span> has reached 1000
                                            views.
                                        </p>
                                        <span class="row"
                                        ><span class="col"
                                            ><span
                                                    class="badge badge-light rounded-pill text-bg-warning small"
                                                >Directory</span
                                                ></span
                                            >
                      <span class="col-auto small opacity-75"
                      >1:00 am</span
                      ></span
                                        >
                                    </div>
                                </div>
                            </a
                            >
                        </li>


                        <li class="text-center">
                            <button
                                class="btn btn-link text-center"
                                onclick="notifcationAll()"
                            >
                                Tất cả <i class="fa-solid fa-chevrons-right"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown d-inline-block">
                    <a
                        class="dropdown-toggle btn btn-link btn-square btn-link-header style-none no-caret px-0"
                        id="userprofiledd"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        role="button"
                    >
                        <div class="row gx-0 d-inline-flex">
                            <div class="col-auto align-self-center">
                                <figure
                                    class="avatar avatar-28 rounded-circle coverimg align-middle"
                                >
                                    <img
                                        src="{{asset('storage/Components')}}/assets/img/modern-ai-image/user-6.jpg"
                                        alt=""
                                        id="userphotoonboarding2"
                                    />
                                </figure>
                            </div>
                        </div
                        >
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end width-300 pt-0 px-0 sm-mi-45px"
                        aria-labelledby="userprofiledd"
                    >
                        <div class="bg-theme-1-space rounded py-3 mb-3 dropdown-dontclose">
                            <div class="row gx-0">
                                <div class="col-auto px-3">
                                    <figure
                                        class="avatar avatar-50 rounded-circle coverimg align-middle"
                                    >
                                        <img src="https://cdn-icons-png.flaticon.com/128/149/149071.png"
                                             alt=""/>
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-1"><span>Bảo</span></p>

                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <div>
                                <a class="dropdown-item" href="investment-myprofile.html"
                                ><i data-feather="user" class="avatar avatar-18 me-1"></i>Tài khoản</a
                                >
                            </div>





                            <div>
                                <a class="dropdown-item theme-red" href="investment-login.html"
                                ><i data-feather="power" class="avatar avatar-18 me-1"></i>
                                    Đăng xuất</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="navbar-toggler btn btn-link btn-link-header btn-square btn-icon collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#header-navbar"
                    aria-controls="header-navbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i data-feather="more-vertical" class="openbtn"></i>
                    <i data-feather="x" class="closebtn"></i>
                </button>
            </div>
        </div>
    </nav>
    <div class="adminuiux-search-full">
        <div class="row gx-2 align-items-center">
            <div class="col-auto">
                <button
                    class="btn btn-link btn-square"
                    type="button"
                    onclick="closeSearch()"
                >
                    <i data-feather="arrow-left"></i>
                </button>
            </div>
            <div class="col">
                <input
                    class="form-control pe-0 border-0"
                    type="search"
                    placeholder="Bạn muốn tìm gì ?"
                />
            </div>
            <div class="col-auto">
                <div class="dropdown input-group-text border-0 p-0">
                    <button
                        class="dropdown-toggle btn btn-link btn-square no-caret"
                        type="button"
                        id="searchfilter2"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i data-feather="sliders"></i>
                    </button>
                    <div
                        class="dropdown-menu dropdown-menu-end dropdown-dontclose width-300"
                    >
                        <ul class="nav adminuiux-nav" id="searchtab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="searchall-tab2"
                                    data-bs-toggle="tab"
                                    data-bs-target="#searchall2"
                                    type="button"
                                    role="tab"
                                    aria-controls="searchall2"
                                    aria-selected="true"
                                >
                                    All
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="searchorders-tab2"
                                    data-bs-toggle="tab"
                                    data-bs-target="#searchorders2"
                                    type="button"
                                    role="tab"
                                    aria-controls="searchorders2"
                                    aria-selected="false"
                                    tabindex="-1"
                                >
                                    Orders
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="searchcontacts-tab2"
                                    data-bs-toggle="tab"
                                    data-bs-target="#searchcontacts2"
                                    type="button"
                                    role="tab"
                                    aria-controls="searchcontacts2"
                                    aria-selected="false"
                                    tabindex="-1"
                                >
                                    Contacts
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content py-3" id="searchtabContent">
                            <div
                                class="tab-pane fade active show"
                                id="searchall2"
                                role="tabpanel"
                                aria-labelledby="searchall-tab2"
                            >
                                <ul
                                    class="list-group adminuiux-list-group list-group-flush bg-none show"
                                >
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Search apps</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch1"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch1"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Include Pages</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch2"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch2"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Internet resource</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch3"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch3"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">News and Blogs</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch4"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch4"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="searchorders2"
                                role="tabpanel"
                                aria-labelledby="searchorders-tab2"
                            >
                                <ul
                                    class="list-group adminuiux-list-group list-group-flush bg-none show"
                                >
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Show order ID</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch5"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch5"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">International Order</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch6"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch6"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Taxable Product</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch7"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch7"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Published Product</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch8"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch8"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="searchcontacts2"
                                role="tabpanel"
                                aria-labelledby="searchcontacts-tab2"
                            >
                                <ul
                                    class="list-group adminuiux-list-group list-group-flush bg-none show"
                                >
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Have email ID</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch9"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch9"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Have phone number</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch10"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch10"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Photo available</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch11"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch11"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Referral</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="searchswitch12"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="searchswitch12"
                                                    ></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link">Reset</button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-theme">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="adminuiux-wrap">
    <div class="adminuiux-sidebar">
        <div class="adminuiux-sidebar-inner">
            <div class="px-3 not-iconic mt-3">
                <div class="row">
                    <div class="col align-self-center">
                        <h6 class="fw-medium">Bảng điều khiển</h6>
                    </div>
                    <div class="col-auto">
                        <a
                            class="btn btn-link btn-square"
                            data-bs-toggle="collapse"
                            data-bs-target="#usersidebarprofile"
                            aria-expanded="false"
                            role="button"
                            aria-controls="usersidebarprofile"
                        ><i data-feather="user"></i
                            ></a>
                    </div>
                </div>
                <div class="text-center collapse" id="usersidebarprofile">
                    <figure class="avatar avatar-100 rounded-circle coverimg my-3">
                        <img src="{{asset('storage/Components')}}/assets/img/modern-ai-image/user-6.jpg" alt=""/>
                    </figure>
                    <h5 class="mb-1 fw-medium">AdminUIUX</h5>
                    <p class="small">The Investment UI Kit</p>
                </div>
            </div>
            <ul class="nav flex-column menu-active-line">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="fa-regular fa-house"></i>
                        <span class="menu-name ms-3">    Trang chủ</span></a>
                </li>


{{--                <li class="nav-item dropdown">--}}
{{--                    <a--}}
{{--                        href="javascrit:void(0)"--}}
{{--                        class="nav-link dropdown-toggle"--}}
{{--                        data-bs-toggle="dropdown"--}}
{{--                    ><i class="fa-solid fa-house"></i>--}}
{{--                        <span class="menu-name">Investment</span></a--}}
{{--                    >--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <div class="nav-item">--}}
{{--                            <a href="investment-company-shares.html" class="nav-link"--}}
{{--                            ><i class="menu-icon bi bi-bank"></i>--}}
{{--                                <span class="menu-name">Company Share</span></a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                        <div class="nav-item">--}}
{{--                            <a href="investment-mutual-funds.html" class="nav-link"--}}
{{--                            ><i class="menu-icon bi bi-cash-coin"></i>--}}
{{--                                <span class="menu-name">Mutual Fund</span></a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                        <div class="nav-item">--}}
{{--                            <a href="investment-deposit.html" class="nav-link"--}}
{{--                            ><i class="menu-icon bi bi-percent"></i>--}}
{{--                                <span class="menu-name">Deposit</span></a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}


            </ul>
            <div class="mt-auto"></div>
{{--            <div class="px-3 mb-3 not-iconic">--}}
{{--                <h6 class="mb-3 fw-medium">Quick Links</h6>--}}
{{--                <div class="card adminuiux-card">--}}
{{--                    <div class="card-body p-2">--}}
{{--                        <div class="row gx-2">--}}
{{--                            <div class="col-12 d-flex justify-content-between">--}}
{{--                                <a--}}
{{--                                    href="investment-search-mutual-funds.html"--}}
{{--                                    class="btn btn-square btn-link theme-red"--}}
{{--                                ><span class="position-relative"--}}
{{--                                    ><i data-feather="heart"></i>--}}
{{--                    <span--}}
{{--                        class="position-absolute top-0 start-100 translate-middle p-1 bg-success rounded-circle"--}}
{{--                    ><span class="visually-hidden">New alerts</span>--}}
{{--                    </span></span--}}
{{--                                    ></a--}}
{{--                                ><a--}}
{{--                                    href="investment-schedule.html"--}}
{{--                                    class="btn btn-square btn-link"--}}
{{--                                ><span class="position-relative"--}}
{{--                                    ><i data-feather="calendar"></i>--}}
{{--                    <span--}}
{{--                        class="position-absolute top-0 start-100 translate-middle p-1 bg-warning rounded-circle"--}}
{{--                    ><span class="visually-hidden">New alerts</span>--}}
{{--                    </span></span--}}
{{--                                    ></a--}}
{{--                                ><a href="investment-inbox.html" class="btn btn-square btn-link"--}}
{{--                                ><i data-feather="inbox"></i> </a--}}
{{--                                ><a--}}
{{--                                    href="investment-help-center.html"--}}
{{--                                    class="btn btn-square btn-link"--}}
{{--                                ><i data-feather="help-circle"></i--}}
{{--                                    ></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <ul class="nav flex-column menu-active-line">

                <li class="nav-item">
                    <a href="investment-settings.html" class="nav-link"
                    ><i class="menu-icon" data-feather="settings"></i>
                        <span class="menu-name">Cài đặt</span></a
                    >
                </li>
            </ul>
        </div>
    </div>
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container mt-4" id="main-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg mb-4">
                    <h3 class="fw-normal mb-0 text-secondary">Xin chào,</h3>
                    <h1>Bảo</h1>
                </div>

            </div>

        </div>
    </main>
</div>

<div class="position-fixed bottom-0 end-0 m-3 z-index-5">
    <button
        class="btn btn-square btn-theme shadow"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#theming"
        aria-controls="theming"
    >
        <i class="fa-solid fa-gears"></i>
    </button
    >
    <br/>
    <button
        class="btn btn-theme btn-square rounded-circle shadow mt-2 d-none"
        id="backtotop"
    >
        <i class="fa-regular fa-up"></i>
    </button>
</div>
<div
    class="offcanvas offcanvas-end shadow border-0"
    tabindex="-1"
    id="theming"
    data-bs-scroll="true"
    data-bs-backdrop="false"
    aria-labelledby="theminglabel"
>
    <div class="offcanvas-header border-bottom">

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>
    </div>
    <div class="offcanvas-body">
        <h6 class="offcanvas-title">Màu sắc</h6>
        <div class="row mb-4 theme-select">
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="">
          <span class="avatar avatar-40 rounded-circle mb-2 bg-default"><i class="fa-regular fa-palette"></i></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-blue">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-blue"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-indigo">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-indigo"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-purple">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-purple"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-pink">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-pink"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-red">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-red"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-orange">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-orange"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-yellow">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-yellow"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-green">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-green"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-teal">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-teal"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-cyan">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-cyan"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-grey">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-grey"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-brown">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-brown"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-chocolate">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-chocolate"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="select-box text-center mb-2" data-title="theme-black">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-dark"></span>
                </div>
            </div>
        </div>
        <h6 class="offcanvas-title">Màu nền</h6>
        <div class="row mb-4 theme-background">
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-default">
          <span class="avatar avatar-40 rounded-circle mb-2 bg-default"
          ><i class="fa-regular fa-paint-roller"></i></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-white">
                    <span class="avatar avatar-40 rounded-circle mb-2 bg-white"></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-r-gradient">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-r-gradient"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-1">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-1"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-2">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-2"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-3">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-3"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-4">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-4"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-5">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-5"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-6">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-6"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-7">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-7"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-8">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-8"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-9">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-9"
          ></span>
                </div>
            </div>
            <div class="col-auto">
                <div class="gradient-box text-center mb-2" data-title="bg-gradient-10">
          <span
              class="avatar avatar-40 rounded-circle mb-2 bg-gradient-10"
          ></span>
                </div>
            </div>
        </div>
        <h6 class="offcanvas-title">Sidebar Layout</h6>
        <div class="row mb-4 sidebar-layout">
            <div class="col-auto">
                <div
                    class="select-box text-center mb-2"
                    data-title="adminuiux-sidebar-standard"
                    data-bs-toggle="tooltip"
                    title="None"
                >
          <span class="avatar avatar-40 rounded-circle mb-2 bg-default"
          ><i class="fa-solid fa-border-none"></i></span>
                </div>
            </div>
            <div class="col-auto">
                <div
                    class="select-box text-center mb-2"
                    data-title="adminuiux-sidebar-iconic"
                    data-bs-toggle="tooltip"
                    title="Iconic"
                >
          <span class="avatar avatar-40 rounded-circle mb-2 bg-default"
          ><i class="fa-solid fa-table-picnic"></i></span>
                </div>
            </div>
            <div class="col-auto">
                <div
                    class="select-box text-center mb-2"
                    data-title="adminuiux-sidebar-boxed"
                    data-bs-toggle="tooltip"
                    title="Boxed"
                >
          <span class="avatar avatar-40 rounded-circle mb-2 bg-default"
          ><i class="fa-light fa-box-open"></i></span>
                </div>
            </div>
            <div class="col-auto">
                <div
                    class="select-box text-center mb-2"
                    data-title="adminuiux-sidebar-boxed adminuiux-sidebar-iconic"
                    data-bs-toggle="tooltip"
                    title="Iconic+Boxed"
                >
          <span class="avatar avatar-40 rounded-circle mb-2 bg-default"
          ><i class="fa-light fa-box"></i></span>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="{{asset('storage/Components')}}/assets/js/investment/investment-dashboard.js"></script>
