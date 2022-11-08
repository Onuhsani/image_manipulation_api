@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('test.data') }}" enctype="multipart/form-data">
    @csrf
    <input type="text"/><br>
    <Button>Submit</Button>
</form>

@endsection