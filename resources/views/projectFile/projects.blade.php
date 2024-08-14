@extends('layouts.asana-app')

@section('title', 'My Asana | Projets')


@section('content')

    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase mt-8">Mes projets</h1>
        
    <div class="container">

        @forelse ($projects as $project)
            <x-project-card :project="$project"/> 
        @empty
            Vous n'avez pas de projets pour le moment <br> Revenez plus tard
        @endforelse

        <!-- create a paginate links to navigate between projects page -->
        <div class="block pl-6">{{ $projects->links() }}</div>

    </div>
@endsection