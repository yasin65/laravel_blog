@extends('layouts.dash')
@section('admin_content')
<p style="font-size: 25px"><u>Post title</u>: {{$post->title }}</p>
<br>
<div><p style="font-size: 25px"><u>Post Description</u></p> </div><br>
<p>{{$post->description}}</p>
		<div class="">
		<img src="{{asset($post->image)}}"class="img-fluid" alt="">
		</div>


@endsection