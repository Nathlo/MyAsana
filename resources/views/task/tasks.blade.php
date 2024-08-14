@extends('layouts.asana-app')

@section('title', 'My.Asana | Tâches')


@section('content')

    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase mt-8">Mes tâches</h1>
    
    <div class="container">
        @forelse ($tasks as $task)
            <x-task-card :task="$task"/> 
        @empty
            Vous n'avez pas de tâches pour le moment <br> Revenez plus tard
        @endforelse

        <!-- create a paginate links to navigate between tasks page -->
        <div class="block pl-6">{{ $tasks->links() }}</div>

    </div>
@endsection