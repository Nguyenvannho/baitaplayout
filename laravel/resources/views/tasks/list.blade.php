@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Task List</title>
    </head>
    <body>
        <h3 style="color:brown">Nhiệm vụ</h3>
        <ul>
            <br>
            <br>
            @foreach ($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    </body>
</html>
@endsection
