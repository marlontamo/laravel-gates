@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{route('page.store')}}">
    @csrf
  <div class="form-group">
    <label for="Pagetitle">Page title</label>
    <input name= "title" type="text" class="form-control" id="Pagetitle" aria-describedby="emailHelp" placeholder="Title">
    <small id="emailHelp" class="form-text text-muted">Provide a Title of your Page</small>
  </div>
  <div class="form-group">
    <label for="Pagedescription">Page slug</label>
    <input name= "description" type="text" class="form-control" id="Pagedescription" aria-describedby="emailHelp" placeholder="description ">
    <small id="emailHelp" class="form-text text-muted">Provide a short description of your Page</small>
  </div>
  <div class="form-check">
    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="createpage" class="btn btn-primary">Create Page</button>
</form>
</div>

@endsection