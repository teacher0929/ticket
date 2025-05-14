@extends('layouts.app')
@section('title')
    @lang('app.routes')
@endsection
@section('content')
    <div class="row g-4 mb-3">
        <div class="col-sm-4 col-lg-3">
            <form action="{{ route('routes.index') }}">
                <input type="hidden" name="transportType" value="{{ $f_transportType }}">

                <div class="mb-3">
                    <label for="transport" class="form-label">@lang('app.transport')</label>
                    <select id="transport" class="form-select" name="transport">
                        <option value>-</option>
                        @foreach($transports as $transport)
                            <option value="{{ $transport->id }}" {{ $transport->id == $f_transport ? 'selected' : '' }}>
                                {{ $transport->getName() }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fromStation" class="form-label">@lang('app.fromStation')</label>
                    <select id="fromStation" class="form-select" name="fromStation">
                        <option value>-</option>
                        @foreach($stations as $fromStation)
                            <option value="{{ $fromStation->id }}" {{ $fromStation->id == $f_fromStation ? 'selected' : '' }}>
                                {{ $fromStation->getName() }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="toStation" class="form-label">@lang('app.toStation')</label>
                    <select id="toStation" class="form-select" name="toStation">
                        <option value>-</option>
                        @foreach($stations as $toStation)
                            <option value="{{ $toStation->id }}" {{ $toStation->id == $f_toStation ? 'selected' : '' }}>
                                {{ $toStation->getName() }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="row g-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">@lang('app.filter')</button>
                    </div>
                    <div class="col">
                        <a href="{{ route('routes.index', ['transportType' => $f_transportType]) }}" class="btn btn-secondary w-100">@lang('app.clear')</a>
                    </div>
                </div>
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
