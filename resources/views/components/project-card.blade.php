<!-- Card from https://componentland.com/component/job-listing-card-2  -->


          <tr>
            <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
              <div class="flex items-center">
                <div class="h-11 w-11 flex-shrink-0">
                  <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-4">
                  <div class="font-medium text-gray-900">{{ $project->employee->user->name}}</div>
                  <div class="mt-1 text-gray-500">{{ $project->employee->user->email }}</div>
                </div>
              </div>
            </td>
            <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500 bg-gray-50">
              <a href="{{ route('project.detail', $project) }}">
                <div class="text-gray-900">{{ $project->title }}</div>
                <div class="mt-1 text-gray-500">{{ Str::substr($project->description, 0, 60) }}...</div>
              </a>
              </td>
            <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
              <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ $project->status }}</span>
            </td>

            @php
                use Illuminate\Support\Carbon;
            @endphp

            <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
              {{ Carbon::parse($project->ends_at)->toDateString() }}
            </td>
            <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
              <a href="{{ route('project.detail', $project) }}" class="text-indigo-600 hover:text-indigo-900">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA33F7"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
              </a>
            </td>
          </tr>

     





  