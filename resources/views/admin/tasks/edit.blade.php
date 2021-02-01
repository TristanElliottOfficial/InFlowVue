@extends('layouts.app')
@section('title', 'Update Task')
@section('content')
    <v-header title="{{ __('Update Task') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('tasks.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" value="{{ $task->name }}" class="form-control @error('name') has-error @enderror" placeholder="Name" />
                    @error('name')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="description" name="description" value="{{ $task->description }}" class="form-control @error('description') has-error @enderror" placeholder="Description" />
                    @error('description')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="button button-default">Update Task</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        console.log(document);
    </script>
@endsection
