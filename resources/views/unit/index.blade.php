@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID</th>
        <th>Unit_type</th>
        <th>Description</th>
    </thead>
    <tbody>
        @foreach ($units as $unit)
            <tr>
                <td>{{ $unit->id}}</td>
                <td>{{ $unit->unit_type}}</td>
                <td>{{ $unit->description}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection