@extends('layouts.app')
@section('title')
    @lang('app.edit')
@endsection
@section('content')
    <div class="row justify-content-center my-5">
        <div class="col-8 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="h3 text-center mb-3">
                        @lang('app.edit')
                    </div>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                @lang('app.name') <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name" value="{{ $user->name }}" required autofocus>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="surname" class="form-label">
                                @lang('app.surname') <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname"
                                   name="surname" value="{{ $user->surname }}" required>
                            @error('surname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">
                                @lang('app.username') <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                                   name="username" value="{{ $user->username }}" required>
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                @lang('app.password')
                            </label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                   name="password">
                            <div class="form-text">
                                @lang('app.passwordHint')
                            </div>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">@lang('app.update')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
