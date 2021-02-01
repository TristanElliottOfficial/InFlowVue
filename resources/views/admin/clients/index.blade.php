@extends('layouts.app')
@section('title', 'Clients')
@section('content')
    <v-header title="{{ __('Clients') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('clients.create') }}" class="button button-default">{{ __('Create New Client') }}</a>
    </v-header>

    <div class="px-10 my-4">
        @if(session('success'))
            <div class="bg-green-600 text-green-100 px-3 py-3 rounded">{{ session('success') }}</div>
        @endif
    </div>

    <div class="px-10">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <!-- Below is an Example of a Table Row -->
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email Address</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                                <!-- Dont edit this -->
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($clients as $client)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm font-medium text-gray-900">{{ $client->name }}</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">{{ $client->email }}</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">{{ $client->phone }}</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('clients.show', $client->id) }}" class="text-indigo-600 hover:text-indigo-900 pr-3"><i class="fal fa-eye"></i></a>
                                        <a href="{{ route('clients.edit', $client->id) }}" class="text-indigo-600 hover:text-indigo-900"><i class="fal fa-pen"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        console.log(document);
    </script>
@endsection
