@extends('layouts.app')

@section('content')
    <h1>{{ $recipe->name }}</h1>

    <p><strong>Description:</strong> {{ $recipe->description }}</p>
    <p><strong>Ingredients:</strong></p>
    <pre>{{ $recipe->ingredients }}</pre>
    <p><strong>Instructions:</strong></p>
    <pre>{{ $recipe->instructions }}</pre>

    <a href="{{ route('recipes.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection