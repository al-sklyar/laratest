@extends('layout')

@section('content')
    <form action="/form/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Имя записи</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание записи</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Сохранить запись">
    </form>
    <div style="margin-top: 20px">
        <a href="/result/" target="_blank">Ссылка на таблицу</a>
    </div>
@endsection
