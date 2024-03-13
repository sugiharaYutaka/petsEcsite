@include('layouts.shopHeader')


<link href="{{asset('slide_slick.css')}}" rel="stylesheet">

<body>
    <div class="slider py-5">
        <div class="d-flex justify-content-center mb-2">
            <a href="">
                <div class="wrap-slide">
                    <img class="slide-img" src="{{asset("assets/image/souryo.jpg")}}">
                    <span class="d-flex justify-content-center">法要膳</span>
                </div>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="">
                <div class="wrap-slide">
                    <img class="slide-img" src="{{asset("assets/image/heart_dog.jpg")}}">
                    <span class="d-flex justify-content-center">アレルギー対応食</span>
                </div>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="">
                <div class="wrap-slide">
                    <img class="slide-img" src="{{asset("assets/image/cake_dog.jpg")}}">
                    <span class="d-flex justify-content-center">記念日</span>
                </div>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="">
                <div class="wrap-slide">
                    <img class="slide-img" src="{{asset("assets/image/party_dog.jpg")}}">
                    <span class="d-flex justify-content-center" style="letter-spacing: 0;">パーティーオードブル</span>
                </div>
            </a>
        </div>
    </div>
    <!-- shop !-->
    <div class="container-fluid">
        <div class="row my-large row-margin">

        @for($i = 0; $i < 5; $i++)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3 fit">
                <a href="" class="shop">
                    <div class="product">
                        <div class="mycard-top">
                            <img src="{{asset("assets/image/dish_test.jpg")}}">
                        </div>
                        <div class="mycard-bot p-3">
                            <span class="stock-true">在庫あり</span><br>
                            <span class="d-flex justify-content-center my-2 letter-space-2 h3">鹿肉のソテー</span>
                            <span class="d-flex justify-content-end">¥1,500</span>
                        </div>
                    </div>
                </a>
            </div>
        @endfor

        <div class="col-sm-6 col-md-4 col-lg-3 mb-3 fit">
                <a href="" class="shop">
                    <div class="product">
                        <div class="mycard-top">
                            <img src="{{asset("assets/image/dish1.jpg")}}">
                        </div>
                        <div class="mycard-bot p-3">
                            <span class="stock-true">在庫あり</span><br>
                            <span class="d-flex justify-content-center my-2 letter-space-2 h3">鹿肉のソテー</span>
                            <span class="d-flex justify-content-end">¥1,500</span>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('slide.js')}}"></script>

@include('layouts.footer')
