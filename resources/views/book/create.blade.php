<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BookIn Time') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('bookings.store')}}" method="post">
                        @csrf
                        <div>
                            <div class="form-group">
                                <label for="firstname">{{__("Start Time")}}</label>
                                <input class="form-control" id="example-time" type="time" name="start_time">
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label for="firstname">{{__("End Time")}}</label>
                                <input class="form-control" id="example-time" type="time" name="end_time">
                            </div>
                        </div>
                        <div>
                            <button class="px-4 py-2 bg-gray-600" type="submit" href="{{route('bookings.index')}}">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
                           