<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="am-page-warrper">        
        <main class="am-content-warrper container" dir="rtl">
            <div class="row">
                <section class="am-billing-details col-xl-6 col-md-12">
                    <div class="shipping card p-3">
                        <h4 style="padding: 0.5rem;">عنوان الشحن</h4>
                        <div class="form-group mt-2">
                            <label for="" style="color: #3d3d3d;">الاسم بالكامل</label>
                            <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                          <label for="" style="color: #3d3d3d;">رقم الهاتف</label>
                          <input type="number" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                          <label for="" style="color: #3d3d3d;">رقم الهاتف اخر مرجعي</label>
                          <input type="number" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                          <label for="" style="color: #3d3d3d;">الايميل</label>
                          <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                          <label for="" style="color: #3d3d3d;">العنوان</label>
                          <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        </div>
                    </div>
                   
                    <div class="payment-method p-3 mt-3" style="background-color: #d7edff;">
                        <h4>طريقة الدفع</h4>
                        <div style="border: 1px solid rgb(41, 48, 156); border-radius: 4px; margin-top: 1rem;">
                            <div class="">
                                <label class="" style="margin-right: 1rem;">
                                    <input class="" type="radio" name="" id="" value="checkedValue" style="margin-top: 3px;">
                                    بطاقة بنكية
                                </label>
                                <img src="assets/imgs/visa.png" alt="">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                          <label for="">رقم بطاقة الدفع</label>
                          <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="">تاريخ الانتهاء</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-3">
                                <label for=""></label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-3">
                                <label for="">الرقم السري</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div  style="border: 1px solid rgb(130, 130, 134); border-radius: 4px; margin-top: 1rem;">
                                <label for="">
                                    <input type="radio" name="" id="">
                                    باي بال
                                </label>
                            <img src="assets/imgs/paypal_horizontal_large.png" alt="">
                        </div>
                    </div>
                </section>
                
               
                <section class="col-md-12 col-xl-6 mt-3 mt-xl-0">
                    <div class="card">
                        <div class="p-3">
                            <h4>تفاصيل الطلب</h4>
                            <hr>
                            <div class="d-flex">
                                <div class="am-title" style="width: 50%;"><p>كمبيوتر كامل</p></div>
                                <div class="am-count" style="width: 20%;"><p>#2</p></div>
                                <div class="am-price" style="width: 30%;"><p style="text-align: left;">200567</p></div>
                            </div>
                            <div class="d-flex">
                                <div class="am-titl" style="width: 50%;"><p>كمبيوتر كامل</p></div>
                                <div class="am-count" style="width: 20%;"><p>#2</p></div>
                                <div class="am-price" style="width: 30%;"><p style="text-align: left;">200567</p></div>
                            </div>
                            <div class="d-flex">
                                <div class="am-titl" style="width: 50%;"><p>كمبيوتر كامل</p></div>
                                <div class="am-count" style="width: 20%;"><p>#2</p></div>
                                <div class="am-price" style="width: 30%;"><p style="text-align: left;">200567</p></div>
                            </div>
                            <div class="d-flex">
                                <div class="am-titl" style="width: 50%;"><p>كمبيوتر كامل</p></div>
                                <div class="am-count" style="width: 20%;"><p>#2</p></div>
                                <div class="am-price" style="width: 30%;"><p style="text-align: left;">200567</p></div>
                            </div>
                            <hr>
                            <p class="am-subtotal" style="text-align: left; font-weight: 600; margin: 0;">المجموع</p>
                            <p class="am-subtotal-value" style="text-align: left; margin: 0;">200000</p>
                            <p class="am-subtotal-curr" style="text-align: left; margin: 0;">جنيه</p>
                            
                        </div>
                    </div>
                </section>
                <section class="col-12 mt-2">
                    <p class="m-0">بضغطك علي هذا الزر تعتبر موافق علي <a href="#">الشروط والاحكام</a></p>
                    <div class="mt-2"><a type="button" name="paybtn" id="paybtn" class="btn btn-primary btn-block">الدفع الان</a></div>
                </section>
            </div>
        </main>
        
    </div>
</body>
</html>