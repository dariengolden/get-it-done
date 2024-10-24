@extends('layouts.app')

@section('content')
<h1>Create new task</h1>
<form method="POST" action="/tasks">
    @csrf
    <div class="form-group">
        <label for="description">Task description</label>
        <input class="form-control" name="description">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Get it done!</button>
    </div>
</form>
@endsection
