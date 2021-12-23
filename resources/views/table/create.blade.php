<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Table') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('tables.store')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label class="block" for="name">Table Name</label>
                            <input type="text" name="name" value="{{old('name')}}" id="name" class="focus">
                            <p class="text-red-600">{{$errors->first("name")}}</p>
                        </div>
                        <div>
                            <button class="px-4 py-2 bg-gray-600" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
