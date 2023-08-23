
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style type="text/css">
        td{
            width:12%;
        }
    </style>
  </head>
  <body>
    <div class="row justify-content-center">
        <div class="col-md-6"> 
    
    <h1 style ="font-size: 30px;margin: 20px; font-weight: bold; ">edit post</h1>

    <form action="/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title"
                                    name="title" value="{{ $post->title }}">
        </div>   

        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <input type="text" class="form-control" id="content"
                            name="content" value="{{ $post->content }}">
        </div> 
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image"
                            name="image">
        </div> 
                
            <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
    </div>
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
















