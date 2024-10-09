<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Card container with grid layout -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                        <p class="text-gray-600">Card description goes here.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 2</h3>
                        <p class="text-gray-600">Card description goes here.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                        <p class="text-gray-600">Card description goes here.</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 4</h3>
                        <p class="text-gray-600">Card description goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
