@extends('layout.app')
@section('titre')
    CDEJ - BLOG
@endsection
@php
    $active = 'blog';
@endphp

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Les plus récents</h6>
                <h1 class="mb-5">Articles publiés récemment</h1>
            </div>
            <div class="row g-4">
                @forelse($posts as $post)
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{ route('lire-blog', $post) }}">
                            <div class="card mb-4 box-shadow" style="overflow: hidden">
                                <img class="card-img-top" src="{{ Storage::url($post->photo) }}" alt="Card image cap"
                                    style="max-height: 300px;min-height: 300px">
                                <div class="card-body">
                                    <p class="card-text" style="text-transform: uppercase; font-weight: bold">
                                        {{ $post->titre }}</p>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <small class="text-muted">{{ $post->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                @empty
                    <div class="col-lg-12">
                        <div class="alert alert-success text-center text-dark">Aucun article publié pour le moment
                            !</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
