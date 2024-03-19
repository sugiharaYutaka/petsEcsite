@include('layouts.shopHeader')
<link href="{{asset('assets/css/product.css')}}" rel="stylesheet">
<div class="container-fluid">
    <div class="row row-margin pt-5">
        <div class="col-sm-12 col-md-6 col-lg-6">
            
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 border fit">
                        <div class="image-wrap">
                            <img src="{{asset("assets/image/dish_test.jpg")}}">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <span class="d-flex justify-content-center">鹿肉のソテー</span>
                        <br>
                        <span class="d-flex justify-content-start">在庫あり</span>
                        <br>
                        <span class="d-flex justify-content-start">原材料：</span>
                        <span>鹿肉600g</span>
                        <br>
                        <span class="d-flex justify-content-end">¥1500</span>
                        <br>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary mx-5 w-100">カートに追加</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>