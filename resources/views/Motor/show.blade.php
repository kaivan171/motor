@extends('layout')

@section('content')
    <h1>All List</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>model</th>
            <th>color</th>
            <th>weight</th>
            <th>price</th>
        </tr>
        @foreach ($data as $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data->model }}</td>
                <td>{{ $data->color }}</td>
                <td>{{ $data->weight }}</td>
                <td>{{ $data->price }}</td>

                @endforeach
            </tr>

    </table>
@stop