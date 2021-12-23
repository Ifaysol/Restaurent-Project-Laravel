<x-app-layout>
    <x-slot name="header">
        <div class=" flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Table List') }}
            </h2>
            <a  class="px-4 py-2 bg-green-600" href="{{route("tables.create")}}">Create Table</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('tables.index')}}" method="post">
                        @csrf
                        <table class="w-full">
                            <thead>
                              <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Table Name</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Action</th>
                              </tr>
                            </thead>
                            <tbody class="bg-white">
                                @forelse ($list as $table)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">
                                      <div class="flex items-center text-sm">
                                          <div>
                                            <p class="font-semibold text-black">{{$table->id}}</p>
                                           
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-4 py-3 text-ms font-semibold border">{{$table->name}}</td>
                                      <td class="px-4 py-3 text-xs border">{{$table->is_booking? "Booked" : "Availavle"}}</td>
                                      <td class="px-4 py-3 text-sm border">
                                        @if (!$table->is_booking)
                                        <a class="px-2 py-1 bg-green-600 complete-table" href= "{{route('bookings.create')}}">BookIn</a>
                                        @endif
                                         
                                      </td>
                                    </tr>  
                                @empty
                                    <tr>
                                        <td class="col-span-1">{{__("No Table Found")}}</td>
                                    </tr>
                                @endforelse
                             
                                
                              </tbody>
                            </table>
                         
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </x-app-layout>
                                    
