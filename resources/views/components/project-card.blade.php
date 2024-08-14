<!-- Card from https://componentland.com/component/job-listing-card-2  -->

<div class="m-5">
    <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
      {{-- <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
        <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
          <img src="/images/EC25KRDBo-K3w8GexNHSE.png" alt="" class="h-full w-full object-cover text-gray-700" />
        </div>
      </a> --}}
      <div class="col-span-1" ></div>
      <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
        <h3 class="text-sm text-gray-600">{{ $project->employee->user->name}}</h3>
        <a href="{{ route('project.detail', $project)}}" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> {{ $project->title }} </a>
        <p class="overflow-hidden pr-7 text-sm">{{ $project->description }}</p>

  <!-- using class Carbon to remove the time on starts_at/ends_at for the task -->
  <!-- https://stackoverflow.com/questions/28962541/laravel-needs-to-display-only-the-date-not-the-time-using-the-carbon-class -->
  @php
      use Illuminate\Support\Carbon;
  @endphp

        <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
            <div class="">Statut :<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900">
                {{ $project->status }} </span>
            </div>
            <div class="">Début :<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">
                {{ Carbon::parse($project->starts_at)->toDateString() }} </span>
            </div>
            <div class="">Fin :<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">
                {{ Carbon::parse($project->ends_at)->toDateString() }} </span>
            </div>
        </div>
      </div>
    </div>
  </div>
  