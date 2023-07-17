@extends('layouts.admin')
@section('content')

<div>
    @foreach ($projects as $project)
        <li><a>{{$project->title}}</a></li>
        <li><a>{{$project->content}}</a></li>
        <a href="{{route('admin.projects.show', $project)}}">details</a>
    @endforeach
</div>

@endsection