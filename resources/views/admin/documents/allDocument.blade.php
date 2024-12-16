@extends('admin.layouts.master')

@section('title')
    || All Documents
@endsection

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">

            @include('admin.layouts.sidebar')

            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">

                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="far fa-user"></i>All Documents</h3>

                        <div class="wsus__dashboard_profile">

                            @if (count($alldocuments) > 0)
                                @foreach ($alldocuments as $item)
                                    <div class="wsus__dash_pro_area mb-3">


                                        <div class="container my-4">


                                            <div class="mb-4">
                                                <a href="{{ route('admin.public.document.show', $item->id) }}" class="text-primary">
                                                <div class="card-body">
                                                    <!-- Header Section -->
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <h5 class="card-title mb-0">{{ $item->user->name }}</h5>



                                                        @if ($item->is_approved === 'approved')
                                                            <span
                                                                class="badge bg-success text-uppercase">{{ $item->is_approved }}</span>
                                                              
                                                        @else
                                                            <span class="badge bg-info text-uppercase">{{ $item->is_approved }}</span>
                                                        @endif

                                                     

                                                    </div>

                                                    <small
                                                        class="text-muted">{{ $item->created_at->format('M d, Y h:i A') }}</small>
                                                    -
                                                    <small
                                                        class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                                    <div>
                                                        <span
                                                            class="badge bg-info text-uppercase mt-3">{{ $item->category->name }}</span>
                                                        <div class="mb-3">
                                                            <span
                                                                class="badge bg-info text-uppercase">{{ $item->source }}</span>
                                                        </div>
                                                    </div>

                                                    <p class="card-text text-truncate"
                                                        style="max-height: 80px; overflow: hidden;">
                                                        {!! \Illuminate\Support\Str::limit($item->description, 1000) !!}
                                                    </p>
                                                    <a href="{{ route('admin.public.document.show', $item->id) }}"
                                                        class="text-primary">See more...</a>

                                                    <!-- Footer Section -->
                                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                                        <div>

                                                        </div>

                                                        {{-- @if ($item->user_id === auth()->user()->id) --}}
                                                            <div>
                                                                <a href="{{ route('admin.public.document.edit', $item->id) }}"
                                                                    class="btn btn-warning btn-sm">
                                                                    <i class="bi bi-pencil"></i>
                                                                </a>
                                            

                                                                <a href="{{ route('admin.documents.destroy', $item->id) }}" class="delete-item btn btn-warning btn-sm">
                                                                    <i class="bi bi-trash"></i>
                                                                </a>

                                                            </div>
                                                        {{-- @endif --}}


                                                    </div>
                                                </div>
                                            </a>
                                            </div>




                                        </div>

                                    </div>
                                @endforeach
                            @else
                                <h3>No Data Found</h3>
                            @endif



                            {{ $alldocuments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
