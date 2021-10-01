@extends('layout.main')

@section('content')

<h1>Edit Covid19 Recrod #{{ $staff->id }}</h1>

<form method="POST" action="{{ url('/staff/' . $staff->id) }}" enctype="multipart/form-data" style="width:50%">
    @method('PATCH')
    @csrf

   

    <div class="col-md-12">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>

</form>
@endsection
