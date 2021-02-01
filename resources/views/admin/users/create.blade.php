@extends('layouts.app')
@section('title', 'Create New User')
@section('content')
    <v-header title="{{ __('Create New User') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('users.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') has-error @enderror" placeholder="Name" />
                    @error('name')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') has-error @enderror" placeholder="Email Address" />
                    @error('email')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') has-error @enderror" placeholder="Password" />
                    @error('password')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="button button-default">Create New User</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
    {{-- Custom Javascript --}}
@endsection
