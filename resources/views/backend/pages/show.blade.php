@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{$data->title}}</h1>
<h4>{{$data->description}}</h4>
<small>{{$data->created_at}}|{{$data->updated_at}}</small>
<a href="{{route('page.show', $data->id)}}" class="btn btn-success btn-sm">view page</a>

<form action="{{route('page.destroy',$data->id)}}" method="post">
@method('DELETE')  
@csrf
<button type="submit" class="btn btn-danger btn-sm">Delete Page</button>
</form>
</div>

@endsection