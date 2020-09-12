<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Academics
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="my-8 text-2xl">
                        Track your Academic Progress,
                    </div>
                </div>
                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6 sm:px-20">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="bg-blue-500 h-2"></div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="flex items-center justify-center">
                <div class="text-gray-600">Made and Maintained by <span class="font-semibold text-green-600">Bret Oreta</span></div>
            </div>
        </div>
    </div>
</x-app-layout>