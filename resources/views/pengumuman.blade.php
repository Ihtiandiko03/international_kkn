@extends('layout.index')

@section('container')
<!-- Hero Section with Parallax Effect -->
<section class="announcement-hero position-relative overflow-hidden py-5">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row min-vh-25 align-items-center py-5">
            <div class="col-12 text-center text-white">
                <h1 class="display-4 fw-bold mb-3">Announcements</h1>
                <p class="lead mb-0">Stay Updated with International KKN News</p>
            </div>
        </div>
    </div>
    <div class="bg-danger position-absolute top-0 start-0 w-100 h-100" style="opacity: 0.9;"></div>
</section>

<!-- Announcements Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            @foreach($pengumuman as $item)
            <div class="card shadow-sm hover-shadow mb-4 border-0 rounded-3 overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title h4 mb-0 text-danger">{{ $item->title }}</h5>
                        <span class="badge bg-light text-dark rounded-pill">
                            {{ $item->created_at->format('d M Y') }}
                        </span>
                    </div>
                    
                    @if($item->image)
                    <div class="announcement-image mb-3">
                        <img src="{{ asset('storage/' . $item->image) }}" 
                             class="img-fluid rounded" 
                             alt="Announcement Image for {{ $item->title }}">
                    </div>
                    @endif
                    
                    <div class="card-text announcement-content">
                        {!! $item->body !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection