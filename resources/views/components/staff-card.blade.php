<!-- Card from https://tailwindui.com/components/marketing/sections/team-sections  -->

<li>
    <div class="flex items-center gap-x-6">
    <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
    <div>
        <a href="{{ route('staff.detail', $employee)}}">
            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $employee->user->name}}</h3>
        </a>
        <p class="text-sm font-semibold leading-6 text-indigo-600">{{ $employee->position }}</p>
        <p class="text-sm font-semibold leading-6 text-gray-600">{{ $employee->phone }}</p>
    </div>
    </div>
</li>
        
 
