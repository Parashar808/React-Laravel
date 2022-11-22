@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

                                <a href="{{ route('CRUD.index') }}" class="nav-link">
                                    
                                    <p>CRUD</p>
                                </a>

                                <a href="{{ route('Student.home') }}" class="nav-link">
                                    
                                    <p>STUDENT</p>
                                </a>
                               

                            
                            
    </div>
</div>
@endsection
