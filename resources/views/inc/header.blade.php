{{-- <header>
    <nav class="top-nav" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="mobile-ic d-block d-xl-none"><i class="fa fa-list" aria-hidden="true"></i></div>
        <div class="logo"><img src="assets/imgs/ameen_logo_trans_500.png" alt=""  height="80px"></div>
        <div class="am-search-box" style="position: relative; height: 45px;">
            <input type="text" name="" id="" style="width: 420px; height: 45px; border-radius: 22.5px; padding: 0 23px 0 23px; outline: none;">
            <button style="position: absolute; left: 0; height: 45px; padding: 0 12px;  border-top-left-radius: 22.5px; border-bottom-left-radius: 22.5px;">بحث</button>
        </div>
        <div class="am-notf-menu" style="margin-left: 30px;">
            <div style="display: inline-block; margin-right: 5px;">
                <a href="#" style="text-decoration: none; color: #fff; font-size: 1.2rem;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </div>

            <div style="display: inline-block; margin-right: 5px;">
                <a href="#" style="text-decoration: none; color: #fff; font-size: 1.2rem;"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
        </div>

    </nav>
    <nav class="sec-nav">
        <div class="main-menu" style="border-bottom: 1px solid #ccc;">
            <div class="main-menu-item" style="display: inline-block;">
                <a style="text-decoration: none; color: #333; padding: 4px 16px;" href="/index">الرئيسية</a>
            </div>
            <div class="main-menu-item" style="display: inline-block;">
                <a style="text-decoration: none; color: #333; padding: 4px 16px;" href="/products">المنتجات</a>
            </div>
            <div class="main-menu-item" style="display: inline-block;">
                <a style="text-decoration: none; color: #333; padding: 4px 16px;" href="/about">اتصل بنا</a>
            </div>
        </div>
    </nav>
</header> --}}
<header class="header">
    {{-- <nav class="navbar navbar navbar-expand-lg fixed-top py-3 navbar-dark" style="background-color: #e3f2fd;"> --}}
    <nav class="navbar navbar navbar-expand-lg fixed-top py-3 navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand text-uppercase font-weight-bold">
                <img src="assets/imgs/ameen_logo_trans_500.png" alt=""  height="80px">
                <span>متجرنا</span>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse d-flex">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active"><a href="/index" class="nav-link text-uppercase font-weight-bold">الرئيسية <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="/index" class="nav-link text-uppercase font-weight-bold">اتصل بنا</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link text-uppercase font-weight-bold">اتصل بنا</a></li>
                    <li class="nav-item"><a href="/products" class="nav-link text-uppercase font-weight-bold">اتصل بنا</a></li>
                    <li class="nav-item"><a href="/products" class="nav-link text-uppercase font-weight-bold">المنتجات</a></li>
                </ul>
                {{-- <div class="am-search-box" style="position: relative; height: 45px;">
                    <input type="text" name="" id="" style="width: 420px; height: 45px; border-radius: 22.5px; padding: 0 23px 0 23px; outline: none;">
                    <button style="position: absolute; left: 0; height: 45px; padding: 0 12px;  border-top-left-radius: 22.5px; border-bottom-left-radius: 22.5px;">بحث</button>
                </div> --}}
                <div class="am-notf-menu me-auto" style="margin-left: 30px;">
                    <div style="display: inline-block; margin-right: 5px;">
                        <a href="#" style="text-decoration: none; color: #fff; font-size: 1.2rem;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>

                    <div style="display: inline-block; margin-right: 5px;">
                        <a href="#" style="text-decoration: none; color: #fff; font-size: 1.2rem;"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    $(function () {
        $(window).on('scroll', function () {
            if ( $(window).scrollTop() > 10 ) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
</script>
