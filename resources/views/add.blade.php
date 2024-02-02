@extends('main')

@section('content')
    <x-navbar/>
    <div>
        <div class="relative min-h-[90.85vh] flex items-center justify-center   py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center dark:bg-gray-900">

            <div class="max-w-md w-full space-y-8 p-10 bg-inherit rounded-xl shadow-lg z-10">
                <div class="grid gap-8 grid-cols-1">
                    <div class="flex flex-col">
                        <div class="flex flex-col sm:flex-row items-center">
                            <h2 class="font-semibold text-lg mr-auto text-white">Add recipe Form</h2>
                            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                        </div>
                        <div class="mt-5">
                            <form action="{{route('addRecipe')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form">
                                    <div class="md:space-y-2 mb-3">
                                        <label class="text-xs font-semibold text-white py-2">Recipe Image<abbr class="hidden"
                                                                                                               title="required">*</abbr></label>
                                        <div class="flex items-center py-6">
                                            <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                                                <img class="w-12 h-12 mr-4 object-cover"
                                                     src="{{asset('pics/recipe.jpg')}}"
                                                     alt="Avatar Upload">
                                            </div>
                                            <label class="cursor-pointer ">

                                                <input type="file" class="text-white font-medium" name="image" >
                                            </label>
                                        </div>

                                        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                            <div class="w-full flex flex-col mb-3">
                                                <label class="font-semibold text-white py-2">Recipe Name</label>
                                                <input
                                                    placeholder="Name"
                                                    name="name"
                                                    class="appearance-none block w-full bg-gray-500 text-grey-darker border border-gray-500 rounded-lg h-10 px-4"
                                                    type="text"  id="integration_street_address">
                                            </div>
                                            <div class="w-full flex flex-col mb-3">
                                                <label class="font-semibold text-white py-2">Category<abbr
                                                        title="required">*</abbr></label>
                                                <select
                                                    class="block w-full bg-gray-500 text-grey-darker border border-gray-500 rounded-lg h-10 px-4 md:w-full "
                                                    required="required" name="category" id="integration_city_id">
                                                    <option value="">Select The Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this
                                                    field.</p>
                                            </div>
                                        </div>
                                        <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                            <label class="font-semibold text-white py-2">Instructions</label>
                                            <textarea  name="instructions" id=""
                                                      class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-gray-500 text-grey-darker border border-gray-500 rounded-lg  py-4 px-4"
                                                      placeholder="Enter The instructions" spellcheck="false"></textarea>

                                        </div>
                                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                            <button
                                                class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                                Cancel
                                            </button>
                                            <button
                                                class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">
                                                Save
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <p class="text-red-500 font-medium">{{ $error }}</p>
                                        @endforeach

                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
