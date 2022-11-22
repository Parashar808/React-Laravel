@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>
<body>

<div class="container">
  <h2>Form</h2>
  <form method="POST" action="{{ route('CRUD.store') }}" enctype="multipart/form-data">
  
     
  @csrf
  <!-- <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="image">
    </div> -->

    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    
    
    
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author" name="author">
    </div>

    
   
   
   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
@endsection
