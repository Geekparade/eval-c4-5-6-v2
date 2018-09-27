@extends('base_template')

@section('title')
    Création d'articles
@endsection

@section('content')
	<h1>Création d'articles</h1>
	<a href="/">
		<button type="button" class="btn btn-primary">Retour Accueil</button>
	</a>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif			
	<ul>					
		<p>Pour le champ catégorie:</p>
		<li>1 = Alimentation </li>
		<li>2 = Boisson</li>
		<li>3 = Produits ménagers</li>								
	<br>								
		<p>Pour le champ unitée de mesure:</p>
		<li>1 = Litres</li>
		<li>2 = Kg</li>
		<li>3 = Unités</li>
		<li>4 = Bouteilles</li>								
	<br>								
		<p> Pour le champ prix comme ceci, exemple: 1.00</p>								
	</ul>							
	<div class="panel panel-info">
		<div class="panel-heading">Créez un nouvel article</div>
		<div class="panel-body"> 
			{!! Form::open(['url' => 'create']) !!}
				<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de l\'article']) !!}
					{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group {!! $errors->has('category_id') ? 'has-error' : '' !!}">
					{!! Form::text('category_id', null, ['class' => 'form-control', 'placeholder' => 'Catégorie de l\'article']) !!}
					{!! $errors->first('category_id', '<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group {!! $errors->has('unit_id') ? 'has-error' : '' !!}">
					{!! Form::text('unit_id', null, ['class' => 'form-control', 'placeholder' => 'Unitée de mesure']) !!}
					{!! $errors->first('unit_id', '<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group {!! $errors->has('sales_price') ? 'has-error' : '' !!}">
					{!! Form::text('sales_price', null, ['class' => 'form-control', 'placeholder' => 'Prix de l\'article']) !!}
					{!! $errors->first('sales_price', '<small class="help-block">:message</small>') !!}
				</div>
				{!! Form::submit('Créer', ['class' => 'btn btn-info pull-right']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection