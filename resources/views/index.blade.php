<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="am-page-warrper">

        @include("inc.header")

        <div class="am-slideshow" style="max-width:1200px; margin: 50px auto 0; position: relative;">
            <div class="am-slide-item" style="height: 640px;  text-align: center;">
                <img class="img-fluid" style="height: 100%;" src="assets/imgs/71EeRjc5HPL._SL1280_.jpg">
            </div>
            <div class="am-slide-item" style="height: 640px;  text-align: center;">
                <img class="img-fluid" style="height: 100%;" src="assets/imgs/1611847352894_0..webp">
            </div>
            <div class="am-slide-item" style="height: 640px;  text-align: center;">
                <img class="img-fluid" style="height: 100%;" src="assets/imgs/1611847353158_1..webp">
            </div>

            <button class="am-button am-display-left" style="position: absolute; top: 50%; padding: 5px 12px; color: black; background-color: rgb(204, 197, 197); outline: none;" onclick="plusDivs(-1)">&#10094;</button>
            <button class="am-button am-display-right" style="position: absolute; top: 50%; left: 0; padding: 5px 12px; color: black; background-color: rgb(196, 190, 190); outline: none;" onclick="plusDivs(+1)">&#10095;</button>
        </div>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("am-slide-item");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex-1].style.display = "block";
            }
        </script>

        <!-- start content -->
        <div class="content-warrper">

            <!-- start section product list -->
            <div class="am_products_box" style="margin-top: 50px;">

                <div class="am-product-list_title" style="display: flex; justify-content: space-between; align-items: center;">
                    <h2 class="cat-section-title">الكمبيوتر الكامل</h2>
                    <small style="margin-left: 8px;"><a style="text-decoration: none; color: #333;" href="#">مشاهدة الكل</a></small>
                </div>
                <div class="am_product_list" style="display: flex; justify-content: space-around;">
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end section product list -->

            <!-- start baner -->
            <div style="margin-top: 50px">
                <a href="product-details.html"><img style=" max-width: 100%;" src="assets/imgs/V259539351_IN_PC_Laptops_Jupiter_WF_770_combo.jpg" alt=""></a>
            </div>
            <!-- end baner -->

            <!-- start section product list -->
            <div class="am_products_box" style="margin-top: 50px;">
                <div class="am-product-list_title" style="display: flex; justify-content: space-between; align-items: center;">
                    <h2 class="cat-section-title">اللابتوب</h2>
                    <small style="margin-left: 8px;"><a style="text-decoration: none; color: #333;" href="#">مشاهدة الكل</a></small>
                </div>
                <div class="am_product_list" style="display: flex; justify-content: space-around;">
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="am_card_box">
                        <div class="card am_card">
                            <a href="product-details.html"><img src="assets/imgs/1611847352894_0..webp" class="img-fluid" alt=""></a>
                            <div class="am_card_body">
                                <a class="title" href="product-details.html">
                                    كمبيوتر dell core i9 10700 زاكرة 64 قيقابايت
                                </a>
                                <p class="price">
                                    <span style="font-weight: 700;">20000 جنيه</span>
                                    <span style="text-decoration: line-through; color: #dd0000;">30000 جنيه</span>
                                </p>
                                <p class="rate" style="color: rgb(0, 189, 16);">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half" aria-hidden="true"></i>
                                     <span style="color: black;">(102)</span>
                                </p>
                                <p class="desc">وصف النص المرافق </p>
                                <p><button class="add_to_cart">اضافة الي السلة</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section product list -->

            <!-- start section -->
            <div class="mt-5">
                <div class="am-product-list_title" style="display: flex; justify-content: space-between; align-items: center;">
                    <h2 class="cat-section-title">منتجات مميزة</h2>
                    <small style="margin-left: 8px;"><a style="text-decoration: none; color: #333;" href="#">مشاهدة الكل</a></small>
                </div>
                <div class="" style="display: flex;">
                    <div class="am-box-4" style="display: inline-block; width: 25%;">
                        <div  style="padding: 8px;">
                            <div style="text-align: center;"><img src="assets/imgs/1611847352894_0..webp" alt="" style="width: 60%;"></div>
                            <div><a href="#" style="text-decoration: none; color: #464646;">لنوفو Thinkpad كور i7 11800k 64GB زاكرة 12 تيرابايت  gtx 16GB شاشة 27 بوصة</a></div>
                            <div>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                 34
                            </div>
                            <div style="color: rgb(110, 110, 110);"><small>متوفر</small></div>
                        </div>
                    </div>
                    <div class="am-box-4" style="display: inline-block; width: 25%;">
                        <div  style="padding: 8px;">
                            <div style="text-align: center;"><img src="assets/imgs/1611847352894_0..webp" alt="" style="width: 60%;"></div>
                            <div><a href="#" style="text-decoration: none; color: #464646;">لنوفو Thinkpad كور i7 11800k 64GB زاكرة 12 تيرابايت  gtx 16GB شاشة 27 بوصة</a></div>
                        </div>
                    </div>
                    <div class="am-box-4" style="display: inline-block; width: 25%;">
                        <div  style="padding: 8px;">
                            <div style="text-align: center;"><img src="assets/imgs/1611847352894_0..webp" alt="" style="width: 60%;"></div>
                            <div><a href="#" style="text-decoration: none; color: #464646;">لنوفو Thinkpad كور i7 11800k 64GB زاكرة 12 تيرابايت  gtx 16GB شاشة 27 بوصة</a></div>
                        </div>
                    </div>
                    <div class="am-box-4" style="display: inline-block; width: 25%;">
                        <div  style="padding: 8px;">
                            <div style="text-align: center;"><img src="assets/imgs/1611847352894_0..webp" alt="" style="width: 60%;"></div>
                            <div><a href="#" style="text-decoration: none; color: #464646;">لنوفو Thinkpad كور i7 11800k 64GB زاكرة 12 تيرابايت  gtx 16GB شاشة 27 بوصة</a></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end section -->

        </div>
        <!-- end content -->

        @include("inc.footer")
    </div>
    <script src="assets/css/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <script src="assets/css/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>
