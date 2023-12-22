<x-app-layout>
    <!-- Slot for the page header -->
    <x-slot name="header">
        <!-- Page header content -->
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Main content section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Container for the main content with white background and shadow -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Content padding and text color -->
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Welcome message with the authenticated user's name -->
                    <h1>Welcome {{ Auth::user()->name}}!</h1>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
