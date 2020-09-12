<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taiba Connect</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light flex-row-reverse">
        <a class="navbar-brand" href="#"><span class="font-weight-bold">تواصل طيبه</span>  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav flex-row-reverse ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#aboutus">من نحن<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services"> خدماتنا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#custmers"> عملاءنا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#partners"> وكلائنا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">تواصل معانا</a>
            </li>
          </ul>
        </div>
      </nav>


      @yield('content')




<script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
