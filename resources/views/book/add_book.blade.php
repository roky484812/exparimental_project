<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Add Book</div>
            <div class="card-body">
                @if(session()->has('type'))
                <div class="alert alert-{{session()->get('type')}}">
                    Message: {{session()->get('message')}}
                </div>
                @endif
                <form action="{{route('store_book')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Book Name</label>
                        <input type="text" class="form-control" name="book_name">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Book List</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Serail</th>
                            <th>Book Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $index => $book)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$book->book_name}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('update_book_page', $book->id)}}">Edit</a></li>
                                            <li><a class="dropdown-item" href="{{route('delete_book', $book->id)}}">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @if (!count($books))
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center">Not Found</td>
                        </tr>
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>