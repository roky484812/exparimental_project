<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Edit Book</div>
            <div class="card-body">
                @if(session()->has('type'))
                <div class="alert alert-{{session()->get('type')}}">
                    Message: {{session()->get('message')}}
                </div>
                @endif
                <form action="{{route('update_book')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Book Name</label>
                        <input type="text" class="form-control" name="book_name" value="{{$book->book_name}}">
                    </div>
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <button class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>