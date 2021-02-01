@extends('layouts.app')
@section('title', 'View A Client')
@section('content')
    <v-header title="{{ __('View A Client') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('clients.edit', $client->id) }}" class="button button-warning">{{ __('Update Client') }}</a>
        <a href="{{ route('clients.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10 my-4">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <span class="block py-1 text-3xl text-gray-700">{{ $client->name }}</span>
            <span class="block py-1 text-sm text-gray-500 font-light">{{ $client->email }}</span>
            <span class="block py-1 text-sm text-gray-500 font-light">{{ $client->phone }}</span>
        </div>
    </div>

@endsection
@section('scripts')
    {{-- Custom Javascript --}}
@endsection
