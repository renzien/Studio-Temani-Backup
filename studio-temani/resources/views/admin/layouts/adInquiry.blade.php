@extends('admin.inquirypost')
@section('title', 'Edit Inquiry')
@section('inquiryposting')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Posting Inquiry</h3>
                    <p class="text-subtitle text-muted">
                        List Postingan Untuk Yang Tertera pada Studio Bagian Inquiry Post
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item">
                                Posting
                            </li>
                            <li class="breadcrumb-item">
                                Pricelist
                            </li>
                            <li class="breadcrumb-item Booked" aria-current="page">
                                Inquiry Post
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
                    <p class="text-subtitle text-muted">Postingan Untuk Inquiry</p>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Desc</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        @foreach ($inquirys as $iq)
                            <tbody>
                                <tr>
                                    <td>{{ $iq->title }}</td>
                                    <td>{{ $iq->desc }}</td>
                                    <td>{{ $iq->photo }}</td>
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
                                                        <form action="{{ route('editInquiry', $iq->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Judul</label>
                                                                <input type="text" name="title" id="title"
                                                                    class="form-control" placeholder="Judul Postingan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="photo" class="form-label">Unggah File</label>
                                                                <p class="text-subtitle text-muted">Ukuran Foto Recommended
                                                                    1440x550</p>
                                                                <input type="file" name="photo" id="photo"
                                                                    class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                                                  file:bg-gray-50 file:border-0
                                                  file:bg-gray-100 file:me-4
                                                  file:py-3 file:px-4
                                                  dark:file:bg-gray-700 dark:file:text-gray-400">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Isi
                                                                    Deskripsi</label>
                                                                <textarea name="desc" id="default" cols="30" rows="10" placeholder="Deskripsi Katalog"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Simpan</button>
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
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
