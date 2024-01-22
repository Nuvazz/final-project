 @extends('students.layout')
 @section('content')

 <div class="card" style="margin:20px;">
        <div class="card-header">Create New Student</div>
            <div class="cad-body">

                <form action="{{ url('student') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>Address</Address></label></br>
                    <input type="text" name="address" id="address" class="form-control"></br>
                    <label>Mobile</Address></label></br>
                    <input type="text" name="mobile" id="mobile" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>
        </div>
</div>   

@stop