<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>MY.ASANA | Tasks Manager</title>
</head>
<body>
    
    <main class="dark:bg-gray-800 bg-white relative overflow-hidden h-screen">
        <header class="h-24 sm:h-32 flex items-center z-30 w-full">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="uppercase text-gray-800 dark:text-white font-black text-3xl">
                    My.Asana
                </div>
                <div class="flex items-center">
                    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                        {{-- Condition to toggle Login/Logout buttons depending on authentication -- Adapted from welcome.blade.php --}}
                        @auth
                            <a href="{{ route('tasks.index') }}" class="py-2 px-4 m-2 flex hover:bg-pink-500 hover:text-white text rounded-lg">
                                Tâches
                            </a>
                            <a href="{{ route('projects.index') }}" class="py-2 px-4 m-2 flex  hover:bg-pink-500 hover:text-white text rounded-lg">
                                Projets
                            </a>
                            <a href="{{ route('employees.index') }}" class="py-2 px-4 m-2 flex  hover:bg-pink-500 hover:text-white text rounded-lg">
                                Équipe
                            </a>
                            <a href="{{route('logout')}}" class="py-2 px-6 flex border-2 border-pink-500 text-black font-bold hover:bg-pink-500 hover:text-white text rounded-lg">
                                Logout
                            </a>
                        @else
                            <a href="{{route('login')}}" class="py-2 px-6 flex border-2 border-pink-500 text-black font-bold hover:bg-pink-500 hover:text-white text rounded-lg">
                                Login
                            </a>
                        @endauth
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
        <div class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-6 flex relative py-16">
                <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                    <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12">
                    </span>
                    <h1
                        class="font-bebas-neue uppercase text-5xl sm:text-7xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                        Gardez le contrôle
                        <span class="lowcase text-3xl sm:text-5xl">
                            sur vos projets 
                        </span>
                    </h1>
                    <p class="text-sm sm:text-base text-gray-700 dark:text-white mt-3">
                        Votre plateforme de « gestion du travail » web et mobile conçue pour aider les équipes à organiser, suivre et gérer leur travail.
                        <span class="py-0 px-2 rounded-lg border-2 border-pink-500 text-black font-bold"> NOUVEAU</span>   Reliez le travail aux objectifs et automatisez les processus avec l’IA comme collègue.
                    </p>
                    <div class="flex mt-8">
                        <a href="{{ route('tasks.index')}}"
                            class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                            Démarrez
                        </a>
                        
                    </div>
                </div>
                <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
                    <img src="https://www.tailwind-kit.com/images/object/10.png" class="max-w-xs md:max-w-sm m-auto"/>
                </div>
            </div>
        </div>
    </main>

    

</body>
</html>


