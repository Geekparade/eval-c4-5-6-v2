@extends('base_template')

@section('title')
    Modification d'articles
@endsection

@section('content')
    <h1>Modifier l'article</h1>
    <a href="/">
		<button type="button" class="btn btn-primary">Retour Accueil</button>
	</a>
    <div class="panel panel-info">
		<div class="panel-heading">Modifier l'article</div>
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