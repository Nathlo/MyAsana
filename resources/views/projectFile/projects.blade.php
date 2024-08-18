@extends('layouts.asana-app')

@section('title', 'My Asana | Projets')


@section('content')

    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase mt-8 mb-6">Mes projets</h1>
        <!-- Component: Alert message for successful update-->
        @if (session('success'))
            <x-success/>
        @endif
        
    <div class="mx-auto max-w-[1280px]">

        <!-- 'Add New Project' button -->  
        <div class="flex justify-end mt-5">
              <a href="{{ route('project.create') }}" class="block rounded-md w-45 bg-pink-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-pink-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-500">Nouveau Projet</a> 
        </div>

        <!-- Table Title Columns -->  
        <table class="min-w-full divide-y divide-gray-300 my-8">
            <thead>
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Responsable</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nom du projet</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Statut</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date de fin</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">

                <!-- Repeating Componant 'project-card' with a loop -->  
                @forelse ($projects as $project)
                    <x-project-card :project="$project"/> 
                @empty
                    Vous n'avez pas de projets pour le moment <br> Revenez plus tard
                @endforelse

            </tbody>
        </table>

        <!-- Paginate links to navigate between projects page -->
        <div class="block pl-6">{{ $projects->links() }}</div>

    </div>
@endsection