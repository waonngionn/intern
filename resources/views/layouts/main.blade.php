<html>
<head>
    <meta charset='utf-8'>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/layouts/main.css')}}">
    @yield('css')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand h2 title_logo" href="{{url('')}}/">NextInnovation</a>

  <div class="collapse navbar-collapse" id="Navber">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('product')}}">商品表</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('sale')}}">受注表</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('salesdata')}}">受注明細表</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('customer')}}">顧客表</a>
      </li>
    </ul>
  </div>
</nav>
<div class="menu_box">
  <div class="contents_box">
    <div class="new_content">
      @yield('new_content')
    </div>
    @yield('content')
  </div>
</div>
</body>
</html>
