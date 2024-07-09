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
    <form action="/loading" method="POST">
        @csrf
    <div class="container" style="width: 40%; border: 1px solid silver; margin-top: 5%; padding: 5%">

        <h1 style="color: #476fe6; text-shadow: 2px 2px #e1e1e1; font-size: 30px">Ajout d'une catégorie</h1><br>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Catégorie : </span>
        <input type="text" class="form-control" placeholder="saisir une nouvelle catégorie" name="category" aria-label="category" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <input type="submit" class="form-control btn" placeholder="ajouter" style="color: white; background-color: #476fe6; margin-top: 4%">
      </div>
    </div>
</form>
</body>
</html>
