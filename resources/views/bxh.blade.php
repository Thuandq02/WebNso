@extends('master')
@section('content')

    <form style="margin-top:50px; padding: 0 500px">
        @csrf
        <h2 style="color: red;text-align:center; margin-bottom: 50px">Top Level</h2>
        <table class="table">
            <thead>
            <tr class="table-secondary">
                <th scope="col" style="text-align:center">#</th>
                <th scope="col" style="text-align:center">Name</th>
                <th scope="col" style="text-align:center">Level</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($user['level'] as $key => $item)
                <tr>
                    <th scope="row" style="text-align:center">{{ ++$key }}</th>
                    <td style="text-align:center">{{ $item['name'] }} </td>
                    <td style="text-align:center">{{ $item['level'] }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    <di style="text-align:center; margin-top:50px; margin-bottom: 75px"><h1>----------------------------------------------</h1></di>
    <form style="padding: 0 500px;margin-bottom: 50px">
        @csrf
        <h2 style="color: red;text-align:center;margin-bottom: 50px">Top Nạp</h2>
        <table class="table">
            <thead>
            <tr class="table-secondary">
                <th scope="col" style="text-align:center">#</th>
                <th scope="col" style="text-align:center">Name</th>
                <th scope="col" style="text-align:center">Nạp</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">

            @foreach($user['nap'] as $key => $item)
                <tr>
                    <th scope="row" style="text-align:center">{{ ++$key }}</th>
                    <td style="text-align:center">{{ $item['name'] }} </td>
                    <td style="text-align:center">{{ number_format($item['nap']) }} vnđ</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>

@endsection
