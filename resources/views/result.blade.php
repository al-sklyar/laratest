@extends('layout')

@section('content')
    <input type="button" class="btn btn-primary" style="margin-bottom: 20px" value="Обновить записи" onClick="refreshPage()">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Имя записи</th>
            <th scope="col">Описание записи</th>
            <th scope="col">Дата создания</th>
        </tr>
        </thead>
        <tbody>
        @if(count($notes))
            @foreach($notes as $note)
                <tr>
                    <td>{{$note->name}}</td>
                    <td>{{$note->description}}</td>
                    <td>{{$note->created_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <script>
        function refreshPage(){
            window.location.reload();
        }
    </script>
@endsection
