<head>
    <script src="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://yu.jquery.com/jquery-3.5.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('index.css')}}" rel="stylesheet">
</head>


<body>
    <div class="header fixed-top">
        <div class="container-fluid">
            <div class="row border">
                <nav class="navbar navbar-expand-lg navbar-light bg-color-primary p-0" style="height:75px">
                    <div class="col-4">
                        <button type="button" style="border: none;" class="btn">
                            <a href="{{ route('home') }}" class="no-underline">
                                <img class="logo" src="{{asset('assets/image/logo.png')}}">
                                <span class="txt-white letter-space-2 h2">うちの子の料理番</span>
                            </a>
                        </button>
                    </div>

                    <div class="offset-3 col-1 h-100 border-start d-flex justify-content-center d-flex align-items-center">
                        <a href="{{ route('home') }}" class="no-underline">
                            <button type="button" class="btn txt-white letter-space-2 h2">ご挨拶</button>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start d-flex justify-content-center d-flex align-items-center">
                        <a href="{{ route('home') }}" class="no-underline">
                            <button type="button" class="btn txt-white letter-space-2 h2">こだわり</button>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start d-flex justify-content-center d-flex align-items-center">
                        <a href="{{ route('home') }}" class="no-underline">
                            <button type="button" class="btn txt-white letter-space-2 h2">サービス</button>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start d-flex justify-content-center d-flex align-items-center">
                        <a href="{{ route('home') }}" class="no-underline">
                            <button type="button" class="btn txt-white letter-space-2 h2">販売</button>
                        </a>
                    </div>
                    <div class="col-1 h-100 border-start d-flex justify-content-center d-flex align-items-center">
                        <a href="{{ route('home') }}" class="no-underline">
                            <button type="button" class="btn txt-white letter-space-2 h2">お問合せ</button>
                        </a>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div>
 

</body>