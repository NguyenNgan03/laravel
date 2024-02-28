<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')-My Website</title>
    @yield('css')
</head>
<body>
    <header>
        <h1>HEADER</h1>
    </header>
    <main>
        <aside>
            @section('sidebar')
            @include('clients.blocks.sidebar')
            @show
        </aside>
        <div class="content">
                @yield('content')
            </div>
    </main>

    <footer>
        <h1>FOOTER</h1> 
    </footer>
    @yield('js')
</body>
</html>