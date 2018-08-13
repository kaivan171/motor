@extends('layout')

@section('content')
    <h1>All List</h1>


    <table class="table table-bordered">
        <tr>

            <th>model</th>
            <th>color</th>
            <th>weight</th>
            <th>price</th>
        </tr>
        @foreach ($sort as $sort)
            <tr>

                <td>{{ $sort->model }}</td>
                <td>{{ $sort->color }}</td>
                <td>{{ $sort->weight }}</td>
                <td>{{ $sort->price }}</td>

                @endforeach
            </tr>

    </table>
@stop