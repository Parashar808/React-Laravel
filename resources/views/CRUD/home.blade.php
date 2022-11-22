@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="col-md-5"> 
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category List </h3>
                              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">

<table class="table">
                  <thead>
                    <tr>
                      
                     
                      <th>Category-ID </th>  
                      <th>Name</th>
                      <th>Research Article-ID</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($c as $c)
                 <tr>
                    <!-- <img src="{{ asset('images/' . $c->image_path) }}
                     alt="abc">" -->
                    
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{$c->a_id}}</td>
                    
                    <td style="display:flex;">
                      <a href = "{{ route('Category.edit',$c->id)  }}"
                      class= "btn btn-warning btn-sm"
                      >
                        Edit</a>

                        |
                        <form method="POST" action="{{ route('Category.destroy',$c->id) }}">
                          @method('DELETE')
                          @csrf

                          <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                        </form>



                    
                  

    </td>
    </tr>

                 @endforeach
                  </tbody>
 </table>
                <a href="{{ route('Category.create') }}" class= "btn btn-primary" style="padding-top:15px;">
                                    
                                    <p>Create</p>
                                </a>
                
</div>
</div>
</div>




<div class="col-md-5">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Editions List </h3>
                              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">

<table class="table">
                  <thead>
                    <tr>
                      
                     
                      <th>Research Article-ID </th>  
                      <th>Edition</th>
                      <th>Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($ca as $c)
                 <tr>
                    <!-- <img src="{{ asset('images/' . $c->image_path) }}
                     alt="abc">" -->
                    
                    <td>{{ $c->book_id }}</td>
                    <td>{{ $c->name }}</td>
                    
                    <td style="display:flex;">
                      <a href = "{{ route('Category1.edit',$c->id)  }}"
                      class= "btn btn-warning btn-sm"
                      >
                        Edit</a>

                        |
                        <form method="POST" action="{{ route('Category1.destroy',$c->id) }}">
                          @method('DELETE')
                          @csrf

                          <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                        </form>



                    
                  

    </td>
    </tr>

                 @endforeach
                  </tbody>
 </table>
                <a href="{{ route('Category1.create') }}" class= "btn btn-primary" style="padding-top:15px;">
                                    
                                    <p>Create</p>
                                </a>
                
</div>
</div>
</div>


<div class="col-md-7">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Research Articles</h3>
                              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th>Research Article-Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Author</th>
                      <th>Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($CRUDS as $c)
                 <tr>
                    <!-- <img src="{{ asset('images/' . $c->image_path) }}
                     alt="abc">" -->
                    <td>{{$c->id}}</td>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->description }}</td>
                    <td>{{ $c->author }}</td>
                    
                    
                    <td style="display:flex;">
                      <a href = "{{ route('CRUD.edit',$c->id)  }}"
                      class= "btn btn-warning btn-sm"
                      >
                        Edit</a>

                        |
                        <form method="POST" action="{{ route('CRUD.destroy',$c->id) }}">
                          @method('DELETE')
                          @csrf

                          <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                        </form>



                    
                  

</td>
</tr>

                 @endforeach
                  </tbody>
                </table>
                <a href="{{ route('Category.create') }}" class= "btn btn-primary" style="padding-top:15px;">
                                    
                                    <p>Create</p>
                                </a>
                

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>




</body>
</html>
@endsection