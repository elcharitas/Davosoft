<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nago - Admin & Dashboard HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

        <!-- Dropzone -->
    <link rel="stylesheet" href="../../vendors/dropzone/dropzone.css" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="../../vendors/prism/prism.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">
</head>
<body  class="small-navigation">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- BEGIN: Sidebar Group -->
<div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
        <div class="py-4 text-center" data-backround-image="../../assets/media/image/image1.jpg">
            <figure class="avatar avatar-lg mb-3 border-0">
                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
            </figure>
            <h5 class="d-flex align-items-center justify-content-center">Roxana Roussell</h5>
            <div>
                Balance: <strong>$500</strong>
            </div>
        </div>
        <div class="card mb-0 card-body shadow-none">
            <div class="mb-4">
                <div class="list-group list-group-flush">
                    <a href="profile.html" class="list-group-item p-l-r-0">Profile</a>
                    <a href="#" class="list-group-item p-l-r-0 d-flex">Followers</a>
                    <a href="mail.html" class="list-group-item p-l-r-0 d-flex">
                        Inbox <span class="badge badge-danger ml-auto">2</span>
                    </a>
                    <a href="#" class="list-group-item p-l-r-0">Billing</a>
                    <a href="#" class="list-group-item p-l-r-0" data-sidebar-target="#settings">Settings</a>
                    <a href="login.html" class="list-group-item p-l-r-0 text-danger" data-sidebar-target="#settings">Sign Out!</a>
                </div>
            </div>
            <div class="mb-4">
                <h6 class="d-flex justify-content-between">
                    Completed Tasks
                    <span class="float-right">%68</span>
                </h6>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%;"
                         aria-valuenow="68"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <h6 class="d-flex justify-content-between">
                    Storage
                    <span>%25</span>
                </h6>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <h6>About</h6>
                <p class="text-muted mb-0">I love reading, traveling and discovering new things. You need to be happy in
                    life.</p>
            </div>
            <div class="mb-4">
                <h6>City</h6>
                <p class="text-muted mb-0">Germany / Berlin</p>
            </div>
            <div class="mb-4">
                <h6>Social Links</h6>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-whatsapp">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: User Menu -->

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

</div>
<!-- END: Sidebar Group -->

<!-- begin::main -->
<div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                <a href=index.html>
                    <img class="logo" src="../../assets/media/image/logo.png" alt="logo">
                    <img class="logo-light" src="../../assets/media/image/logo-light.png" alt="light logo">
                </a>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                    <h4>File Upload</h4>
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown">
                            <img width="18" src="../../assets/media/image/flags/262-united-kingdom.png"
                                 alt="flag"
                                 class="mr-2 rounded" title="United Kingdom"> EN
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                                <img width="18" src="../../assets/media/image/flags/003-tanzania.png"
                                     class="mr-2 rounded"
                                     alt="flag">
                                Tanzania
                            </a>
                            <a href="#" class="dropdown-item">
                                <img width="18" src="../../assets/media/image/flags/261-china.png"
                                     class="mr-2 rounded"
                                     alt="flag"> China
                            </a>
                            <a href="#" class="dropdown-item">
                                <img width="18" src="../../assets/media/image/flags/013-tunisia.png"
                                     class="mr-2 rounded"
                                     alt="flag">
                                Tunisia
                            </a>
                            <a href="#" class="dropdown-item">
                                <img width="18" src="../../assets/media/image/flags/044-spain.png"
                                     class="mr-2 rounded"
                                     alt="flag"> Spain
                            </a>
                        </div>
                    </li>

                    <!-- begin::header fullscreen -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- end::header fullscreen -->

                    <!-- begin::header search -->
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                            <i data-feather="search"></i>
                        </a>
                        <div class="dropdown-menu p-2 dropdown-menu-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- end::header search -->

                    <!-- begin::apps -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">
                            <i data-feather="box"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between">
                                <h5 class="mb-0">Apps</h5>
                            </div>
                            <div class="p-3">
                                <div class="row row-xs">
                                    <div class="col-6">
                                        <a href="chat.html">
                                            <div class="border-radius-1 text-center mb-3">
                                                <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-primary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="message-circle"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">Chat</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="mail.html">
                                            <div class="border-radius-1 text-center mb-3">
                                                <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-secondary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="mail"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">Mail</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="todo-list.html">
                                            <div class="border-radius-1 text-center">
                                                <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-info text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="check-circle"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">Todo List</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="file-manager.html">
                                            <div class="border-radius-1 text-center">
                                                <figure class="avatar avatar-lg border-0">
                                                <span class="avatar-title bg-warning text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="file"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">File Manager</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end::apps -->

                    <!-- begin::header messages dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Chats" data-toggle="dropdown">
                            <i data-feather="message-circle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Chats</h5>
                                <small class="opacity-7">2 unread chats</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="../../assets/media/image/user/man_avatar1.jpg"
                                                         class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Herbie Pallatina
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">02:30 PM</span>
                                                    <span>Have you madimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="../../assets/media/image/user/women_avatar5.jpg"
                                                         class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Andrei Miners
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">08:36 PM</span>
                                                    <span>I have a meetinimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-divider small pb-2 pl-3 pt-3">
                                        <span>Old chats</span>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="../../assets/media/image/user/man_avatar3.jpg"
                                                         class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Kevin added
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">11:09 PM</span>
                                                    <span>Have you madimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="../../assets/media/image/user/man_avatar2.jpg"
                                                         class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Eugenio Carnelley
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">Yesterday</span>
                                                    <span>I have a meetinimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg"
                                                         class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Neely Ferdinand
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">Yesterday</span>
                                                    <span>I have a meetinimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header messages dropdown -->

                    <!-- begin::header notification dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Notifications</h5>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-divider small pb-2 pl-3 pt-3">
                                        <span>Old notifications</span>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex align-items-center justify-content-between">
                                                    Apps are ready for update
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header notification dropdown -->

                    <!-- BEGIN: Cart -->
                    <li class="nav-item">
                        <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                            <i data-feather="shopping-bag"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Cart</h5>
                                <small class="opacity-7">3 products</small>
                            </div>
                            <div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="p-3 list-group-item d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product6.png"
                                                     alt="Canon 4000D 18-55 MM">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Canon 4000D 18-55 MM
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">1 X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="p-3 list-group-item d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product3.png"
                                                     alt="pineapple">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Snopy SN-BT96 Pretty
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">1 X $250</span>
                                        </div>
                                    </a>
                                    <a href="#" class="p-3 list-group-item d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product7.png"
                                                     class="rounded" alt="pineapple">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Lenovo Tab E10 TB-X104F 32GB
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">2 X $100</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-3 border-top text-right">
                                <p class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Sub Total</span>
                                    <span>$1,650</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Taxes</span>
                                    <span>$15</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-2 font-weight-bold">
                                    <span>Total</span>
                                    <span>$1,675</span>
                                </p>
                                <button class="btn btn-primary btn-block mt-2">
                                    Order and Payment <i class="ti-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <!-- END: Cart -->

                    <!-- begin::settings -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <!-- end::settings -->

                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none">Roxana Roussell</span>
                            <figure class="avatar avatar-sm">
                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <!-- end::user menu -->

                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">

        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Ecommerce"
                           data-nav-target="#ecommerce">
                            <i data-feather="shopping-cart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Analytics"
                           data-nav-target="#analytics">
                            <i data-feather="activity"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Projects"
                           data-nav-target="#projects">
                            <i data-feather="briefcase"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Apps" data-nav-target="#apps">
                            <i data-feather="globe"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="User"
                           data-nav-target="#user">
                            <i data-feather="users"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Components"
                           data-nav-target="#components">
                            <i data-feather="layers"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Forms"
                           data-nav-target="#forms">
                            <i data-feather="edit-3"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Plugins"
                           data-nav-target="#plugins">
                            <i data-feather="gift"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip"
                           data-placement="right" title="Pages" data-nav-target="#pages">
                            <i data-feather="copy"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navigation-menu-body">
                <div class="navigation-menu-group">
                    <div id="ecommerce">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="shopping-cart"></i> E-commerce
                            </li>
                            <li>
                                <a  href="ecommerce-dashboard.html">Dashboard</a></li>
                            <li>
                                <a  href="orders.html">Orders</a></li>
                            <li>
                                <a  href="product-list.html">Product List</a></li>
                            <li>
                                <a  href="product-grid.html">Product Grid</a></li>
                            <li>
                                <a  href="product-detail.html">Product Detail</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-warning rounded">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Total Orders</h6>
                                        <h4 class="mb-0 font-weight-bold">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-success rounded">
                                    <i class="ti-trash"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>New Products</h6>
                                        <h4 class="mb-0">100</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-danger rounded">
                                    <i class="ti-reload"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Refund</h6>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="analytics">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="activity"></i> Analytics
                            </li>
                            <li>
                                <a  href="analytics-dashboard.html">Dashboard</a></li>
                            <li>
                                <a  href="customers.html">Customers</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="projects">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="briefcase"></i> Projects
                            </li>
                            <li>
                                <a  href="projects-dashboard.html">Dashboard</a></li>
                            <li>
                                <a  href="project-list.html">Project List</a></li>
                            <li>
                                <a  href="project-grid.html">Project Grid</a></li>
                            <li>
                                <a  href="project-detail.html">Project Detail</a></li>
                            <li>
                                <a  href="clients.html">Clients</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="apps">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="globe"></i> Apps
                            </li>
                            <li>
                                <a  href="chat.html">
                                    <span>Chat</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                            <li>
                                <a  href="mail.html">
                                    <span>Mail</span>
                                </a>
                            </li>
                            <li>
                                <a  href="todo-list.html">
                                    <span>Todo List</span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                            </li>
                            <li>
                                <a  href="file-manager.html">
                                    <span>File Manager</span>
                                </a>
                            </li>
                            <li>
                                <a  href="calendar.html">
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a  href="gallery.html">
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a  href="invoice.html">Invoice</a></li>
                            <li class="navigation-divider">Recent Contacts</li>
                            <li>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Valentine Maton</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Holmes Cherryman</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar4.jpg"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Kenneth Hune</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Holmes Cherryman</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar5.jpg"
                                                     class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Kenneth Hune</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="user">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="users"></i> User
                            </li>
                            <li>
                                <a  href="profile.html">Profile</a></li>
                            <li>
                                <a  href="user-list.html">User List</a></li>
                            <li>
                                <a  href="user-edit.html">User Edit</a></li>
                            <li><a href="login.html" target="_blank">Login</a></li>
                            <li><a href="register.html" target="_blank">Register</a></li>
                            <li><a href="recovery-password.html" target="_blank">Recovery Password</a>
                            </li>
                            <li><a href="lock-screen.html" target="_blank">Lock Screen</a></li>
                            <li class="navigation-divider">Followers</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar4.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-info rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar3.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Avery Hampshire" data-toggle="tooltip">
                                            <span class="avatar-title bg-warning rounded-circle">A</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-success rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Other" data-toggle="tooltip">
                                            <span class="avatar-title bg-dark rounded-circle">+5</span>
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li class="navigation-divider">Following</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Darby Croci" data-toggle="tooltip">
                                            <span class="avatar-title bg-danger rounded-circle">D</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle"
                                                 alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                            <span class="avatar-title bg-secondary rounded-circle">M</span>
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="components">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="layers"></i> Components
                            </li>
                            <li>
                                <a href="#">Basic Components</a>
                                <ul>
                                    <li>
                                        <a  href="alert.html">Alerts</a></li>
                                    <li>
                                        <a  href="accordion.html">Accordion</a></li>
                                    <li>
                                        <a  href="buttons.html">Buttons</a></li>
                                    <li>
                                        <a  href="dropdown.html">Dropdown</a></li>
                                    <li>
                                        <a  href="list-group.html">List Group</a></li>
                                    <li>
                                        <a  href="pagination.html">Pagination</a></li>
                                    <li>
                                        <a  href="typography.html">Typography</a></li>
                                    <li>
                                        <a  href="media-object.html">Media Object</a>
                                    </li>
                                    <li>
                                        <a  href="progress.html">Progress</a></li>
                                    <li>
                                        <a  href="modal.html">Modal</a></li>
                                    <li>
                                        <a  href="spinners.html">Spinners</a></li>
                                    <li>
                                        <a  href="navs.html">Navs</a></li>
                                    <li>
                                        <a  href="tab.html">Tab</a></li>
                                    <li>
                                        <a  href="tooltip.html">Tooltip</a></li>
                                    <li>
                                        <a  href="popovers.html">Popovers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Cards</a>
                                <ul>
                                    <li>
                                        <a  href="basic-cards.html">Basic Cards </a></li>
                                    <li>
                                        <a  href="image-cards.html">Image Cards </a></li>
                                    <li>
                                        <a  href="scroll-cards.html">Scroll Cards </a></li>
                                    <li>
                                        <a  href="other-cards.html">Others Cards</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <ul>
                                    <li>
                                        <a  href="basic-tables.html">Basic Tables</a></li>
                                    <li>
                                        <a  href="dataTable.html">Datatable</a></li>
                                    <li>
                                        <a  href="responsive-tables.html">Responsive Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Charts</a>
                                <ul>
                                    <li>
                                        <a  href="apexchart.html">Apex Chart</a></li>
                                    <li>
                                        <a  href="chartjs.html">Chartjs</a></li>
                                    <li>
                                        <a  href="justgage.html">Justgage</a></li>
                                    <li>
                                        <a  href="morsis.html">Morsis</a></li>
                                    <li>
                                        <a  href="peity.html">Peity</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Maps</a>
                                <ul>
                                    <li>
                                        <a  href="google-map.html">Google Map</a></li>
                                    <li>
                                        <a  href="vector-map.html">Vector Map</a></li>
                                </ul>
                            </li>
                            <li>
                                <a  href="avatar.html">Avatar</a></li>
                            <li>
                                <a  href="icons.html">Icons</a></li>
                            <li>
                                <a  href="colors.html">Colors</a></li>
                        </ul>
                    </div>
                    <div id="forms">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="edit-3"></i> Forms
                            </li>
                            <li>
                                <a  href="basic-forms.html">Basic Forms</a></li>
                            <li>
                                <a  href="custom-forms.html">Custom Forms</a></li>
                            <li>
                                <a  href="advanced-forms.html">Advanced Forms</a></li>
                            <li>
                                <a  href="form-validation.html">Form Validation</a></li>
                            <li>
                                <a  href="form-wizard.html">Form Wizard</a></li>
                            <li>
                                <a  class="active"
                                    href="file-upload.html">File Upload</a></li>
                            <li>
                                <a  href="datepicker.html">Datepicker</a></li>
                            <li>
                                <a  href="timepicker.html">Timepicker</a></li>
                            <li>
                                <a  href="colorpicker.html">Colorpicker</a></li>
                        </ul>
                    </div>
                    <div id="plugins">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="gift"></i> Plugins
                            </li>
                            <li>
                                <a  href="sweet-alert.html">Sweet Alert</a></li>
                            <li>
                                <a  href="lightbox.html">Lightbox</a></li>
                            <li>
                                <a  href="toast.html">Toast</a></li>
                            <li>
                                <a  href="tour.html">Tour</a></li>
                            <li>
                                <a  href="slick-slide.html">Slick Slide</a></li>
                            <li>
                                <a  href="nestable.html">Nestable</a></li>
                        </ul>
                    </div>
                    <div id="pages">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="copy"></i> Pages
                            </li>
                            <li>
                                <a  href="timeline.html">Timeline</a></li>
                            <li>
                                <a  href="pricing-table.html">Pricing Table</a></li>

                            <li>
                                <a  href="pricing-table-2.html">Pricing Table 2</a></li>
                            <li>
                                <a  href="search-result.html">Search Result</a></li>
                            <li>
                                <a  href="mailing.html">Mailing</a></li>
                            <li>
                                <a href="#">Error Pages</a>
                                <ul>
                                    <li><a href="404.html" target="_blank">404</a></li>
                                    <li><a href="503.html" target="_blank">503</a></li>
                                    <li><a href="mean-at-work.html" target="_blank">Mean at
                                            Work</a></li>
                                </ul>
                            </li>
                            <li>
                                <a  href="blank-page.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">Menu Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Menu Level</a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Level </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">

            <div class="content">

                
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Forms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">File Upload</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <p class="lead">
                                DropzoneJS is an open source library that provides drag’n’drop file uploads with image
                                previews.
                                <a href="https://www.dropzonejs.com/" class="link-1" target="_blank">Plugin page</a>.
                            </p>
                            <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Css --&gt;
&lt;link rel="stylesheet" href="vendors/dropzone/dropzone.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="vendors/dropzone/dropzone.js'"&gt;&lt;/script&gt;</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Basic Demo</h6>
                            <p>The typical way of using dropzone is by creating a form element with the class</p>
                            <form action="/file-upload" class="dropzone"></form>
                            <div data-label="CODE EXAMPLE" class="demo-code-preview">
                                <pre><code class="language-html">&lt;form action="/file-upload" class="dropzone"&gt;
  ...
&lt;/form&gt;</code></pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


            </div>

            <!-- begin::footer -->
            <footer class="content-footer">
                <div>© 2020 Nago - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- end::footer -->

        </div>

    </div>

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="../../vendors/bundle.js"></script>

    <!-- Dropzone -->
    <script src="../../vendors/dropzone/dropzone.js"></script>

    <!-- Prism -->
    <script src="../../vendors/prism/prism.js"></script>

<!-- App scripts -->
<script src="../../assets/js/app.min.js"></script>

</body>
</html>
