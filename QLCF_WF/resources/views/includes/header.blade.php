<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE COFFEE HOUSE</title>
    <!-- Link font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Link Css -->
    <!-- <link rel="stylesheet" href="{{ asset('/public/assets/css/app.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/ap5.css')}}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                <ul class="fruits-menu__list" style="margin-left:12px">
                    <li><a href="{{asset('home')}}">Trang Chủ</a></li>
                    <li>
                        <div class="fruits-menu__dropdown">
                            <a href="{{asset('ca-phe-truyen-thong')}}">Cà Phê Truyền Thống <i class="fa-solid fa-caret-down"></i></a>
                            <div class="fruits-menu__dropdown-list">
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{asset('the-coffee-house-b2')}}" class="fruits-menu__dropdown-text">THE COFFEE HOUSE B2 </a>
                                </div>
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{asset('k6-pha-phin')}}" class="fruits-menu__dropdown-text">K6 PHA PHIN </a>
                                </div>
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{asset('m5-pha-phin')}}" class="fruits-menu__dropdown-text">M5 PHA PHIN</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fruits-menu__dropdown">
                            <a href="{{asset('ca-phe-tuoi')}}">Cà Phê Tươi <i class="fa-solid fa-caret-down"></i></a>
                            <div class="fruits-menu__dropdown-list">
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{asset('/m1-pha-phin')}}" class="fruits-menu__dropdown-text">M1 PHA PHIN</a>
                                </div>
                                <div class="fruits-menu__dropdown-item">
                                    <a href="{{asset('m6-pha-may')}}" class="fruits-menu__dropdown-text">M6 PHA MÁY</a>
                                </div>
                            </div>
                    </li>
                    <li><a href="{{asset('lien-he')}}">Liên Hệ</a></li>
                    <li><a href="{{asset('gioi-thieu')}}">Giới Thiệu</a></li>
                    @guest
                    <li>


                        <div class="fruits-menu__dropdown">

                            <a href="#">Tài khoản <i class="fa-solid fa-caret-down"></i></a>
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
                <div class="fruits-menu__search">
                    <form role="search" method=get id="searchform" action="{{asset('/search')}}">
                        <input type="text" value="" name="key" class="fruits-menu__search-input" placeholder="Tìm kiếm">
                        <button class="fruits-menu__search__button" type="submit" id="searchsubmit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
<!--  -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->
                <!-- cart -->
                <div class="fruits-menu__cart">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 12px;padding: 10px 20px;border-radius:10px;">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ Hàng  <span class="badge badge-pill badge-danger">({{ count((array) session('cart')) }})</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:20px">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Giỏ hàng</h2>
                                    @php $total = 0 @endphp
                                    @foreach((array) session('cart') as $mahh => $details)
                                    @php $total += $details['dongia'] * $details['quantity'] @endphp
                                    @endforeach

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    @if(session('cart'))
                                    @foreach(session('cart') as $mahh => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 ">
                                            <img width=50px height=50px src="{{ asset($details['anh']) }}" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p style="    font-weight: bold;">{{ $details['tenhh'] }}</p>
                                            <span class="price text-info">{{ number_format($details['dongia'],0) }}đ</span> <span class="count"> Số lượng:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <p class="h3 text-center text-secondary">Cart is null</p>
                                    @endif


                                </div>
                                <div class="modal-footer">
                                    <h3>Total: <span class="text-info" style="font-size:20px">{{ number_format($total,0) }}đ</span></h3>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size:20px">Close</button>
                                    @if(session('cart'))
                                    <a href="{{ asset('cart') }}" class="btn btn-primary btn-block" style="font-size:20px">View all</a>
                                    <button style="font-size:20px" class="btn btn-danger" style="color:#fff;    "><a style=" text-decoration: none;color:#fff" href="{{asset('/thanh-toan/'.$total)}}" >Thanh toán</a></button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endcart -->
                
            </div>
            <!-- End Menu -->
            
        </div>
        
    </div>
    <!--  -->

    <!--  -->