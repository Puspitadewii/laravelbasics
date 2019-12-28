<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widh,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{config('app.name')}}</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container py-5">
      @yield('content')
    </div>
</body>
</html>