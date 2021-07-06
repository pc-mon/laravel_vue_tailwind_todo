@extends('layout')

@section('content')
<div><span class="text-sm">Project Name:</span> <span class="text-xl">{{ $project->title }}</span></div>
<div class="mb-5"><span class="text-sm">Project Number</span> <span class="text-lg">#{{ $project->id }}</span></div>
<a href="/project" class="mb-3 py-2 px-5 rounded bg-gray-100 text-gray-800">Back To Main Project List</a>
@endsection
