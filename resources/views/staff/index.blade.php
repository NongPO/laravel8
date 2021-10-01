@extends('layout.main')
@section('content')

<h1>Staff Puwadon</h1>
<a href="{{ url('/staff/create') }}" class="btn btn-sm btn-success mr-4">New Record</a>
<form action="{{ url('/staff') }}" method="GET">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>


<table class="table table-sm table-bordered text-end" style="width:50%">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>salary</th>
        <th>Phone</th>
        <th>Action</th>
        @foreach($staffs as $item)
    <tr>
        <td>{{ $item->Name }}</td>
        <td>{{ $item->Age }}</td>
        <td>{{ $item->salary }}</td>
        <td>{{ $item->Phone }}</td>
        <td>
            <a href="{{ url('/staff/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
            <a href="{{ url('/staff/'.$item->id.'/edit' ) }}" class="btn btn-sm btn-warning">Edit</a>

            <form method="POST" action="{{ url('/staff' . '/' . $item->id) }}" style="display:inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">
                    Delete
                </button>
            </form>

        </td>

    </tr>
    @endforeach
</table>
<div class="col-md-12" style="width:50%">{{ $staffs->appends(['search' => request('search')])->links() }}</div>
<div class="mt-4">{{ $staffs->links() }}</div>
@endsection