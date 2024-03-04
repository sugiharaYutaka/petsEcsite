<head>
    <script src="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://yu.jquery.com/jquery-3.5.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('index.css')}}" rel="stylesheet">
    <script src="{{asset('index.js')}}"></script>
</head>


<div class="header-padding">
    <div class="fixed-top">
        <div class="container-fluid">
            <div class="row bg-color-primary header">
                <nav class="navbar navbar-expand-lg p-0 ">
                    <div class="col-4">
                        <a href="{{ route('home') }}" class="no-underline">
                            <img class="logo" src="{{asset('assets/image/logo.png')}}">
                            <span class="txt-white letter-space-2 h2">うちの子の料理番</span>
                        </a>
                    </div>

                    <div class="offset-3 col-1 h-100 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">ご挨拶</span>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">こだわり</span>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">サービス</span>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">販売</span>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">お問合せ</span>
                        </a>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div>
</div>
