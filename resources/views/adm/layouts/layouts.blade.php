<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('adm/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{asset('adm/css/style.css')}}" rel="stylesheet">
    @yield('style')
    <title>Admin Alma Residence</title>
</head>
<body>
    <div id="wrapper">
        
        @include('adm.layouts.navigation')
        
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-outline-secondary btn-sm rounded-0" id="menu-toggle"><i class="bi bi-list"></i></a>
                    </div>
                </div>
            </div>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
    
    <script
    src="https://code.jquery.com/jquery-3.6.1.slim.js"
    integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
    crossorigin="anonymous"></script>
    <script src="{{asset('adm/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adm/js/script.js')}}"></script>
    @yield('javascript')

</body>
</html>