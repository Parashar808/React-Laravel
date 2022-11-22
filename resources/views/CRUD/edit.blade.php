

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .container{
        width:100%;
        display: flex;
        justify-content: center;
    }
    .container .card{
        width:30%;
    }
    .container .card form{
        width:100%;
    }
    .container .card .card-header{
        text-align:center;
        color:crimson;
        margin: 2rem;
        font-weight: bold;

    }
    .container .card form .card-footer button{
        margin: 2rem 0rem;
    }
  </style>
</head>
<body>

    <div class="row">
        <div class="col-md-6 w-100 container">
            <!-- general form elements -->
            <div class="card card-primary ">
                <div class="card-header">
                    <h3 class="card-title">EDIT</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('CRUD.update', $CRUDS->id) }}">
                    @method('PATCH')
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="title" value={{ $CRUDS->title }} name="title" class="form-control" id="Email">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" value = {{ $CRUDS->description }} class="form-control" name="description"
                                   >
                        </div>
                        <div class="form-group">
                            <label for="dob">Author</label>
                            <input type="text" value={{ $CRUDS->author}} class="form-control" name="author">


                               
                        </div>

                        
                       
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    </body>
</html>
