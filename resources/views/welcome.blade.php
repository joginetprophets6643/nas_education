<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CSV Upload</title>
</head>

<body>
    <div class="container mx-auto" style="margin:100px">
            <h1 class="text-center">Upload file</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="was-validated" method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="selected">
                    <option >Please Select Option</option>
                     <option value="1">SQ</option>
                     <option value="2">TQ</option>
                     <option value="3">PQ</option>
                     <option value="4">AT3</option>
                     <option value="5">AT5</option>
                    
                  
                   
                </select>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" name="file" aria-label="file example" required>
                    <div class="invalid-feedback">Please Choose CSV file for upload</div>
                </div>

                <div class="mb-3 text-center">
                    <button class="btn btn-primary" type="submit">Upload </button>
                </div>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
