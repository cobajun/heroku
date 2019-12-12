@extends('layouts.front')

@section('content')
<div class="container">
<h1 class="page-title">profile list</h1>
@if (!is_null($headline))
<ul class="headline">
 <li>
  <div class="date">{{ $headline->updated_at->format('Y/m/d') }}</div>
  <h2 class="name">{{ str_limit($headline->name, 70) }}</h2>
  <p class="gender">{{ str_limit($headline->gender, 10) }}</p>
  <p class="hobby">{{ str_limit($headline->hobby,400) }}</p>
  <div class="body">
   <p>{{ str_limit($headline->introduction, 1500) }}</p>
  </div>
 </li>
</ul>  
@endif


<ul class="posts">
@foreach($posts as $post)
 <li>
  <div class="date">{{ $post->updated_at->format('Y/m/d') }}</div>
  <h2 class="name">{{ str_limit($post->name, 70) }}</h2>
  <p class="gender">{{ str_limit($post->gender, 10) }}</p>
  <p class="hobby">{{ str_limit($post->hobby,400) }}</p>
  <div class="body">
   <p>{{ str_limit($post->introduction, 1500) }}</p>
  </div>
 </li>
@endforeach
</ul>

</div>
@endsection