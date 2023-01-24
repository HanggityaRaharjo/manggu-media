@extends('layouts.auth')

@section('container')
    <main>
        <!-- About US Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <h1 class="text-center">Admin Articles</h1>
            <div class="">

                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Detail</th>
                            <th scope="col" style="text-align: center">Set Publish</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <form action="{{ url('/dashboard/admin/articles') }}" method="post">
                            @csrf
                            @foreach ($articles as $article)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $article->tanggal }}</td>
                                    <td>{{ $article->penulis }}</td>
                                    <td>{{ $article->judul }}</td>
                                    <td>
                                        {{-- Button Modal Trigger --}}
                                        <button type="button" data-toggle="modal"
                                            data-target="#ModalLong-{{ $article->id }}"
                                            style="background: transparent;cursor:pointer">
                                            Detail
                                        </button>
                                        {{-- End Button Modal Trigger --}}
                                    </td>
                                    <td style="width:400px">
                                        <div class="d-flex justify-content-center" style="gap:40px">
                                            <div class="custom-radio">
                                                <input type="text" name="checkbox{{ $no }}[]"
                                                    value="{{ $article->id }}" class="d-none">
                                                <input type="radio" id="radio-{{ $article->id }}-1"
                                                    name="checkbox{{ $no }}[]" class="custom-control-input"
                                                    value="published">
                                                <label class="custom-control-label"
                                                    for="radio-{{ $article->id }}-1">Publish</label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="radio-{{ $article->id }}-2"
                                                    name="checkbox{{ $no }}[]" class="custom-control-input"
                                                    value="rejected">
                                                <label class="custom-control-label"
                                                    for="radio-{{ $article->id }}-2">Reject</label>
                                            </div>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            <tr>
                                <th scope="row" colspan="6">
                                    <div class="d-flex justify-content-end px-5">
                                        <button class="btn">Submit</button>
                                    </div>
                                </th>
                            </tr>
                        </form>
                    </tbody>
                </table>
                {{-- Modal --}}
                @foreach ($articles as $article)
                    <div class="modal fade" id="ModalLong-{{ $article->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="ModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLongTitle">{{ $article->judul }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="background: rgb(226, 225, 225)">
                                    <div class="d-flex justify-content-end">
                                        <p class="btn mb-1" style="font-style: italic;">
                                            {{ $article->tanggal }}</p>
                                    </div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <img src="{{ asset('./storage/article-images/' . $article->gambar) }}"
                                            alt="{{ $article->slug }}" width="60%">
                                    </div>
                                    <div class="p-3" style="background: white">
                                        <p style="font-style: italic">Penulis : {{ $article->penulis }}</p>
                                        <p style="font-style: italic">Judul : {{ $article->judul }}</p>
                                        {!! $article->body !!}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- End Modal --}}
            </div>

        </div>
        <!-- About US End -->
    </main>
@endsection
