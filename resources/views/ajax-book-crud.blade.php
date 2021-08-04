<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 8 Ajax CRUD Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container mt-2">

    <div class="row">

        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Laravel 8 Ajax Book CRUD Tutorial</h2>
        </div>
        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewBook" class="btn btn-success">Add</button></div>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Book Title</th>
                  <th scope="col">Book Code</th>
                  <th scope="col">Book Author</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->code }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                       <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $book->id }}">Edit</a>
                      <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $book->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
             {!! $books->links() !!}
        </div>
    </div>        
</div>

@include('bootstrap-model')

{!!Html::script('js/script.js')!!}
</body>
</html>