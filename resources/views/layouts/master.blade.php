<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}" />
    <script src="{{asset('dropify/dist/js/dropify.min.js')}}"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Dashboard</h1>
                <div class="col-sm-3">
                    <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                        <li class="brand-nav @isset($page) @if ($page=='books') active  @endif @endisset">
                            <a href="{{url('/books')}}">Books</a></li>
                        <li class="brand-nav @isset($page) @if ($page=='authors') active  @endif @endisset">
                            <a href="{{url('/authors')}}">Authors</a></li>
                        <li class="brand-nav @isset($page) @if ($page=='categories') active  @endif @endisset">
                            <a href="{{url('/categories')}}" >Categories</a></li>
                        <li class="brand-nav @isset($page) @if ($page=='artiles') active  @endif @endisset">
                                <a href="{{route('articles.index')}}" >Articles</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            @yield('action-btn')
                        </div>
                    </div>
                    <div class="tab-content mt-5">
                        <div class="tab-panel">
                            @include('include.message')
                            @yield('content')
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.dropify').dropify();
        });
    </script>
</body>
</html>