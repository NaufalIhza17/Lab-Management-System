<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="grid grid-cols-3 gap-5">
                <a href="/list-items">
                    <x-bladewind::card class="cursor-pointer hover:shadow-gray-300">
                        <svg>...</svg>
                        <span class="text-center ...">See Items</span>
                    </x-bladewind::card>
                </a>

                <a href="/add-item">
                    <x-bladewind::card class="cursor-pointer hover:shadow-gray-300">
                        <svg>...</svg>
                        <span class="text-center ...">Add Items</span>
                    </x-bladewind::card>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
