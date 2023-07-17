@extends('layouts.admin')
@section('content')

<h1>PROJECT: {{ $project->title }}</h1>
<p>CONTENT: {{ $project->content }}</p>
<p>DEAD LINE: {{ $project->deadline }}</p>
<p>TYPE:  {{ $project->type ? $project->type->name : "Senza categoria" }} </p>
<p>tecnologies:</p>
<ul>
    @foreach ($project->tecnologies as $tecnology)
    <li>{{$tecnology->name}}</li>
    @endforeach
</ul>

<img src="{{ asset("storage/" . $project->image)}}" alt="{{$project->title}}">

@endsection