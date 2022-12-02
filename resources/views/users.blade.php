<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </x-slot>

    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

    {{--                    <div class="card-body">--}}
    {{--                        @if (session('status'))--}}
    {{--                            <div class="alert alert-success" role="alert">--}}
    {{--                                {{ session('status') }}--}}
    {{--                            </div>--}}
    {{--                        @endif--}}

    {{--                        <a href="{{ route('register') }}"--}}
    {{--                           class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>--}}
    {{--                        --}}{{-- @foreach ($data as $user)--}}
    {{--                            <div class="alert alert-info">--}}
    {{--                                <h3>{{ $user->name }}</h3>--}}
    {{--                            </div>--}}
    {{--                        @endforeach --}}
    {{--                        <table class="table">--}}
    {{--                            @if(session('success'))--}}
    {{--                                <div class="alert alert-success">--}}
    {{--                                    {{ session('success') }}--}}
    {{--                                </div>--}}
    {{--                            @endif--}}
    {{--                            <thead>--}}
    {{--                            <tr>--}}
    {{--                                <th scope="col">#</th>--}}
    {{--                                <th scope="col">Name</th>--}}
    {{--                                <th scope="col">Email</th>--}}

    {{--                                <th scope="col">Info</th>--}}
    {{--                            </tr>--}}
    {{--                            </thead>--}}
    {{--                            <tbody>--}}
    {{--                            @foreach ($data as $user)--}}

    {{--                                <tr>--}}
    {{--                                    <th scope="row">{{ $user->id }}</th>--}}
    {{--                                    <td>{{ $user->name }}</td>--}}
    {{--                                    <td>{{ $user->email }}</td>--}}

    {{--                                    <td><a href="{{ route('user-info', $user->id) }}" class="btn btn-light">Подробнее</a></td>--}}
    {{--                                </tr>--}}

    {{--                            @endforeach--}}
    {{--                            </tbody>--}}
    {{--                        </table>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Info
                            </th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach ($data as $user)

                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td>
                                    <a href="{{ route('user-delete', $user->id) }}" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Удалить</a>
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
