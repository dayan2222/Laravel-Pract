@extends('layout')

@section('wrapper')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>

			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<span class="byline">{{$article->body}}</span> </div>			
		</div>
		
	</div>
</div>
@endsection
