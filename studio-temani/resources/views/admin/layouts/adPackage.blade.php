@extends('admin.packagepost')
@section('title', 'Edit Package')
@section('packageposting')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Posting Katalog Desc</h3>
                    <p class="text-subtitle text-muted">
                        List Postingan Untuk Yang Tertera pada Studio Bagian Katalog Desc
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
                                Studio
                            </li>
                            <li class="breadcrumb-item Booked" aria-current="page">
                                Katalog Desc Post
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
                    <p class="text-subtitle text-muted">Postingan Untuk Katalog</p>
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
                                <th>Judul</th>
                                <th>Desc</th>
                            </tr>
                        </thead>
                        @foreach ($packages as $p)
                            <tbody>
                                <tr>
                                    <td>{{ $p->title }}</td>
                                    <td>{{ $p->descpack }}</td>
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
                                                        <form action="{{ route('editPackage', $p->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Judul</label>
                                                                <input type="text" name="title" id="title"
                                                                    class="form-control" placeholder="Judul Postingan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Isi
                                                                    Deskripsi</label>
                                                                <textarea name="descpack" id="default" cols="30" rows="10" placeholder="Deskripsi Katalog"></textarea>
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
