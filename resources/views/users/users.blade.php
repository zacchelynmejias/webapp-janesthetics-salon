<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

      <div class="py-12">  
      <!-- Display success message if it exists in the session -->
        @if ( session('status'))
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium"></span>{{session('status')}}
            </div>
        </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <h2 class="float-left"> 
                    {{ $header }}
                </h2>

                <!-- Button to add users -->
                <a href="{{ url('/users/add') }}">
                <button class="float-right rounded-full bg-green-800 p-1 hover:bg-green-700">
                    Add Users
                </button>
                </a>

                 <!-- Table to display users -->
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through users and display information -->
                        @foreach ($users as $user)
                        <tr>
                            <td> {{ $user->name }} </td>
                            <td class="text-center"> {{ $user->email }} </td>
                            <td class="text-center">
                                
                                <!-- Update button -->
                                <a href="{{ url('/users/update/' . $user->id) }}">
                                <button class="rounded-full bg-blue-900 p-1 hover:bg-blue-700">Update</button>
                                </a>

                                 <!--    <a href="{{ url('/users/password/' . $user->id) }}">
                                <button class="rounded-full bg-blue-900 p-1 hover:bg-blue-700">Password</button>
                                </a> -->

                                 <!-- Delete button -->
                                <a href="{{ url('/users/delete/' . $user->id) }}">
                                <button class="rounded-full bg-red-900 p-1 hover:bg-red-700">Delete</button></button>
                                </a>
                            </td>
                            </tr>
                        @endforeach

                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
