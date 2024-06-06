@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID</th>
        <th>Category</th>
        <th>Description</th>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->category}}</td>
                <td>{{ $category->description}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection