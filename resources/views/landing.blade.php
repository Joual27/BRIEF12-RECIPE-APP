@extends('main')


<section class="dark:bg-gray-900 min-h-[100vh]">

    <x-navbar/>

    <div class="grid text-center max-w-screen-xl pt-20 pb-8 mt-[2rem] mx-auto xl:text-left lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 ">
        <div class="px-[4%] md: mr-auto place-self-center lg:col-span-7 ">
            <h1
                class=" max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-4xl dark:text-white">
                RECIPE-APP-X: RECIPES AROUND <br> THE WORLD
            </h1>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This
                Discover the diversity of recipes we're offering you here !
            </p>

            <div class= "w-[50%] mx-auto mt-[4rem] flex justify-center flex-col gap-[5px] md:w-[50%] lg:flex-row lg:justify-start lg:mx-0">
                <a href="{{route('/login')}}"
                   class="inline-flex items-center gap-[5px]  w-full px-8 py-3 mb-2 mr-2 text-sm font-medium text-gray-900  border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <img class="w-[20px] h-[20px]" src="{{asset('pics/login.png')}}" alt="hero image">
                    LOGIN
                </a>
                <a href="{{route('/register')}}"
                   class="inline-flex items-center gap-[5px]  w-full px-8 py-3 mb-2 mr-2 text-sm font-medium text-gray-900  border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-inherit dark:text-violet-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <img class="w-[20px] h-[20px]" src="{{asset('pics/register.png')}}" alt="hero image">
                    REGISTER
                </a>
            </div>
        </div>

        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{asset('pics/main-pic.jpg')}}" class="rounded-lg" alt="hero image">
        </div>

    </div>
</section>

