<!-- https://componentland.com/component/vertical-profile-card-2 -->
@extends('layouts.asana-app')

@section('title', 'My.Asana | Profile')


@section('content')

    <h1 class="text-center text-3xl font-bold font-bebas-neue uppercase">{{ $employee->user->name}}</h1>
    
    <div class="mx-auto my-8 flex max-w-sm flex-col items-center gap-3 rounded-xl border border-gray-100 pt-8 text-gray-900 shadow-lg">
    <img class="block h-12 w-12 max-w-full rounded-full align-middle" src="{{ $employee->photo}}" alt="Profile picture" />
    <div class="flex flex-col items-center text-center mb-2">
        <h4 class="text-lg font-medium sm:m-0">{{ $employee->user->name}}</h4>
      <p class="font-sans text-sm tracking-normal text-gray-500">Lorem, ipsum dolor.</p>
    </div>
    <div class="flex">
      <button class="mx-1 rounded-lg bg-black py-1.5 px-4 text-sm text-white outline-none transition focus:ring active:bg-blue-500 active:text-white">Edit Profile</button>
      <button class="mx-1 rounded-lg border bg-white py-1.5 px-4 text-gray-400 outline-none transition focus:ring active:bg-blue-500 active:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm-.67 2L12 10.75L5.67 6ZM19 18H5a1 1 0 0 1-1-1V7.25l7.4 5.55a1 1 0 0 0 .6.2a1 1 0 0 0 .6-.2L20 7.25V17a1 1 0 0 1-1 1Z" /></svg>
      </button>
    </div>
    <div class="mt-4 flex w-full justify-between px-2 space-x-2">
      <button class="flex items-center rounded-lg bg-blue-500 px-6 py-1 text-sm font-medium text-white outline-none transition focus:ring active:bg-blue-500 active:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        Posts
      </button>
      <button class="flex items-center rounded-lg px-4 py-1 text-sm font-medium text-gray-400 outline-none transition focus:ring active:bg-blue-500 active:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
        </svg>
        Comments
      </button>
      <button class="flex items-center rounded-lg px-4 py-1 text-sm font-medium text-gray-400 outline-none transition focus:ring active:bg-blue-500 active:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        About
      </button>
    </div>
    <div class="h-96 w-full bg-gray-100 px-2">
      <div class="mt-3 flex h-20 w-full flex-col rounded-lg bg-white px-2 shadow">
        <div class="mt-2 h-4 w-1/4 rounded-lg bg-gray-200"></div>
        <div class="mt-2 h-4 w-full rounded-lg bg-gray-200"></div>
        <div class="mt-2 h-4 w-full rounded-lg bg-gray-200"></div>
      </div>
      <div class="mt-3 flex h-20 w-full flex-col rounded-lg bg-white px-2 shadow">
        <div class="mt-2 h-4 w-1/4 rounded-lg bg-gray-200"></div>
        <div class="mt-2 h-4 w-full rounded-lg bg-gray-200"></div>
        <div class="mt-2 h-4 w-full rounded-lg bg-gray-200"></div>
      </div>
      <div class="mt-3 flex h-20 w-full flex-col rounded-lg bg-white px-2 shadow">
        <div class="mt-2 h-4 w-1/4 rounded-lg bg-gray-200"></div>
        <div class="mt-2 h-4 w-full rounded-lg bg-gray-200"></div>
        <div class="mt-2 h-4 w-full rounded-lg bg-gray-200"></div>
      </div>
    </div>
  </div>
  

    
@endsection















{{-- {{ $employee->user->name }} <br>
{{ $employee->position }} <br>
{{ $employee->user->email }} <br>
{{ $employee->phone }} <br>
{{ $employee->photo }} <br> --}}