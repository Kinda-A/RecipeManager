@extends('layouts.app')

@section('content')
    <h1>Add New Recipe</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea name="ingredients" class="form-control" rows="4" required>{{ old('ingredients') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea name="instructions" class="form-control" rows="4" required>{{ old('instructions') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Add Recipe</button>
    </form>
@endsection