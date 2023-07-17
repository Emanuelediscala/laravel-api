@extends('layouts.admin')
@section('content')

<h1>MODIFICA UN PRODOTTO ESISTENTE</h1>

<form action="{{route('admin.projects.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
    
    @csrf

    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title" value="">

    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>

    <label for="deadline">Dead-Line</label>
    <input class="form-control" type="text" name="deadline" id="deadline" value="">

    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category_id">

        <option value="" selected disabled>Seleziona Categoria</option>
        
        @foreach ($types as $type)

        <option value="{{$type->name}}">{{$type->name}}</option>

        @endforeach 
    </select>
    
    @foreach ($tecnologies as $i => $tecnology)
    <div class="form-check">
            <input  class="form-check-input" type="checkbox" name="tecnologies[{{$i}}]" id="tecnology" value="{{$tecnology->id}}">
            <label for="tecnologies{{$i}}" class="form-check-label">{{$tecnology->name}}</label>
    </div>
    @endforeach 
    <input type="file" name="image">
    <input type="submit" class="form-control btn btn-primary my-4" value="Create" style="width: 10rem;">

</form>

@endsection