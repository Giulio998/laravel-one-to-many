@extends('layouts.app')

@section('title', 'show')

@section('content')
<div class="card">
    <div class="card-body">
        <p>ID: {{$project->id}}</p>
        <p>Title: <a href="">{{$project->title}}</a></p>
        <p>Slug: {{$project->slug}}</p>
    </div>
</div>
</div>

@endsection