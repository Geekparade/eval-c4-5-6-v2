@extends('base_template')

@section('title')
    Historique des articles
@endsection

@section('content')
	<h1>Historique des articles</h1>
	<ul>
		@foreach($articles as $article, $movements as $movement, $movement_types as $type, $directions as $direction) 
			<li>
				<p>{{ $article->name }}</p>
				<p>{{ $movement->name }}</p>
				<p>{{ $movement->quantity }}</p>
				<p>{{ $type->name }}</p>
				<p>{{ $direction->name }}</p>
			</li>					
		@endforeach
	</ul>
@endsection