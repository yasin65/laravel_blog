@extends('layouts.dash')
@section('admin_content')
<p style="font-size: 25px"><u>Category Name</u>: {{$category->name }}</p>
<br>
<div><p style="font-size: 25px"><u>Category Description</u></p> </div><br>
<p>{{$category->description}}</p>

@endsection