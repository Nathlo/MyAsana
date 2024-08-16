<!-- https://componentland.com/component/account-details-form-1 -->
@extends('layouts.asana-app')

@section('title', 'My.Asana | Profile')


@section('content')

    <form action="{{ isset($employee) ? route('staff.update', $employee->id) : route('staff.store') }}" method="POST" enctype="multipart/form-data">
        
        @csrf
            <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase">Ajouter votre projet</h1>

            <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
            <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
            <div class="shrink-0 mr-auto sm:py-3">
                <p class="text-lg  font-medium">Détails du nouveau projet</p>
                <p class="text-sm text-gray-600">Remplissez les champs</p>
            </div>
            <button class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">Annuler</button>
            <button class="hidden rounded-lg border-2 border-transparent bg-pink-500 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-pink-700">Enregistrer</button>
            </div>
            <!-- Project Manager information -->
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Nom du responsable</p>
                <input placeholder="Prénom" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
                <input placeholder="Nom" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
            </div>
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Email</p>
                <input placeholder="votre.email@domain.com" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
            </div>
            <!-- Project information -->
            {{-- <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Nom du projet</p>
                <input placeholder="Nom de votre projet" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
            </div> --}}
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Nom du projet</p>
                <input placeholder="Nom du  projet" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
                <p class="w-15 font-medium">Status</p>
                <input placeholder="Started" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
            </div>
            <!-- Project description -->
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Description</p>
                <textarea placeholder="Nom de votre projet" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1"></textarea>
            </div>
            <!-- Start and Ed Project dates-->
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Début / Fin</p>
                <input placeholder="Date de début" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
                <input placeholder="Date de fin" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
            </div>



            <div class="flex flex-col gap-4 py-4  lg:flex-row">
            <div class="shrink-0 w-32  sm:py-4">
                <p class="mb-auto font-medium">Photo</p>
                <p class="text-sm text-gray-600">Changez ici <br> votre photo</p>
            </div>
        

            <div class="flex h-56 w-full flex-col items-center justify-center gap-4 rounded-xl border border-dashed border-gray-300 p-5 text-center">
                <img src="#" class="h-16 w-16 rounded-full" />
                <p class="text-sm text-gray-600">Glissez ici votre photo pour commencer à la télécharger</p>
                <input type="file" class="max-w-full rounded-lg px-2 font-medium text-blue-600 outline-none ring-blue-600 focus:ring-1" />
            </div>
            </div>
            <div class="flex justify-end py-4 sm:hidden">
            <button class="mr-2 rounded-lg border-2 px-4 py-2 font-medium text-gray-500 focus:outline-none focus:ring hover:bg-gray-200">Annuler</button>
            <button class="rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white focus:outline-none focus:ring hover:bg-blue-700">Enregistrer</button>
            </div>
            </div>

    </form>
    
@endsection

