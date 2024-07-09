
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
    <br>
    <div class="container">
@if (session()->has("success"))
 <h4 class="alert alert-success" role="alert">
 {{Session::get("success")}}
 </h4>
@endif 
</div>
          <form action="/admin/{{ $data->id }}/update" method="post" enctype="multipart/form-data">
    
            @csrf
        <div class="container" style="width: 50%; border: 1px solid silver; margin-top: 5%; padding: 5%">
         
            <h1 style="color: #E1592f; text-shadow: 2px 2px #e1e1e1; font-size: 30px">Ajouter Des Images dans le Slide</h1><br>
      
    
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Insérer 3 images au minimum </label>
                <input class="form-control" type="file" name="images[]" id="formFileMultiple" multiple required>
              </div>    
              
    
    
    
          <div class="input-group mb-3">
            <input type="submit" class="form-control btn" placeholder="connexion" style="color: white; background-color: #E1592f; margin-top: 4%">
          </div>
        </div>
    </form>
    
            
          <div class="text-center mb-2">
          @if (count($data->photos) > 0)
              

          <div class="justify-content-center" @style(['display : flex',"gap : 1.3rem"])>
          @foreach ($data->photos as $item)
          <div class="card">
          <img src="{{asset($item->images)}}" class="img-card-top" width="200px" height="200px">
          <form action="/admin/{{$item->id}}/delete" method="post">
          @csrf
          @method("delete")
          <div class="card-body">
          <button class="btn btn-danger" class="card-title">Supprimer</button>
        </div>
          </form>
          </div>
          @endforeach
          </div>
          @else
          <div class="alert alert-danger d-flex align-items-center " role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
              <div>
                aucun image dans le slide
              </div>
            </div> 
          @endif
          </div>
    </body>
    </html>
    

    
  