@extends('master')
@section('content')

    <form style="margin-top:50px; width: 100%; padding: 0 25%">
        @csrf
        <h2 style="color: red;text-align:center; margin-bottom: 50px">Top Level<img src="{{ asset('/img/sao.gif') }}"></h2>
        <table class="table">
            <thead>
            <tr class="table-secondary">
                <th scope="col" style="text-align:center">Top</th>
                <th scope="col" style="text-align:center">Name</th>
                <th scope="col" style="text-align:center">Level</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($user['level'] as $key => $item)
                <tr>
                    <th scope="row" style="text-align:center">{{ ++$key }}</th>
                    <td style="text-align:center"><img src="{{ asset('/img/nv.gif') }}">{{ $item['name'] }} </td>
                    <td style="text-align:center">{{ $item['level'] }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    <di style="text-align:center; margin-top:50px; margin-bottom: 75px"><h1>----------------------------------------------</h1></di>
    <form style=" width: 100%; padding: 0 25%;margin-bottom: 50px">
        @csrf
        <h2 style="color: red;text-align:center;margin-bottom: 50px">Top Nạp<img src="{{ asset('/img/sao.gif') }}"></h2>
        <table class="table">
            <thead>
            <tr class="table-secondary">
                <th scope="col" style="text-align:center">Top</th>
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
    </div>
    <di style="text-align:center; margin-top:50px; margin-bottom: 75px"><h1>----------------------------------------------</h1></di>
    <form style=" width: 100%; padding: 0 25%;margin-bottom: 50px">
        @csrf
        <h2 style="color: red;text-align:center;margin-bottom: 50px">Top Sự Kiện<img src="{{ asset('/img/sao.gif') }}"></h2>
        <table class="table">
            <thead>
            <tr class="table-secondary">
                <th scope="col" style="text-align:center">Top</th>
                <th scope="col" style="text-align:center">Name</th>
                <th scope="col" style="text-align:center">Mảnh Bản Đồ 3</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">

            @foreach($user['topSk'] as $key => $item)
                <tr>
                    <th scope="row" style="text-align:center">{{ ++$key }}</th>
                    <td style="text-align:center"><img src="{{ asset('/img/nv.gif') }}">{{ $item['name'] }}</td>
                    <td style="text-align:center">{{ number_format($item['topmanh']) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    </div>
@endsection
