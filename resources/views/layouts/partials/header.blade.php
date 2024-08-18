<header class="h-24 sm:h-32 flex items-center z-30 w-full">
    <div class="container mx-auto px-6 flex items-center justify-between">
        <div class="uppercase text-gray-800 dark:text-white font-black text-3xl">
            <a href="{{ route('accueil') }}">My.Asana</a>
        </div>
        <div class="flex items-center">
            <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                <a href="{{ route('projects.index') }}" class="py-2 px-4 m-2 flex  hover:bg-pink-500 hover:text-white text rounded-lg">
                    Projets
                </a>
                
                <a href="{{ route('tasks.index') }}" class="py-2 px-4 m-2 flex hover:bg-pink-500 hover:text-white text rounded-lg">
                    Tâches
                </a>
                
                <a href="{{ route('employees.index') }}" class="py-2 px-4 m-2 flex  hover:bg-pink-500 hover:text-white text rounded-lg">
                    Équipe
                </a>
                
                <a href="{{route('logout')}}" class="py-2 px-2 flex border-2 border-pink-500 text-black font-bold hover:bg-pink-500 hover:text-white text rounded-lg">
                    Logout
                </a>
            </nav>
            <button class="lg:hidden flex flex-col ml-4">
                <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                </span>
                <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                </span>
                <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                </span>
            </button>
        </div>
    </div>
</header>
