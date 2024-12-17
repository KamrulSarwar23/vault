@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12 text-center py-5 bg-info text-light">
        <h2>Stay Organized, Stay Productive With Vault</h2>
        <h4>Manage your data efficiently and achieve your goals effortlessly.</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card mb-3 shadow-sm">

                <div class="card-body">
                <a class="btn btn-success mb-2" href="{{ route('public.document') }}">back</a>
                    <!-- Header Section -->
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">{{ $item->user->name }}</h5>
                        @if ($item->status === 'private')
                        <span class="badge bg-success text-uppercase">{{ $item->status }}</span>
                    @else
                        <span class="badge bg-info text-uppercase">{{ $item->status }}</span>
                    @endif
                    </div>
                    <small class="text-muted">{{ $item->created_at->format('M d, Y h:i A') }}</small> -
                     <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                  
                    <!-- Category and Source -->
                    <div class="mt-2">
                        <span class="badge bg-info text-uppercase">{{ $item->category->name }}</span> <br>
                        <span class="badge bg-info text-uppercase">{{ $item->source}}</span>
                    </div>

                    <!-- Description -->
                    <p class="card-text mt-3 description">
                        {!! $item->description !!}
                    </p>

                    <div class="my-3">

                        @foreach ($item->files as $file)
                            <div>
                                <a href="{{ asset($file->files) }}" target="_blank">
                                    <img class="my-5 mb-5" width="100%" height="500px"
                                        src="{{ asset($file->files) }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

@endsection
