<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
        <div class="mt-24">
            <div class="flex items-center justify-center">
                <div class="text-gray-600">Made and Maintained by <span class="font-semibold text-green-600">Bret Oreta</span></div>
            </div>
        </div>
    </div>
</x-app-layout>
