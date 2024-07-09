<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Ajouter des Images dans le Slide</title>
</head>
<body>

<form action="/storeImages/{{ $project->id }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container" style="width: 50%; border: 1px solid silver; margin-top: 15%; padding: 5%">
        <h1 style="color: #E1592f; text-shadow: 2px 2px #e1e1e1; font-size: 30px">Ajouter Des Images dans le Slide</h1><br>
  
        <div class="mb-3">
            <label for="images" class="form-label">Sélectionnez des images :</label>
            <input class="form-control" type="file" id="images" name="images[]" multiple accept="image/png, image/jpeg">
        </div>

        <div class="input-group mb-3">
            <input type="submit" class="form-control btn" value="Ajouter Images" style="color: white; background-color: #E1592f; margin-top: 4%">
        </div>
    </div>
</form>

</body>
</html>
