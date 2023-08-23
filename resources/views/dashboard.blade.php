<x-app-layout>
</x-app-layout>

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
    
    <h1 style ="font-size: 30px;margin: 20px; font-weight: bold; ">add post</h1>

    <form action="/store" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title"
                                    name="title">
        </div>   

        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <input type="text" class="form-control" id="content"
                            name="content">
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

      <div class="">  
     <h1>blog list</h1>
        <table style="text-align:center; width:100vw;">
          <tr>
            <th>id</th>
            <th>author id</th>
            <th>name</th>
            <th>type</th>
            <th>title</th>
            <th>content</th>
            <th>image</th>
            
            <th>action</th>
          </tr>

        @foreach ($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->author_id }}</td>
          <td>{{ $post->author_name }}</td>
          <td>{{ $post->authortype }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->content }}</td>
          <td>{{ $post->image }}</td>
          <td>
            <a href="edit_post/{{ $post->id }}">edit</a>
            <a href="delete_post/{{ $post->id }}">delete</a>
        </td>
        </tr>
        @endforeach
        </table></div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>














    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

