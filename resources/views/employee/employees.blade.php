@extends('layouts.asana-app')

@section('title', 'My Asana | Équipes')


@section('content')

    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase mt-8">Mes équipes</h1>
            
    <div class="bg-white py-15 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">

            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">La Force du <br>travail en équipe</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
                <!-- Adding new staff member  -->
                <a href="{{ route('staff.create')}}">
                    <p class="text-2xl font-medium tracking-tight mt-8 text-gray-700">Ajoutez un<br>nouveau membre<br>dans l'équipe</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="45px" viewBox="0 -960 960 960" width="45px" fill="#EA33F7"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                </a>
            </div>

            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @forelse ($employees as $employee)
                    <x-staff-card :employee="$employee"/>
                @empty
                    Il n'y a pas d'équipe à afficher.
                @endforelse
            </ul>
        </div>
        <!-- create a paginate links to navigate between employees page -->
        <div class="block px-12 mt-20">{{ $employees->links() }}</div>
    </div>
@endsection



