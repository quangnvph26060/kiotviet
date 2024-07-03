<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/new_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('validator/validator.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <style>
        .cke_notifications_area{
            display: none;
        }
    </style>
    <div class="container">
        <header class="head_mobi mt-2">
            <div class="header_search">
                <div class="head_logo">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="148" height="40" fill="none"
                            viewBox="0 0 186 50">
                            <path fill="#076FBF"
                                d="M35.493 0h-20.96C5.427 0 0 5.425 0 14.525V35.45C0 44.575 5.428 50 14.532 50h20.936C44.572 50 50 44.575 50 35.475v-20.95C50.025 5.425 44.597 0 35.493 0ZM31.99 36.5a1.883 1.883 0 0 1-1.476.725c-.4 0-.8-.125-1.15-.4-2.652-2.05-6.078-2.05-8.73 0-.825.625-2 .475-2.626-.325-.625-.825-.475-2 .325-2.625 3.977-3.075 9.33-3.075 13.307 0 .85.625 1 1.8.35 2.625Zm5.528-7.725a1.883 1.883 0 0 1-1.476.725c-.4 0-.8-.125-1.15-.4-6.004-4.625-13.733-4.625-19.735 0a1.88 1.88 0 0 1-2.652-.325c-.65-.825-.475-2 .325-2.625 7.38-5.7 16.934-5.7 24.313 0 .85.625 1 1.8.375 2.625Zm3.977-7.725a1.883 1.883 0 0 1-1.476.725c-.4 0-.8-.125-1.15-.4-8.43-6.5-19.31-6.5-27.714 0-.826.625-2.001.475-2.627-.325-.625-.825-.475-2 .325-2.625 9.805-7.575 22.487-7.575 32.316 0 .826.625.976 1.8.326 2.625ZM56 4.041h16.575v1.952h-6.507V18.46c0 .502-.08.856-.24 1.061-.136.183-.467.274-.992.274H62.54v-13.8H56V4.04Zm22.04 15.89c-1.21 0-2.032-.285-2.466-.856-.434-.593-.65-1.472-.65-2.637l.033-10.308h3.185v10.137c0 .868.103 1.461.309 1.78.228.32.605.48 1.13.48.205 0 .433-.022.685-.068.25-.046.41-.08.479-.103v1.301a5.846 5.846 0 0 1-1.301.206c-.366.046-.834.068-1.404.068ZM76.6 4.248c-.525 0-.924-.069-1.198-.206-.252-.16-.377-.445-.377-.856s.125-.685.377-.822c.25-.16.65-.24 1.198-.24.525 0 .902.08 1.13.24.252.137.377.411.377.822 0 .41-.126.696-.377.856-.228.137-.605.206-1.13.206Zm7.275 15.546c-.64 0-.959-.32-.959-.958V7.055c.685-.274 1.61-.514 2.774-.72 1.165-.228 2.489-.342 3.973-.342 1.461 0 2.625.091 3.493.274.89.183 1.564.48 2.02.89.457.389.754.902.89 1.542.16.639.24 1.427.24 2.363v7.431c0 .32-.034.582-.102.788a.532.532 0 0 1-.377.41c-.183.07-.468.104-.856.104h-1.884v-9.418c0-.89-.273-1.53-.822-1.918-.547-.388-1.415-.582-2.602-.582a8.46 8.46 0 0 0-1.233.102 7.73 7.73 0 0 0-1.302.24c-.41.114-.742.263-.993.445v11.13h-2.26Zm29.068.103c-.913 0-1.632-.102-2.157-.308-.503-.205-.868-.57-1.096-1.096-.229-.525-.343-1.233-.343-2.123V7.877h-1.37V6.13h1.37V3.87c0-.411.035-.708.103-.89.069-.206.183-.332.343-.377.182-.069.445-.103.787-.103h1.987v3.63h3.219v1.747h-3.219v8.185c0 .89.091 1.53.273 1.918.183.365.617.547 1.302.547.228 0 .479-.022.753-.068.297-.046.503-.091.617-.137v1.335c-.137.023-.434.069-.891.137-.456.069-1.016.103-1.678.103Zm8.402-13.767v9.144c0 1.05.286 1.792.857 2.226.57.434 1.461.65 2.671.65 1.301 0 2.226-.228 2.774-.684.571-.457.856-1.188.856-2.192V6.13h1.781c.365 0 .65.023.856.069a.46.46 0 0 1 .411.308c.091.16.137.434.137.822v7.465c0 1.21-.183 2.204-.548 2.98-.365.753-1.05 1.313-2.055 1.678-.982.342-2.397.514-4.246.514-1.736 0-3.094-.149-4.076-.446-.959-.296-1.644-.799-2.055-1.506-.388-.73-.582-1.724-.582-2.98V7.33c0-.48.08-.8.24-.96.16-.159.479-.239.959-.239h2.02Zm8.699 1.199-.103-1.199h.719c.366 0 .64-.08.822-.24.206-.182.343-.4.411-.65a2.01 2.01 0 0 0 .137-.685V3.8h1.781v.685c0 .982-.331 1.713-.993 2.192-.639.48-1.564.696-2.774.65Zm-6.13-3.288L127.989 0l1.576 1.062-4.247 2.98h-1.404ZM142.415 20c-1.849 0-3.345-.183-4.486-.548-1.142-.365-1.964-1.039-2.466-2.02-.502-.982-.753-2.42-.753-4.316 0-1.963.251-3.458.753-4.486.502-1.05 1.324-1.758 2.466-2.123 1.141-.388 2.637-.582 4.486-.582.594 0 1.153.022 1.678.068.548.046 1.176.126 1.884.24.388.046.696.137.924.274.252.137.434.342.548.616.114.251.172.628.172 1.13-.274-.114-.674-.216-1.199-.308a17.77 17.77 0 0 0-1.678-.205 20.819 20.819 0 0 0-1.575-.069c-1.302 0-2.341.171-3.117.514-.753.32-1.29.856-1.61 1.61-.296.753-.445 1.792-.445 3.116s.149 2.374.445 3.15c.32.777.857 1.325 1.61 1.645.753.32 1.792.479 3.117.479.616 0 1.21-.023 1.78-.069a20.116 20.116 0 0 0 1.541-.24 13.3 13.3 0 0 0 1.131-.308v.925c0 .411-.229.73-.685.96-.457.204-1.073.341-1.85.41-.753.091-1.644.137-2.671.137Z" />
                            <path fill="#F7941D"
                                d="M86.17 38.024c0 5.677-.671 9.074-2.012 10.19C82.713 49.404 78.353 50 71.077 50c-5.322 0-8.814-.191-10.478-.574-2.089-.5-3.409-1.59-3.96-3.27C56.213 44.87 56 42.16 56 38.025c0-5.688.66-9.085 1.98-10.19C59.425 26.61 63.79 26 71.077 26c7.255 0 11.605.6 13.05 1.802 1.361 1.127 2.042 4.534 2.042 10.222Zm-23.138 0c0 2.977.332 4.715.998 5.215.675.489 3.024.733 7.047.733 4.043 0 6.397-.244 7.063-.733.675-.5 1.013-2.238 1.013-5.215 0-3.009-.338-4.758-1.013-5.247-.666-.489-3.01-.733-7.032-.733-4.043 0-6.403.244-7.079.733-.665.49-.997 2.238-.997 5.247ZM104.317 26c6.517 0 10.53.558 12.037 1.674 1.32.957 1.98 3.503 1.98 7.639h-7.063c0-1.35-.348-2.211-1.045-2.583-.873-.458-2.842-.686-5.909-.686-3.43 0-5.441.271-6.033.813-.593.542-.89 2.265-.89 5.167 0 2.87.297 4.582.89 5.135.592.542 2.603.813 6.033.813 3.108 0 5.047-.191 5.816-.574.779-.383 1.169-1.281 1.169-2.695h7.032c0 4.157-.639 6.703-1.918 7.639-1.507 1.105-5.54 1.658-12.099 1.658-6.558 0-10.524-.606-11.896-1.818-1.372-1.223-2.058-4.62-2.058-10.19 0-5.55.66-8.914 1.98-10.094C93.767 26.633 97.76 26 104.317 26Zm49.425 12.024c0 5.677-.671 9.074-2.012 10.19-1.444 1.19-5.805 1.786-13.081 1.786-5.322 0-8.814-.191-10.477-.574-2.089-.5-3.409-1.59-3.96-3.27-.426-1.286-.639-3.996-.639-8.132 0-5.688.66-9.085 1.98-10.19 1.444-1.223 5.81-1.834 13.096-1.834 7.255 0 11.605.6 13.05 1.802 1.362 1.127 2.043 4.534 2.043 10.222Zm-23.138 0c0 2.977.333 4.715.998 5.215.676.489 3.025.733 7.047.733 4.044 0 6.398-.244 7.063-.733.676-.5 1.014-2.238 1.014-5.215 0-3.009-.338-4.758-1.014-5.247-.665-.489-3.009-.733-7.032-.733-4.043 0-6.402.244-7.078.733-.665.49-.998 2.238-.998 5.247Zm28.579-11.689h17.182c3.741 0 6.21.468 7.405 1.403 1.487 1.148 2.23 3.62 2.23 7.416 0 3.763-.733 6.219-2.198 7.367-1.216.967-3.696 1.451-7.437 1.451h-10.15v5.71h-7.032V26.334Zm7.032 11.593h10.15c.831 0 1.46-.186 1.886-.558.509-.436.764-1.175.764-2.216 0-1.032-.255-1.776-.764-2.233-.426-.361-1.055-.542-1.886-.542h-10.15v5.55Z" />
                        </svg>
                    </a>
                    <div class="head_date">

                    </div>
                </div>

                <div class="head_ul">
                    <li class="nav-item topbar-user dropdown hidden-caret submenu">
                        <a class="dropdown-toggle profile-pic show" data-bs-toggle="dropdown" href="#"
                            aria-expanded="true">
                            {{-- <div class="avatar-sm">
                                <img src="" alt="..." class="avatar-img rounded-circle">
                            </div> --}}
                            <span class="profile-username">
                                <b style="font-weight: bold;" class="op-7">Hi,</b>
                                <span class="fw-bold">{{ session('authUser')->name }}</span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn user" style="display: none; background: bisque;"
                            data-bs-popper="static">
                            <div class="scroll-wrapper dropdown-user-scroll scrollbar-outer"
                                style="position: relative;">
                                <div class="dropdown-user-scroll scrollbar-outer scroll-content"
                                    style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 262.828px;">
                                    <li>
                                        <div class="user-box" style="display: flex;">
                                            <div class="avatar-lg" style="margin-right:10px">
                                                <img style="width: 50px;"
                                                    src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg"
                                                    alt="" class="avatar-img rounded">
                                            </div>
                                            <div class="u-text" style="line-height: 20px">
                                                <h4 style="margin: 0px; font-size: 16px">{{ session('authUser')->name }}</h4>
                                                <p class="text-muted" style="font-size:11px; margin: 0px ">{{
                                                    session('authUser')->email }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li >
                                        <a class="dropdown-item" data-toggle="modal" data-target="#profileModal">My
                                            Profile</a>

                                        <form id="logoutForm" action="{{ route('admin.logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                            Logout
                                        </a>

                                        <div class="modal fade" id="profileModal" tabindex="-1" role="dialog"
                                            aria-labelledby="profileModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="profileModalLabel">Thông tin</h5>

                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.staff.updateAdmin', ['id' => session('authUser')->id]) }}" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="new-user-name">Tên:</label>
                                                                <input type="text" class="form-control"
                                                                    id="new-user-name" name="name" value=" {{  session('authUser')->name ?? "" }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-user-email">Email:</label>
                                                                <input type="email" class="form-control"
                                                                    id="new-user-email" name="email" value=" {{  session('authUser')->email ?? "" }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-user-phone">Số điện
                                                                    thoại:</label>
                                                                <input type="text" class="form-control"
                                                                    id="new-user-phone" name="phone" value=" {{  session('authUser')->phone ?? "" }}">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="new-user-address">Địa chỉ:</label>
                                                                <input type="text" class="form-control"
                                                                    id="new-user-address" name="address" value=" {{  session('authUser')->address ?? "" }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                                            </div>
                                                    </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                </div>

                    </li>
                </div>

            </div>
            </ul>
            </li>
    </div>

    </div>
    <div class="header_menu " id='header_fixed'>
        <div class="container header_menu_item">
            <div class="icon_menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M16.7 5.68333L11.9 2.325C10.5917 1.40833 8.58333 1.45833 7.32499 2.43333L3.14999 5.69167C2.31666 6.34167 1.65833 7.675 1.65833 8.725V14.475C1.65833 16.6 3.38333 18.3333 5.50833 18.3333H14.4917C16.6167 18.3333 18.3417 16.6083 18.3417 14.4833V8.83333C18.3417 7.70833 17.6167 6.325 16.7 5.68333ZM14.0667 11.1667C14.0667 11.4917 13.8083 11.75 13.4833 11.75C13.1583 11.75 12.9 11.4917 12.9 11.1667V11.0167L10.6333 13.2833C10.5083 13.4083 10.3417 13.4667 10.1667 13.45C9.99999 13.4333 9.84166 13.3333 9.74999 13.1917L8.89999 11.925L6.91666 13.9083C6.79999 14.025 6.65833 14.075 6.50833 14.075C6.35833 14.075 6.20833 14.0167 6.09999 13.9083C5.87499 13.6833 5.87499 13.3167 6.09999 13.0833L8.58333 10.6C8.70833 10.475 8.87499 10.4167 9.04999 10.4333C9.22499 10.45 9.38333 10.5417 9.47499 10.6917L10.325 11.9583L12.0833 10.2H11.9333C11.6083 10.2 11.35 9.94167 11.35 9.61667C11.35 9.29167 11.6083 9.03333 11.9333 9.03333H13.4833C13.5583 9.03333 13.6333 9.05 13.7083 9.075C13.85 9.13333 13.9667 9.25 14.025 9.39167C14.0583 9.46667 14.0667 9.54167 14.0667 9.61667V11.1667Z"
                        fill="white" />
                </svg>
            </div>
            <ul class="ul_menu">
                <li class="menu-main-hover">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2">
                                <path d="M29 16c0 3-5.82 9-13 9S3 19 3 16s5.82-9 13-9s13 6 13 9Z" />
                                <path d="M21 16a5 5 0 1 1-10 0a5 5 0 0 1 10 0Z" />
                            </g>
                        </svg>
                        Tổng quan
                    </a>
                </li>
                <li class="menu-main-hover">
                    <a href="">Hàng hóa</a>
                    <ul class="submenu">
                        <li><a href="{{route('admin.category.index')}}">Danh mục</a></li>
                        <li><a href="{{route('admin.product.store')}}">Sản phẩm</a></li>
                    </ul>
                </li>
                <li class="menu-main-hover">
                    <a href="">Giao dịch</a>
                </li>
                <li class="menu-main-hover">
                    <a href="">Đối tác</a>
                    <ul class="submenu">
                        <li><a href="">Khách hàng</a></li>
                        <li><a href="{{route('admin.brand.store')}}">Thương hiệu</a></li>
                    </ul>
                </li>
                <li class="menu-main-hover">
                    <a href="{{route('admin.staff.store')}}">Nhân viên</a>

                </li>
            </ul>
            <div class="icon_menu_mobi">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div>


        </div>
    </div>

    </header>
    </div>
    <style scoped>
        .fixed-header {
            position: fixed;
            top: -8px;
            z-index: 100;
        }

        .submenu {
            z-index: 9900;
            width: 150px;
        }

        .ul_menu>li {
            padding: 0px 40px;
        }

        .user {
            width: 220px;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownToggle = document.querySelector('.dropdown-toggle');
            var dropdownMenu = document.querySelector('.dropdown-menu');

            dropdownToggle.addEventListener('click', function(event) {
                event.preventDefault();

                if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                    // Ẩn tất cả các dropdown-menu khác trước khi hiển thị dropdown-menu hiện tại
                    var allDropdowns = document.querySelectorAll('.dropdown-menu');
                    allDropdowns.forEach(function(menu) {
                        menu.style.display = 'none';
                    });

                    // Hiển thị dropdown-menu hiện tại
                    dropdownMenu.style.display = 'block';
                } else {
                    dropdownMenu.style.display = 'none';
                }
            });

            // Đóng dropdown-menu khi click bên ngoài
            document.addEventListener('click', function(event) {
                var isClickInside = dropdownToggle.contains(event.target) || dropdownMenu.contains(event.target);

                if (!isClickInside) {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    </script>
