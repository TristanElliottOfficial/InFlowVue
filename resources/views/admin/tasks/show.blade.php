@extends('layouts.app')
@section('title', 'View A Task')
@section('content')
    <v-header title="{{ __('View A Task') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('tasks.edit', $task->id) }}" class="button button-warning">{{ __('Update Task') }}</a>
        <a href="{{ route('tasks.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10 my-4">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <span class="block py-1 text-3xl text-gray-700">{{ $task->name }}</span>
            <span class="block py-1 text-sm text-gray-500 font-light">{{ $task->description }}</span>
        </div>
    </div>

@endsection
@section('scripts')
    {{-- Custom Javascript --}}
@endsection
