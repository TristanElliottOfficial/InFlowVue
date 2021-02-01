@extends('layouts.app')
@section('title', 'View A User')
@section('content')
    <v-header title="{{ __('View A User') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('users.edit', $user->id) }}" class="button button-warning">{{ __('Update User') }}</a>
        <a href="{{ route('users.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10 my-4">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <span class="block py-1 text-3xl text-gray-700">{{ $user->name }}</span>
            <span class="block py-1 text-sm text-gray-500 font-light">{{ $user->email }}</span>
            <span class="block py-1 text-sm text-gray-500 font-light">{{ $user->created_at }}</span>
        </div>
    </div>

@endsection
@section('scripts')
    {{-- Custom Javascript --}}
@endsection
