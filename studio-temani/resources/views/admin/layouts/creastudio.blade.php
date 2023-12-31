@extends('admin.creative')
@section('title', 'Creative Studio')
@section('creativestudio')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Creative Studio</h3>
                    <p class="text-subtitle text-muted">
                        List Postingan Untuk Creative Studio
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item Booked" aria-current="page">
                                Creative Studio
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
                    <p class="text-subtitle text-muted">Postingan Creative Studio</p>
                    <a href="#" class="btn btn-primary mt-3">
                        <i class="ri-add-line"></i>
                        Tambah Produk
                    </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <i class="ri-checkbox-circle-line"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $creaspaces->title }}</td>
                                <td>{!! $creaspaces->descpack !!}</td>
                                <td>{{ $creaspaces->photo }}</td>
                                <td>
                                    <span class="badge bg-success">
                                        Aktif
                                    </span>
                                </td>
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
                                                    <form action="{{ route('editCreaSpace', $creaspaces->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">Judul Paket</label>
                                                            <input type="text" name="title" id="name"
                                                                class="form-control" placeholder="Judul Paket">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="photo" class="form-label">Unggah File</label>
                                                            <input type="file" name="photo" id="photo"
                                                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                                                                  file:bg-gray-50 file:border-0
                                                                  file:bg-gray-100 file:me-4
                                                                  file:py-3 file:px-4
                                                                  dark:file:bg-gray-700 dark:file:text-gray-400">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="descpack" id="default" cols="30" rows="10" placeholder="Masukkan Penjelasan Package"></textarea>
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
                    </table>
                </div>
            </div>
            <div class="form-group">
                <h3>Preview Card</h3>
                <p class="text-subtitle text-muted">
                    Tampilan yang terlihat pada Halaman Utama
                </p>
            </div>
            <div class="form-group">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{ asset('storage/post-image/' . $creaspaces->photo) }}"
                                class="card-img-top img-fluid" alt="singleminded" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $creaspaces->title }}</h5>
                                <div class="card-text">{!! $creaspaces->descpack !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
