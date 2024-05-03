@extends('layout.admin')

@section('body-element')
    sidebar-mini
@endsection

@section('titre')
    Upload Images
@endsection

@section('admin-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-1">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title text-bold">
                            Téléverser les photos
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <form action="{{ route('storeCategorie') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <label>Créer nouvelle catégorie/ nouvel évenement</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" name="categorie"
                                            style="min-height: 38px;">
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-info btn-flat">Créer</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 mb-2 d-flex align-items-center justify-content-center">
                                @if ($errors->has('categorie'))
                                    <div class="text-warning">
                                        {{ $errors->first('categorie') }}
                                    </div>
                                @endif
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
                        <div class="row">
                            <div class="col-md-12">
                                <!-- select -->
                                <div class="m-3 text-warning">Ou</div>
                                <form action="{{ route('storePhotos') }}" method="POST" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="form-group">
                                        <label>Selectionner Catégorie/Evenement</label>
                                        <select class="form-control" name="categorie" aria-label="Default select example">
                                            @if ($categories->count() > 0)
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->categorie }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option>Aucune catégorie/ Aucun évenement !</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">Images</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="photo[]"
                                                accept="image/*" multiple required>
                                            <label class="custom-file-label" for="customFile">Sélectionner les images à
                                                téléverser</label>
                                        </div>
                                    </div>
                                    @if ($errors->has('photo'))
                                        <div class="text-danger" style="font-size: 15px">
                                            {{ $errors->first('photo') }}</div>
                                    @endif
                                    <div id="preview"></div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success text-center px-5"
                                            id="btn-publier">Publier Maintenant</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('autre-js')
    <script>
        document.getElementById('customFile').addEventListener('change', function(event) {
            var preview = document.getElementById('preview');
            preview.innerHTML = ''; // Efface les miniatures précédentes

            var files = event.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.minWidth = '150px';
                    img.style.maxWidth = '150px';
                    img.style.minHeight = '150px';
                    img.style.maxHeight = '150px';
                    img.classList.add('m-2')
                    preview.appendChild(img); // Ajoute la miniature à la zone de prévisualisation
                }

                reader.readAsDataURL(file); // Lecture du fichier comme une URL de données
            }
        });
    </script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
@endsection
