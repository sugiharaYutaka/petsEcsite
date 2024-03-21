@include('layouts.shopHeader')
<link href="{{asset('assets/css/product.css')}}" rel="stylesheet">
<div class="container-fluid pt-5">
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
                        <div class="mx-5">
                            <div class="dish_name">
                                <span>鹿肉のソテー</span>
                            </div>
                            <div class="stock stock-true">
                                <span>在庫あり</span>
                            </div>
                            <div class="ingredient">
                                <span>原材料：</span>
                                <span class="ingredients">鹿肉600g</span>
                            </div>

                            <div class="price">
                                <span>¥1500</span>
                                <span class="price-tax">税込</span>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="option">
                            <span class="option-name">数量&emsp;&emsp;</span>
                            <select class="form-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="option">
                            <span class="option-name">柔らかさ</span>
                            <select class="form-select">
                                <option value="normal">普通</option>
                                <option value="soft">柔らかい</option>
                            </select>
                        </div>
                        <div class="option">
                            <span class="option-name">刻み食&emsp;</span>
                            <select class="form-select">
                                <option value="no">無し</option>
                                <option value="yes">有り</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary add-cart">カートに追加</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('layouts.footer')
