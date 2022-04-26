@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull left">
            <h2>Add new student</h2>
    
        </div>
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Return</a>
        </div>
    </div>
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        <strong> Whoops!</strong> there were some problem with your input <br><br>
        <ul>
    @foreach ($errors-> as->all() as $error)
    
    <li> {{ $error }}</li>
    @endforeach
        </ul>
    </div>
    
    @endif
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name"  class="form-control" placeholder="name">
            
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Faculty:</strong>
                    <input type="text" name="faculty"  class="form-control" placeholder="faculty name">
                
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Course Name:</strong>
                        <input type="text" name="course name"  class="form-control" placeholder="course name">
                    
                    </div>
                    </div>
                    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address"  class="form-control" placeholder="student address">
                    
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Moblie:</strong>
                            <input type="text" name="mobile"  class="form-control" placeholder="ph number">
                        
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Symbol no:</strong>
            <input type="text" name="symbol no"  class="form-control" placeholder="symbol number">
        </div>
        </div>  
        <hr>    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
        <br>
        </div>
    </form>
@endsection