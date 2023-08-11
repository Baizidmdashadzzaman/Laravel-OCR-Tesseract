<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body class="antialiased">

        <div class="" style="padding:50px">
            <div class="card card-body">
               <h1>Laravel OCR</h1>
                <p>text : {{$text}}</p>
                <form action="{{ route('ocr') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="file" name="image" accept="image/*" required class="form-control" />
                      <label class="form-label" for="form1Example1">Image</label>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Get text</button>
                  </form>


            </div>
        </div>
    </body>
</html>
