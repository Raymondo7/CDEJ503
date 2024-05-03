@extends('layout.admin')
@section('body-element')
    sidebar-mini
@endsection
@section('titre')
    Posts
@endsection
@section('admin-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-1">
        <!-- Main content -->
        <section class="content">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        @forelse($posts as $post)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="{{ Storage::url($post->photo) }}" alt="Card image cap"
                                        style="max-height: 300px; min-height: 300px;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-transform: uppercase">{{ $post->titre }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a type="button" href="{{ route('post', $post->id) }}"
                                                    class="btn btn-primary text-light p-1"><i class="fa fa-eye"
                                                        aria-hidden="true"></i> Voir</a>
                                                <a type="button" href="{{ route('edit', $post) }}"
                                                    class="btn btn-warning text-light p-1">
                                                    <i class="fas fa-edit" aria-hidden="true"></i> Editer</a>
                                                <div class="p-1 dropdown">
                                                    <a class="btn btn-danger" data-toggle="dropdown" href="#"><i
                                                            class="fas fa-trash-alt text-light" aria-hidden="true">
                                                            Supprimer</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu">
                                                        <span class="dropdown-header">
                                                            <h5 class="text-center text-warning p-0 m-0">Confirmer la
                                                                suppression
                                                            </h5>
                                                        </span>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="d-flex justify-content-end dropdown-footer">
                                                            <a href="#" class="btn btn-primary m-1">
                                                                Annuler</a>
                                                            <a href="{{ route('delete', $post) }}"
                                                                class="btn btn-danger m-1">
                                                                Confirmer</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <small class="text-muted">{{ $formatDate($post->created_at) }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12">
                                <div class="alert alert-success text-center text-light">Aucun article publié pour le moment
                                    !</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
