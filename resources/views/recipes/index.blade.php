@extends('layouts.app')

@section('content')
    <h1 class="mb-4">All Recipes</h1>

    <a href="{{ route('recipes.create') }}" class="btn btn-primary mb-3">Add New Recipe</a>

    @if($recipes->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->name }}</td>
                        <td>{{ Str::limit($recipe->description, 50) }}</td>
                        <td>
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this recipe?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No recipes found.</p>
    @endif
@endsection