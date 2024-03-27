<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang web của tou</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('asserts/clients/css/bootstrap.min.css') }}">
    <style type="text/css">
        @yield('css');
    </style>
</head>

<body>
    @include('client.blocks.header')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <aside>
                        @section('sidabar')
                        @include('client.blocks.sidebar')
                        @show
                    </aside>
                </div>
                <div class="col-8">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('client.blocks.footer')
    <script src="{{ asset('asserts/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asserts/clients/js/custome.js') }}"></script>
    <script type="text/javascript" src='https://code.jquery.com/jquery-3.7.1.min.js'></script>
    @stack('scripts');
</body>

</html>