@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Modifier la tâche</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Titre *</label>
                    <input type="text" name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title', $task->title) }}">

                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $task->description) }}</textarea>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="completed" class="form-check-input"
                        {{ $task->completed ? 'checked' : '' }}>
                    <label class="form-check-label">Marquer comme terminée</label>
                </div>

                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuler</a>

            </form>
        </div>

    </div>
</div>
@endsection