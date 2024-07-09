<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <x-navbar/>
      <form action="/check" method="post">

        @csrf
    <div class="container" style="width: 45%; border: 1px solid silver; margin-top: 6%; padding: 3%">
        @if (session()->has("failed"))
        <h6 class="alert alert-danger" role="alert">
       @php
       echo session('failed')
       @endphp
        </h6>
         @endif
        <h1 style="color: #E1592f; text-shadow: 2px 2px #e1e1e1; font-size: 30px">formulaire de connexion</h1><br>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email : </span>
        <input type="email" class="form-control" placeholder="Email" name="email" aria-label="email" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Mot de passe : </span>
        <input type="password" class="form-control" placeholder="Mot de passe" name="password" aria-label="password" aria-describedby="basic-addon2">
      </div>



      <div class="input-group mb-3">
        <input type="submit" class="form-control btn" placeholder="connexion" style="color: white; background-color: #E1592f; margin-top: 4%">
      </div>
    </div>
</form>
<x-footer class="sticky-bottom" @style('bottom:0%')/>
</body>
</html>
