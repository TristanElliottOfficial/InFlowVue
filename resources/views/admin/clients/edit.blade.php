@extends('layouts.app')
@section('title', 'Update Client')
@section('content')
    <v-header title="{{ __('Update Client') }}" description="{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.') }}">
        <a href="{{ route('clients.index') }}" class="button button-default">{{ __('Return') }}</a>
    </v-header>

    <div class="px-10">
        <div class="bg-white px-6 py-5 rounded shadow-lg mt-4">
            <form action="{{ route('clients.update', $client->id) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" value="{{ $client->name }}" class="form-control @error('name') has-error @enderror" placeholder="Name" />
                    @error('name')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ $client->email }}" class="form-control @error('email') has-error @enderror" placeholder="Email Address" />
                    @error('email')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" id="phone" name="phone" value="{{ $client->phone }}" class="form-control @error('phone') has-error @enderror" placeholder="Phone Number" />
                    @error('phone')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="button button-default">Update Client</button>
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
