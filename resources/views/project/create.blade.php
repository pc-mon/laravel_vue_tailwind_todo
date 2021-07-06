@extends('layout')

@section('content')
<form action="/project" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" 
            class="rounded border border-gray-100 mr-1" />
    </div>
    <button class="p-1 m-1 rounded border border-green-500 bg-green-100 text-geen-800" type="submit">Save</button>
</form>
@endsection
