<!-- https://componentland.com/component/account-details-form-1 -->
@extends('layouts.asana-app')

@section('title', 'My.Asana | Profile')


@section('content')

    <form action="{{ route('project.store') }}" method="POST">
        @method('POST')
        @csrf
            <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase">Ajouter votre projet</h1>
            
            <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
                <!-- Header with 'save' and 'cancel' buttons -->
                <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
                    <div class="shrink-0 mr-auto sm:py-3">
                        <p class="text-lg  font-medium">Détails du nouveau projet</p>
                        <p class="text-sm text-gray-600">Remplissez les champs</p>
                    </div>
                    <a href="{{ route('projects.index') }}" class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">
                        Annuler
                    </a>
                    <input type="submit" value="Enregistrer" class="hidden rounded-lg border-2 border-transparent bg-pink-500 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-pink-700">
                </div>
                <!-- Project Manager information -->
                <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                    <p class="shrink-0 w-32 font-medium">Responsable</p>

                    <!-- Dropdown Managers list : loop to get their names -->
                    <select class="rounded-md w-full" name="employee_id" id="employee">
                        @forelse ($managers as $manager)
                            <option value="{{$manager->employee->id}}">{{$manager->name}}</option>
                        @empty
                            <option value="0">Pas de Manager</option>
                        @endforelse
                    </select>
                </div>
           
                <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                    <p class="shrink-0 w-32 font-medium">Nom du projet</p>
                    <input placeholder="Nom du  projet" name="title" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
                    <p class="w-15 font-medium">Status</p>
                    <!-- Dropdown Status list : loop to get them -->
                    <select class="rounded-md" name="status" id="status">
                        @forelse ($status as $state)
                            <option value="{{ $state }}">{{ $state }}</option>
                        @empty
                            <option value="0">Pas de Statut</option>
                         @endforelse
                    </select>
                </div>
                <!-- Project description -->
                <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                    <p class="shrink-0 w-32 font-medium">Description</p>
                    <textarea placeholder="Décrivez votre projet" name="description" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1"></textarea>
                </div>
                <!-- Start and End Project dates-->
                <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                    <p class="shrink-0 w-32 font-medium">Début / Fin</p>
                    <input type="date" placeholder="Date de début" name="starts_at" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
                    <input type="date" placeholder="Date de fin" name="ends_at" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
                </div>

            </div>
    </form>
    
@endsection

