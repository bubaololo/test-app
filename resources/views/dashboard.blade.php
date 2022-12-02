<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-6 overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap gap-x-10">

                @foreach ($posts as $post)

                    <div class="block max-w-sm my-6 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $post['title'] }}</h5>
                        <p class="font-normal text-gray-700 ">{{ $post['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
