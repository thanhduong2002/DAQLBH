<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <!-- Link font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Css -->
    <link rel="stylesheet" href="{{ asset('/public/assets/css/ab1.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="fruits">
        <!-- Start Header -->
        <div class="fruits__header">
            <!-- Start Menu -->
            <div class="fruits__menu">
                <div class="fruits-menu__logo">
                    <h2 class="fruits-menu__logo-text">COFFEE</h2>
                </div>
                <ul class="fruits-menu__list">
                    <li><a href="{{ asset('admin')}}">Trang Chủ</a></li>

                    <li>
                        <div class="fruits-menu__dropdown">
                            <a href="{{ asset('hang-hoa')}}">Quản Lý Hàng Hóa <i class="fa-solid fa-caret-down"></i></a>
                            <div class="fruits-menu__dropdown-list">
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{ asset('hang-hoa')}}" class="fruits-menu__dropdown-text">Hàng hóa</a>
                                </div>
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{ asset('loai-hang')}}" class="fruits-menu__dropdown-text">Loại hàng</a>
                                </div>
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{ asset('danh-muc')}}" class="fruits-menu__dropdown-text">Danh mục</a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fruits-menu__dropdown">
                            <a href="{{ asset('khach-hang')}}">Quản Lý Khách Hàng <i class="fa-solid fa-caret-down"></i></a>
                            <div class="fruits-menu__dropdown-list">
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{ asset('khach-hang')}}" class="fruits-menu__dropdown-text">Khách hàng</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @guest
                    <li>
                        <div class="fruits-menu__dropdown">

                            <a href="#"> Tài khoản <i class="fa-solid fa-caret-down"></i></a>
                            <div class="fruits-menu__dropdown-list">
                                @if (Route::has('login'))
                                <div class="fruits-menu__dropdown-item">
                                    <a class="fruits-menu__dropdown-text" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                                @endif
                                @if (Route::has('register'))
                                <div class="fruits-menu__dropdown-item">
                                    <a class="fruits-menu__dropdown-text" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </li>

                    @else
                    <li>
                        <div class="fruits-menu__dropdown">

                            <a href="#">{{ Auth::user()->name }}<i class="fa-solid fa-caret-down"></i></a>

                            <div class="fruits-menu__dropdown-list">
                                <div class="fruits-menu__dropdown-item">
                                    <a class="fruits-menu__dropdown-text" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>


                            </div>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
            <!-- End Menu -->
        </div>
    </div>