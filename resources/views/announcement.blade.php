<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Announcement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">  
                    
                <h2 class="float-left"> 
                    Announcement Management
                </h2>

                
                <button class="float-right rounded-full bg-green-800 p-1 hover:bg-green-700">
                    Add Announcement
                </button>
                </a>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                            <td> img.jpg</td>
                            <td class="text-center"> PROMO </td>
                            <td class="text-center">
                                
                                
                                <button class="rounded-full bg-blue-900 p-1 hover:bg-blue-700">Update</button>
                                
                                <button class="rounded-full bg-red-900 p-1 hover:bg-red-700">Delete</button></button>
                                
                            </td>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
