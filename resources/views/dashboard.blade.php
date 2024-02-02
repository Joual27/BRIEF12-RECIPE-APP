@extends('main')


@section('content')
   <x-navbar/>

   @if($message = \Illuminate\Support\Facades\Session::get('success'))
      <div class="w-full flex justify-center items-center">
          <div class="w-[40%] bg-green-500 items-center justify-center">
              <p class="text-white font-medium">{{$message}}</p>
          </div>
      </div>
   @endif
   <div class="dark:bg-gray-900 w-full h-full pb-[5rem] pt-[1rem] min-h-[90.85vh]">
       <div class=" w-[100%] flex my-[2rem] items-center justify-center gap-[1.5rem]">
           <div class="w-[30%]  relative">
               <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                   <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                   </svg>
               </div>
               <input type="search" id="searchInput" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-violet-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:outline-none" placeholder="Search Recipes, Categories , Tags..." >
           </div>
           <button class="bg-violet-400 text-white font-medium px-[0.5rem] py-[0.4rem] rounded-lg"><a href="{{route('add')}}">Add New Recipe</a></button>

       </div>
       <div class="flex w-[80%] mx-auto">
           <div class="max-w-2xl mx-auto ">

               <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                   <a href="#">
                       <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                   </a>
                   <div class="bg-violet-500 text-white font-medium w-[30%] mx-auto rounded-lg px-[0.25rem] py-[0.25rem] flex justify-center mt-[1rem]">
                       ITALIAN
                   </div>
                   <div class="p-5">
                       <a href="#">
                           <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                       </a>
                       <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

                   </div>
                   <div class="w-full justify-center flex gap-[10px] mb-[1.5rem]">
                       <button class="bg-green-600 text-white font-semibold px-[0.7rem] py-[0.5rem] rounded-lg"><a href="#">update</a></button>
                       <button class="bg-red-600 text-white font-semibold px-[0.7rem] py-[0.5rem] rounded-lg"><a href="#">delete</a></button>
                   </div>
               </div>
           </div>
           <div class="max-w-2xl mx-auto ">

               <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                   <a href="#">
                       <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                   </a>
                   <div class="bg-violet-500 text-white font-medium w-[30%] mx-auto rounded-lg px-[0.25rem] py-[0.25rem] flex justify-center mt-[1rem]">
                       ITALIAN
                   </div>
                   <div class="p-5">
                       <a href="#">
                           <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                       </a>
                       <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

                   </div>
                   <div class="w-full justify-center flex gap-[10px] mb-[1.5rem]">
                       <button class="bg-green-600 text-white font-semibold px-[0.7rem] py-[0.5rem] rounded-lg"><a href="#">update</a></button>
                       <button class="bg-red-600 text-white font-semibold px-[0.7rem] py-[0.5rem] rounded-lg"><a href="#">delete</a></button>
                   </div>
               </div>
           </div>
           <div class="max-w-2xl mx-auto ">

               <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                   <a href="#">
                       <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                   </a>
                   <div class="bg-violet-500 text-white font-medium w-[30%] mx-auto rounded-lg px-[0.25rem] py-[0.25rem] flex justify-center mt-[1rem]">
                       ITALIAN
                   </div>
                   <div class="p-5">
                       <a href="#">
                           <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                       </a>
                       <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

                   </div>
                   <div class="w-full justify-center flex gap-[10px] mb-[1.5rem]">
                       <button class="bg-green-600 text-white font-semibold px-[0.7rem] py-[0.5rem] rounded-lg"><a href="#">update</a></button>
                       <button class="bg-red-600 text-white font-semibold px-[0.7rem] py-[0.5rem] rounded-lg"><a href="#">delete</a></button>
                   </div>
               </div>
           </div>

       </div>
   </div>



@endsection
