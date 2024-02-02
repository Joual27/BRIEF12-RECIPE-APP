<div>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse cursor-pointer">
                <span class="self-center text-[1.1rem] font-semibold whitespace-nowrap dark:text-violet-400">RECIPE-APP-X</span>
            </a>
           @auth
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <div class="">
                        <a href=""
                           class="hidden md:inline-flex items-center gap-[5px] w-full px-6 py-3 mb-2 mr-2 text-sm  font-medium text-gray-900  border border-gray-200 rounded-lg  focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit  dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <img class="w-[20px] h-[20px]" src="{{asset('pics/login.png')}}" alt="hero image">
                            LOGIN
                        </a>
                    </div>

                    <button  id="navToggler" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" >
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
            @else
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <div class="">
                        <a href=""
                           class="hidden md:inline-flex items-center gap-[5px] w-full px-6 py-3 mb-2 mr-2 text-sm  font-medium text-gray-900  border border-gray-200 rounded-lg  focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit  dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <img class="w-[20px] h-[20px]" src="{{asset('pics/login.png')}}" alt="hero image">
                            LOGOUT
                        </a>
                    </div>

                    <button  id="navToggler" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" >
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
            @endauth

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="" class="block py-2 px-3 md:p-0 text-white bg-violet-400 rounded md:bg-transparent md:text-blue-700 md:dark:text-violet-400" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-400 md:dark:hover:text-violet-400 dark:text-white dark:hover:bg-gray-700 dark:hover:text-violet-400 md:dark:hover:bg-transparent dark:border-gray-700">RECIPES</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-400 md:dark:hover:text-violet-400 dark:text-white dark:hover:bg-gray-700 dark:hover:text-violet-400 md:dark:hover:bg-transparent dark:border-gray-700">CATEGORIES</a>
                    </li>

                </ul>
            </div>
        </div>


    </nav>
</div>
