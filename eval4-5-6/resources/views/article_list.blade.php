@extends('base_template')

@section('title')
    Liste d'articles
@endsection

@section('content')
    <h1>Liste d'articles</h1>
	<a href="/create">
		<button type="button" class="btn btn-success">Créer un article</button>
	</a>
	<ul>
		@foreach($articles as $article) 
			<li>
				<a href="/modification">{{ $article->name }}</a>
				<button type="button" class="btn btn-danger">Supprimer l'article</button>
			</li>
		@endforeach
	</ul>
@endsection