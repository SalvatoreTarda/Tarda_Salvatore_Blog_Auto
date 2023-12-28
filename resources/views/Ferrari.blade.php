<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('Porsche')}}">Porsche</a>
        <a class="nav-link" href="{{route('Ferrari')}}">Ferrari</a>
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row-justify-content-center">
        <div class="col-12">
            <h1 class="text-center display-1 bg-danger">
                Ferrari
            </h1>
        </div>
    </div>
</div>
<div class="container-mt-5">
    <div class="row-justify-content-center">
     @foreach($Ferraris as $Ferrari)
     <div class="col-12 col-md-6 d-flex justify-content-center">
     <div class="card" style="width: 18rem;">
      <img src="{{$Ferrari['img']}}" class="card-img-top-3" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$Ferrari['tipes']}}</h5>
        
        <a href="{{ route('Dettaglio.Ferrari', ['tipes'=>$Ferrari['tipes']]) }}" class="btn btn-primary">Dettaglio</a>
  </div>
</div>
     </div>
     <p></p>
     @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>