@extends('layouts.asana-app')

@section('title', 'My.Asana | Projets')


@section('content')
    <h1 class="text-center text-2xl mt-10 text-pink-500 font-bold font-bebas-neue uppercase">{{ $project->title}}</h1>

    <div class="relative px-30 py-5">
    <div class="relative py-2">
        
        <div class="w-8/12 mx-auto px-20 py-5 m-3 rounded-xl border border-gray-200 shadow-lg">
            <dl class="divide-y divide-gray-100">
            <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">

              <!-- EDIT icon to display form -->
              <div class="flex py-5">
                <a href="{{ route('project.edit', $project) }}" class="w-20 text-pink-300 text-lg">
                  Modifier
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-pink-300"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                </a>
              </div>
              <!-- Photo section -->
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>

            </div>

           

            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-lg font-medium leading-6 text-gray-900">Chef de projet</dt>
                <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <span class="text-lg flex-grow">{{ $project->employee->user->name}}</span>
                </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-lg font-medium leading-6 text-gray-900">Nom du projet</dt>
                <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <span class="text-lg flex-grow">{{ $project->title}}</span>
                </dd>
            </div>

            @php
                use Illuminate\Support\Carbon;
            @endphp

            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-lg font-medium leading-6 text-gray-900">Status</dt>
                <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <span class="text-lg flex-grow">{{ $project->status }}</span>
                </dd>
            </div>
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-lg font-medium leading-6 text-gray-900">Date de début</dt>
                <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <span class="text-lg flex-grow"> {{ Carbon::parse($project->starts_at)->toDateString() }} </span>
                </dd>
              </div>
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-lg font-medium leading-6 text-gray-900">Date de fin</dt>
                <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <span class="text-lg flex-grow">{{ Carbon::parse($project->ends_at)->toDateString() }}</span>
                </dd>
              </div>
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-lg font-medium leading-6 text-gray-900">Description</dt>
                <dd class="mt-1 flex text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <span class="text-lg flex-grow">{{ $project->description }}</span>
                </dd>
              </div>

              <!-- DELETE icon to display form -->
            <form action="{{ route('project.destroy', $project) }}" method="post" class="flex justify-end py-5">
              @method('delete')
              @csrf
              <input type="submit" value="Supprimer" class="w-24 text-pink-300 text-lg">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-pink-300"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
            </form>
              
            </dl>
        </div>
        <!-- Icons button -->
          <div class="flex justify-end mx-auto w-8/12 h-20 gap-12 ">

            <!-- BACK Arrow icon to return to page -->
            <div class="flex px-20">
                <a href="{{ route('projects.index') }}" class="w-20 text-[#EA33F7] text-lg">
                    Retour
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA33F7"><path d="M360-240 120-480l240-240 56 56-144 144h488v-160h80v240H272l144 144-56 56Z"/></svg>
                </a>
            </div>

          </div>
      </div>
@endsection

