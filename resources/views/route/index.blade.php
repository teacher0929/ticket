@extends('layouts.app')
@section('title')
    @lang('app.routes')
@endsection
@section('content')
    <div class="row g-4 mb-3">
        <div class="col-sm-4 col-lg-3">
            <form action="{{ route('routes.index') }}">

            </form>
        </div>
        <div class="col">
            @foreach($routes as $route)
                <div class="mb-2">
                    @include('app.route')
                </div>
            @endforeach
        </div>
    </div>

    <div>{{ $routes->links() }}</div>
@endsection
