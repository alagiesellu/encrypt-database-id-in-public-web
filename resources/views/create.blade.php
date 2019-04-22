@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Object</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action="{{ route('obj.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="message" class="col-md-3 col-form-label text-md-right">{{ __('Message') }}</label>

                                <div class="col-md-7">
                                    <input id="message" type="text" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus>

                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="message" class="col-md-3 col-form-label text-md-right">{{ __('Obj') }}</label>

                                <div class="col-md-7">
                                    <select name="obj" id="obj" multiple class="form-control{{ $errors->has('obj') ? ' is-invalid' : '' }}">
                                        @foreach($objs as $obj)
                                            <option value="{{ $obj->id() }}">{{ $obj->message }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('obj'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('obj') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Store') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
