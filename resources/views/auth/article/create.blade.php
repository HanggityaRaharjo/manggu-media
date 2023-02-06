@extends('layouts.dashboard')
@section('body')
    {{-- Content --}}
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="card">
                <h1 class="text-center">Buat Artikel</h1>
                <div class="p-5">
                    <form action="/create-article" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Gambar --}}
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <input type="file" onchange="previewImage()" name="gambar" id="image"
                                    style="background: rgb(221, 221, 221);padding:5px">
                            </div>
                            <div class="col-md-7 p-0">
                                {{-- Hasil Gambar --}}
                                <img class="img-fluid my-3 col-sm-12" id="img-preview">
                                {{-- End Hasil Gambar --}}
                            </div>
                        </div>
                        {{-- End Gambar --}}

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="judul">Judul</label>
                                <input type="judul" name="judul" class="form-control" id="judul">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Kategori</label>
                                <select id="inputState" name="kategori_id" class="form-control">
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">
                                            {{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Konten --}}
                        <div>
                            <div class="input-group-prepend">
                                <span class="input-group-text w-100" id="inputGroup-sizing-default">Konten</span>
                            </div>
                            <textarea name="body" id="body" cols="30" rows="10" style="height: 500px"></textarea>
                        </div>
                        {{-- End Konten --}}


                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2018 Adminwrap by wrappixel.com </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    {{-- End Content --}}
    <!-- CK EDITOR -->
    <script src="ckeditor5/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body'), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                        'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'link', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'blockQuote', 'insertTable', 'codeBlock', 'htmlEmbed',
                        '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
    {{-- Gambar --}}
    <script>
        function previewImage() {
            const image = document.getElementById('image')
            const imgPreview = document.getElementById('img-preview')
            const oFReader = new FileReader()


            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
            console.log('asdasd')
        }
    </script>
@endsection
