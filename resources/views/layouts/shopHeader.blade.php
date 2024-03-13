<head>
    <script src="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://yu.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('index.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/header.css')}}" rel="stylesheet">
    <script src="{{asset('index.js')}}"></script>
</head>


<div class="header-padding">
    <div class="fixed-top">
        <div class="container-fluid">
            <div class="row bg-color-primary header">
                <nav class="navbar navbar-expand-lg p-0 ">
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a href="{{ route('home') }}" class="no-underline">
                            <img class="logo" src="{{asset('assets/image/logo.png')}}">
                            <span class="txt-white letter-space-2 h2">うちの子の料理番</span>
                        </a>
                    </div>

                    <div class="col-6 d-flex align-items-center">
                        <form action="{{ route('home') }}" method="POST" class="form-contorl mx-5 w-100">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="商品検索" aria-label="Search" name="query">
                                <button type="submit" class="form-contorl btn btn-light border"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="offset-1 col-1 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">ログイン</span>
                        </a>
                    </div>
                    <div class="col-1 border-start">
                        <a href="{{ route('home') }}" class="header-btn no-underline">
                            <span class="txt-white h2 underline d-flex justify-content-center align-items-center">新規登録</span>
                        </a>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div>
</div>
