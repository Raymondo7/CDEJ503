@extends('layout.admin')
@section('body-element')
    sidebar-mini
@endsection
@section('titre')
    Post
@endsection
@section('admin-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-1">
        <!-- Main content -->
        <section class="content">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 border border-1 mx-auto p-2">
                            <h1 class="p-3 border border-secondary" style="text-transform: uppercase; ">{{ $post->titre }}
                            </h1>
                            <p>{!! $post->contenu !!}</p>
                        </div>
                        <div class="col-md-4 border border-1 mx-auto p-0" style="height: fit-content">
                            <img src="{{ asset('storage/' . $post->photo) }}" class="img-fluid rounded-top"
                                alt="post picture" style="width: 100%;" />
                            <p class="d-flex justify-content-around align-items-center">
                                <a href="{{ route('edit', $post) }}" class="btn btn-warning btn-lg w-100 m-2 text-light"><i
                                        class="fas fa-edit"></i> Editer</a>
                                <a href="{{ route('delete', $post) }}" class="btn btn-danger btn-lg w-100 m-2"><i
                                        class="fas fa-trash-alt"></i>
                                    Supprimer</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
