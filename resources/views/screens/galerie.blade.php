@extends('layout.app')
@section('galerie')
    <link rel="stylesheet" href="{{ asset('plugins/maginific-popup/magnific-popup.css') }}" />
    <style>
        .btn.btn-outline-primary.active {
            color: white;
        }

        .btn.btn-outline-primary:hover {
            color: white;
        }
    </style>
@endsection
@section('titre')
    CDEJ - GALERIE
@endsection
@php
    $active = 'galerie';
@endphp
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            @if ($photos)
                <div class="portfolio-menu mt-2 mb-4">
                    <ul>
                        <li class="btn btn-outline-primary active" data-filter="*">Tout</li>
                        @foreach ($categories as $categorie)
                            <li class="btn btn-outline-primary" data-filter=".503{{ $categorie->id }}">
                                {{ $categorie->categorie }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="portfolio-item row">
                    @foreach ($photos as $photo)
                        <div class="item 503{{ $photo->categorie_id }} col-lg-3 col-md-4 col-6 col-sm p-1">
                            <a href="" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{ asset('storage/' . $photo->chemin) }}"
                                    alt="{{ $photo->nom }}"
                                    style="min-height: 250px; min-width: 100%; max-height: 250px;">
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning">Aucune publication pour le moment.</div>
            @endif
        </div>

    </div>
@endsection
@section('script')
    <script src="{{ asset('plugins/isotope.pkgd/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('plugins/maginific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $('.portfolio-menu ul li').click(function() {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection
