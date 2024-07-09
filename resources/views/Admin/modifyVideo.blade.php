<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Modifier Vidéo</title>
</head>
<body>
    <x-navbar/>
    <div class="container mt-5">
        @if (session()->has("success"))
            <div class="alert alert-success" role="alert">
                {{ Session::get("success") }}
            </div>
        @endif
        <h2 class="text-center my-5">Modifier la Vidéo du Projet</h2>
        
        <form action="{{ route('projects.updateVideo', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="video">Upload Video</label>
                <input type="file" name="video" class="form-control" id="video" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Video</button>
        </form>

        <div class="text-center mt-4">
            @if ($project->video)
                <video width="320" height="240" controls>
                    <source src="{{ asset($project->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @else
                <div class="alert alert-danger" role="alert">
                    Aucun vidéo dans le projet
                </div>
            @endif
        </div>
    </div>
</body>
</html>
