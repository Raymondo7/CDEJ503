@extends('layout.admin')
@section('body-element')
    sidebar-mini
@endsection
@section('titre')
    Nouveau Post
@endsection
@section('admin-content')
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-1">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title text-bold">
                                Titre et Couverture
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Titre</label>
                                        <textarea class="form-control" rows="4" style="resize: none; text-transform: uppercase"
                                            placeholder="Entrez le titre ici ..." name="titre"></textarea>
                                    </div>
                                    @if ($errors->has('titre'))
                                        <div class="text-danger" style="font-size: 15px">
                                            {{ $errors->first('titre') }}</div>
                                    @endif
                                    <div class="form-group">
                                        <label for="customFile">Image de couverture</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="photo"
                                                onchange="previewImage()" accept="image/*">
                                            <label class="custom-file-label" for="customFile">Sélectionner une
                                                image de couverture</label>
                                        </div>
                                    </div>
                                    @if ($errors->has('photo'))
                                        <div class="text-danger" style="font-size: 15px">
                                            {{ $errors->first('photo') }}</div>
                                    @endif

                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <div class="img w-100 border border-1 border-secondary text-center d-flex justify-content-center align-items-center"
                                        style="height: 300px; border-radius: 25px" id="imagePreview">
                                        <span><i class="fas fa-images" style="font-size: 100px; color : grey;"></i></span>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-success">
                                    <div class="card-header">
                                        <h3 class="card-title text-bold">
                                            Contenu
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <textarea id="summernote" name="contenu">
                                            
                                        </textarea>
                                    </div>
                                    @if ($errors->has('contenu'))
                                        <div class="text-danger" style="font-size: 15px">
                                            {{ $errors->first('contenu') }}</div>
                                    @endif
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                    </section>
                    <!-- /.content -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success text-center px-5" id="btn-publier">Publier
                            Maintenant</button>
                    </div>
                </div>
                <!-- /.content-wrapper -->
            </section>
        </div>
    </form>
@endsection
@section('autre-js')
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        });

        function previewImage() {
            var preview = document.getElementById('imagePreview');
            var file = document.getElementById('customFile').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.innerHTML = '';
                var img = document.createElement('img');
                img.src = reader.result;
                img.style.maxWidth = '100%'; // Ajustez la taille selon vos besoins
                img.style.height = '300px'; // Ajustez la taille selon vos besoins
                img.classList.add("p-3");
                preview.appendChild(img);
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = 'Aucune image sélectionnée';
            }

        }
    </script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
@endsection
