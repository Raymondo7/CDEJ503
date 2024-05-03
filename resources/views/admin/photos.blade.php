@extends('layout.admin')
@section('nouveau-css')
    <link rel="stylesheet" href="{{ asset('plugins/maginific-popup/magnific-popup.css') }}" />
@endsection
@section('body-element')
    sidebar-mini
@endsection
@section('titre')
    Nouveau Post
@endsection
@section('admin-content')
    <div class="content-wrapper pt-1">
        @if ($photos)
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="portfolio-menu mt-2 mb-4">
                                <ul>
                                    <li class="btn btn-outline-dark active" data-filter="*">Tout</li>
                                    @foreach ($categories as $categorie)
                                        <li class="btn btn-outline-dark" data-filter=".503{{ $categorie->id }}">
                                            {{ $categorie->categorie }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="portfolio-item row">
                                @foreach ($photos as $photo)
                                    <div class="item 503{{ $photo->categorie_id }} col-lg-3 col-md-4 col-6 col-sm p-1"
                                        style="position : relative">
                                        <a href="" class="fancylight popup-btn" data-fancybox-group="light">
                                            <img class="img-fluid" src="{{ asset('storage/' . $photo->chemin) }}"
                                                alt="{{ $photo->nom }}"
                                                style="min-height: 250px; min-width: 100%; max-height: 250px;">
                                        </a>
                                        <div class="p-1 dropdown" style="position: absolute; top: 4px; right: 4px;">
                                            <a class="btn btn-danger" data-toggle="dropdown" href="#"><i
                                                    class="fas fa-trash-alt text-light"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                <span class="dropdown-header">
                                                    <h5 class="text-center text-warning p-0 m-0">Confirmer la suppression
                                                    </h5>
                                                </span>
                                                <div class="dropdown-divider"></div>
                                                <div class="d-flex justify-content-end dropdown-footer">
                                                    <a href="#" class="btn btn-primary m-1">
                                                        Annuler</a>
                                                    <a href="{{ route('deletePhoto', $photo) }}" class="btn btn-danger m-1">
                                                        Confirmer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <div class="alert alert-warning">Aucune publication pour le moment.</div>
        @endif
    </div>
@endsection
@section('autre-js')
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
