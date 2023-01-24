@extends('layouts.auth')

@section('container')
    <main>
        <!-- About US Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <h1 class="text-center">Buat Artikel</h1>
            <div class="p-5">
                <form action="/create-article" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Gambar --}}
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" onchange="previewImage()" name="gambar"
                                id="image">
                            <label class="custom-file-label" for="inputGroupFile02">Masukan Gambar Artikel</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                    {{-- End Gambar --}}

                    {{-- Hasil Gambar --}}
                    <img class="img-fluid my-3 col-sm-4" id="img-preview">
                    {{-- End Hasil Gambar --}}

                    {{-- Wrapper Judul & Kategori --}}
                    <div class="d-flex align-items-center" style="gap:20px">

                        {{-- Judul --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" type="text" placeholder="Masukan Judul"
                                name="judul">
                        </div>
                        {{-- End Judul --}}

                        {{-- Kategori --}}
                        <div class="input-group mb-3" style="width: 30%">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect02">Kategori</label>
                            </div>
                            <select class="custom-select py-1" name="kategori_id" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">
                                        {{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- End Kategori --}}

                    </div>
                    {{-- End Wrapper Judul & Kategori --}}

                    {{-- Konten --}}
                    <div>
                        <div class="input-group-prepend">
                            <span class="input-group-text w-100" id="inputGroup-sizing-default">Konten</span>
                        </div>
                        <textarea name="body" id="body" cols="30" rows="10" style="height: 500px"></textarea>
                    </div>
                    {{-- End Konten --}}

                    {{-- Penulis --}}
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Penulis</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default"
                            aria-describedby="inputGroup-sizing-default" type="text" placeholder="Masukan Judul"
                            name="penulis">
                    </div>
                    {{-- End Penulis --}}



                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>



            </div>

        </div>
        <!-- About US End -->
    </main>

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
