@extends('layouts.asana-app')

@section('title', 'My.Asana | Projets')


@section('content')
    
    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase">{{ $project->title}}</h1>
    
    <div class="m-10">
        <div class="mx-2 mt-10 grid max-w-[900px] min-h-[400px] grid-cols-12 rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
        <div class="col-span-1" ></div>
        <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
            <h3 class="text-m text-gray-600">{{ $project->title}}</h3>
            <p class="mb-3 pr-7 text-2xl font-semibold uppercase"> {{ $project->title }} </p>
            <p class="pr-7 text-sm">{{ $project->description }}</p>
      
            <div class="mt-5 flex flex-row text-m font-medium text-gray-500">
              <div class="">Statut :<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900">{{ $project->status }} </span></div>
              <div class="">Début :<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">{{ $project->starts_at }} </span></div>
              <div class="">Fin :<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">{{ $project->ends_at }} </span></div>

              <!-- icons: Edit / Delete / Back -->
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA33F7"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
              </a>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA33F7"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
              </a>
              <a href="{{ route('projects.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA33F7"><path d="M360-240 120-480l240-240 56 56-144 144h488v-160h80v240H272l144 144-56 56Z"/></svg>
              </a>

            </div>
          </div>
        </div>
    </div>



@endsection