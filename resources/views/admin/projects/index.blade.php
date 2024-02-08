@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($projects as $project)
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $project->name }}</div>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $project->type ? $project->type->name : 'senza categoria' }}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $project->technology ? $project->technology->name : 'senza tech' }}
                    </h6>
                    <div class="card-body">{{ $project->description }}</div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection