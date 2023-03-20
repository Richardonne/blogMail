<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <base href="{{ URL::asset('/')}}">

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('css/app.css')}}">


  <script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Other Page</a>
            </li>
          </ul>
        
        </div>
      </nav>

<div class="container my-4">
  @yield('content')

<br>
{{--Footer--}}

<div class="card">
  <div class="card-body text-center">
      this is the footer
  </div>

</div>

  <script src="{{url('js/popper.min.js')}}">  </script>
  <script src="{{url('js/bootstrap.min.js')}}">  </script>
</body>
</html>