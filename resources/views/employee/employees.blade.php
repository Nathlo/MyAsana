@extends('layouts.asana-app')

@section('title', 'My Asana | Équipes')


@section('content')

    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase mt-8">Mes équipes</h1>
            
    <div class="bg-white py-15 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">La Force du <br>travail en équipe</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
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



