@extends('students.layout')
@section('content')




@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Faculty:</strong>
                        <input type="text" name="faculty" value="{{ $student->faculty }}" class="form-control" placeholder="faculty">
                    </div>
                </div>





                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Course Name:</strong>
                        <input type="text" name="course name" value="{{ $student->course_name}}" class="form-control" placeholder="course name">
                    
                    </div>
                    </div>
                    

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address"value="{{ $student->address }}"  class="form-control" placeholder="student address">
                    
                    </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Moblie:</strong>
                            <input type="text" name="mobile"value="{{ $student->mobile }}"  class="form-control" placeholder="ph number">
                        
                        </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Symbol no:</strong>
            <input type="text" name="symbol no" value="{{ $student->symbol_no}}" class="form-control" placeholder="symbol number">
        </div>
        </div> 


























            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>







@endsection