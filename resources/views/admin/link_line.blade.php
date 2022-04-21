@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('เเก้ไข  LinK Line') }}</div>
                    <br>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #fbf3f3">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('link-line.update',$line[0]->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Url Line') }}</label>

                                <div class="col-md-6">
                                    <input id="line" type="url"
                                        class="form-control @error('line') is-invalid @enderror" name="line"
                                        value="{{ $line[0]->link }}" required placeholder="Url Line" autofocus>
                                    @error('line')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('บันทึก') }}
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
