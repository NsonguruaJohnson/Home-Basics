<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codecourse</title>
</head>
<body>
    <div>
        @include('layouts.partials._nav')
        
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>