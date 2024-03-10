@include('layouts.shopHeader')

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<link href="{{asset('slide_slick.css')}}" rel="stylesheet">

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <ul class="slider">
                    <li class="d-flex justify-content-center"><img class="slide-img" src="{{asset("assets/image/dish1.JPG")}}"></li>
                    <li class="d-flex justify-content-center"><img class="slide-img" src="{{asset("assets/image/dish2.JPG")}}"></li>
                    <li class="d-flex justify-content-center"><img class="slide-img" src="{{asset("assets/image/dish3.JPG")}}"></li>
                    <li class="d-flex justify-content-center"><img class="slide-img" src="{{asset("assets/image/dish2.JPG")}}"></li>
                    <li class="d-flex justify-content-center"><img class="slide-img" src="{{asset("assets/image/dish3.JPG")}}"></li>
                </ul>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4 mx-5 my-5">
                <div class="product border">
                    
                </div>
            </div>
        </div>
    </div>
</body>

@include('layouts.footer')
