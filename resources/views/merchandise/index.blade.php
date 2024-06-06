@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID</th>
        <th>brand_name</th>
        <th>product_name</th>
        <th>retail_price</th>
        <th>wholesale_price</th>
        <th>wholesale_qty</th>
        <th>qty_stock</th>
        <th>category_id</th>
        <th>unit_id</th>
    </thead>
    <tbody>
        @foreach ($merchandises as $merchandise)
            <tr>
                <td>{{ $merchandise->id}}</td>
                <td>{{ $merchandise->brand_name}}</td>
                <td>{{ $merchandise->product_name}}</td>
                <td>{{ $merchandise->retail_price}}</td>
                <td>{{ $merchandise->wholesale_price}}</td>
                <td>{{ $merchandise->wholesale_qty}}</td>
                <td>{{ $merchandise->qty_stock}}</td>
                <td>{{ $merchandise->category->category}}</td>
                <td>{{ $merchandise->unit->unit_type}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
