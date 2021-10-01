@extends('layout.main')

@section('content')
<h1>Covid19 #{{ $staff->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <div class="col-md-12">
            
                <th> ID </th>
                <td>{{ $staff->id }}</td>
            </tr>
            <tr>
                <th> Name </th>
                <td> {{ $staff->date }} </td>
            </tr>
            <tr>
                <th> Age </th>
                <td> {{ $staff->country }} </td>
            </tr>
            <tr>
                <th> salary </th>
                <td> {{ $staff->total }} </td>
            </tr>
            <tr>
                <th> Active </th>
                <td> {{ $staff->active }} </td>
            </tr>
            <tr>
                <th> Phone </th>
                <td> {{ $staff->death }} </td>
            </tr>
            <tr>
                <th> Action </th>
                <td> {{ $staff->recovered }} </td>
            </tr>
            
    </tbody>
</table>
@endsection
