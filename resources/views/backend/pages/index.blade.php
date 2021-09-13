@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{route('page.create')}}" class="btn btn-primary btn-sm">Create new Page</a>
<ul class="list-group">
    @foreach($data as $datum)
      <li class="list-group-item text-center"><a href="{{route('page.show', $datum->id)}}">{{$datum->title}}</a></li>
     @endforeach
    </ul>
</div>

@endsection