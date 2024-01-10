@extends('admin.photo')
@section('title', 'Photo Editor')
@section('photoeditor')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Posting Hasil Photo</h3>
                    <p class="text-subtitle text-muted">
                        List Postingan Untuk Yang Tertera di Halaman Hasil Photo
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item">
                                Hasil Photo
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">List Postingan</h5>
                    <p class="text-subtitle text-muted">Postingan Untuk Hasil Photo</p>
                    <button type="button" class="btn btn-sm btn-primary block" data-bs-toggle="modal"
                        data-bs-target="#border-less">
                        <i class="ri-add-line"></i>
                        Tambah Hasil Foto
                    </button>
                    <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog -scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Hasil Foto</h5>
                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="ri-close-fill"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('createPost') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="form-label">Unggah Foto</label>
                                            <input type="file" name="photo" id="photo"
                                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                                                  file:bg-gray-50 file:border-0
                                                  file:bg-gray-100 file:me-4
                                                  file:py-3 file:px-4
                                                  dark:file:bg-gray-700 dark:file:text-gray-400">
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="form-label">Judul</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Nama Judul Foto">
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="form-label">Link GDrive</label>
                                            <textarea name="desc" id="default" cols="30" rows="10" placeholder="Masukkan Penjelasan Paket"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <i class="ri-checkbox-circle-line"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    {{-- <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Desc</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Uwawawa</td>
                                <td>Uwawawa</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info block" data-bs-toggle="modal"
                                        data-bs-target="#border-less">
                                        <i class="ri-pencil-line"></i>
                                        Edit
                                    </button>
                                    <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog -scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Postingan</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">Judul</label>
                                                            <input type="text" name="title" id="title"
                                                                class="form-control" placeholder="Masukkan Judul">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="desc" id="default" cols="30" rows="10" placeholder="Masukkan Penjelasan Paket"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="ri-delete-bin-line"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
            </div>
            <div class="d-flex flex-wrap gap-4">
                @foreach ($photos as $p)
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <img src="{{ asset('storage/post-image/' . $p->photo) }}" class="card-img-top img-fluid"
                                    alt="singleminded" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $p->title }}</h5>
                                    <div class="card-text">{!! $p->desc !!}</div>
                                </div>
                                <div class="form-group ml-5 mb-3">
                                    <form action="{{ route('deletePost', $p->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger block">
                                            <i class="ri-delete-bin-line"></i>
                                            Hapus Foto
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
