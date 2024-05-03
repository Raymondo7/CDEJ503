@extends('layout.app')
@section('titre')
    CDEJ - POST
@endsection
@php
    $active = 'blog';
@endphp
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-3">
        <!-- Content Wrapper. Contains page content -->
        <section class="content">
            <a href="{{ route('blog') }}" class="btn btn-primary mb-1 ms-2">
                <i class="fa fa-arrow-left" aria-hidden="true">Retour</i></a>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 border border-1 mx-auto p-2">
                            <h1 class="p-3 border" style="text-transform: uppercase; ">
                                {{ $post->titre }}
                            </h1>
                            <p>{!! $post->contenu !!}</p>
                        </div>
                        <div class="col-md-4 border border-1 mx-auto p-0" style="height: fit-content">
                            <img src="{{ asset('storage/' . $post->photo) }}" class="img-fluid rounded-top"
                                alt="post picture" style="width: 100%;" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
