@extends('layout.index')

@section('container')
<section class="bg-danger text-white text-center py-5 mt-5">
    <div class="container">
        <h1 class="display-4">Announcements</h1>
        <p class="lead">Announcements about International KKN</p>
    </div>
</section>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4 mt-5"></h1>
            @foreach($pengumuman as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <div class="card-text">{!! $item->body !!}</div>
                    @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="Announcement Image">
                    @endif
                    <p class="card-text"><small class="text-muted">Posted on {{ $item->created_at->format('d M Y') }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection