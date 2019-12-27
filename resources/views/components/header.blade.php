

	<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ Route('home')}}"><img src="{{ asset('assetshome/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ Route('home')}}">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                    @if(isset($categories))
                                    @foreach ($categories as $category)
                                        <li class="nav-item"><a class="nav-link" href="{{ route('get.list.product',[$category->c_slug,$category->id])}}" title="{{ $category->c_name}}">{{ $category->c_name}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                @if(Auth::check())
                                <li class="nav-item"><a class="nav-link" href="{{ Route('user.update.info')}}">Sửa thông tin</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('user.update.password')}}">Thay đổi mật khẩu</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracking.html">Sản phẩm yêu thích</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('get.logout.user')}}">Thoát</a></li>
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{ Route('get.register')}}">Đăng ký</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('get.login')}}">Đăng nhập</a></li>
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ Route('get.contact') }}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="{{ route('get.list.shopping.cart')}}" class="cart"><span class="ti-bag"> ({{ Cart::count()}})</span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" action="{{ Route('get.product.list')}}" method="GET">
                <input type="text" class="form-control" id="search_input" name="k" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>


