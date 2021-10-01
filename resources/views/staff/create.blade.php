@extends('layout.main')

@section('content')

<h1>Create New Covid Record</h1>

<form method="POST" action="{{ url('/staff') }}" enctype="multipart/form-data" style="width:50%">
    @method('POST')
    @csrf

   

    <div class="col-md-12">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>

</form>
@endsection
