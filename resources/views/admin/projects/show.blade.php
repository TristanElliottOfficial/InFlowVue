@extends('layouts.app')
@section('title', 'View A Project')
@section('content')
    <v-header title="{{ __('View A Project') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('projects.edit', $project->id) }}" class="button button-warning">{{ __('Update Project') }}</a>
        <a href="{{ route('projects.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10 my-4">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <span class="block py-1 text-3xl text-gray-700">{{ $project->name }}</span>
            <span class="block py-1 text-sm text-gray-500 font-light">{{ $project->description }}</span>
        </div>
    </div>

@endsection
@section('scripts')
    {{-- Custom Javascript --}}
@endsection
