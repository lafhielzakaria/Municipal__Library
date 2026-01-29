<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <div class="container mt-5">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{$book->title}}</h5>
                               <form action="{{ route('book.destroy', $book->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                            <form action="{{ route('book.getedit', $book->id) }}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Edit</button>
                                    </form>
                        </div>
                        <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      <form action="createBook" method="get">
        <button>add book</button>
      </form>
    </div>
</body>
</html>