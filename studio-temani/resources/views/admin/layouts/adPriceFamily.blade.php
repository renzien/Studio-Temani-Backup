@extends('admin.pricelistpost')
@section('title', 'Edit Price Family')
@section('pricefamilyeditor')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Posting Pricelist Family</h3>
                    <p class="text-subtitle text-muted">
                        List Postingan Untuk Yang Tertera pada Posting Pricelist
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
                                Pricelist Family Post
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
                    <p class="text-subtitle text-muted">Postingan Untuk Pricelist</p>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Fitur</th>
                                <th>Paket</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        @foreach ($familys as $fm)
                            <tbody>
                                <tr>
                                    <td>{{ $fm->title }}</td>
                                    <td>{{ $fm->tag1 }}</td>
                                    <td>{{ $fm->unit1 }}</td>
                                    <td>{{ $fm->photo }}</td>
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
                                                        <form action="{{ route('editFamily', $fm->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Judul</label>
                                                                <input type="text" name="title" id="name"
                                                                    class="form-control" placeholder="Nama Studio">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="photo" class="form-label">Unggah File</label>
                                                                <p class="text-subtitle text-muted">Ukuran Foto Recommended
                                                                    537x655</p>
                                                                <input type="file" name="photo" id="photo"
                                                                    class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                                                          file:bg-gray-50 file:border-0
                                                          file:bg-gray-100 file:me-4
                                                          file:py-3 file:px-4
                                                          dark:file:bg-gray-700 dark:file:text-gray-400">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="data1" class="form-label mt-2">Fitur +
                                                                    Deskripsi 1</label>
                                                                <div class="form-group" id="fiturContainer">
                                                                    <input type="text" name="tag1" id="tag1"
                                                                        class="form-control" placeholder="Masukan Fitur">
                                                                    <input type="text" name="desc1" id="desc1"
                                                                        class="form-control mt-2"
                                                                        placeholder="Masukan Penjelasan Fitur">
                                                                </div>
                                                                <button type="button" onclick="addFitur()"
                                                                    class="btn btn-outline-success">Tambah Fitur +
                                                                    Deskripsi</button>
                                                                <button type="button" onclick="deleteFitur()"
                                                                    class="btn btn-outline-danger">Hapus Fitur +
                                                                    Deskripsi</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="unitlabel1" class="form-label mt-2">Paket +
                                                                    Deskripsi 1</label>
                                                                <div class="form-group" id="packageContainer">
                                                                    <input type="text" name="unit1" id="unit1"
                                                                        class="form-control" placeholder="Masukan Paket">
                                                                    <input type="number" name="price1" id="price1"
                                                                        class="form-control mt-2"
                                                                        placeholder="Masukan Harga">
                                                                    <input type="text" name="descprice1"
                                                                        id="descprice1" class="form-control mt-2"
                                                                        placeholder="Masukan Penjelasan Fitur">
                                                                </div>
                                                                <button type="button" onclick="addPacket()"
                                                                    class="btn btn-outline-success">Tambah Paket +
                                                                    Deskripsi</button>
                                                                <button type="button" onclick="deletePacket()"
                                                                    class="btn btn-outline-danger">Hapus Paket +
                                                                    Deskripsi</button>
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
    @section('scriptPriceFamily')
        <script>
            function addFitur() {
                var container = document.getElementById("fiturContainer");
                var jumlahInput = container.getElementsByTagName("input").length;

                var inputBaru = document.createElement("input");
                inputBaru.type = "text";
                inputBaru.name = "tag" + jumlahInput;
                inputBaru.id = "tag" + jumlahInput;
                inputBaru.className = "form-control mt-2";
                inputBaru.placeholder = "Masukan Fitur";

                var newInput = document.createElement("input");
                newInput.type = "text";
                newInput.name = "desc" + jumlahInput;
                newInput.id = "desc" + jumlahInput;
                newInput.className = "form-control mt-2";
                newInput.placeholder = "Masukan Penjelasan Fitur";

                var labelBaru = document.createElement("label");
                labelBaru.htmlFor = 'data' + jumlahInput;
                labelBaru.className = "form-label mt-2";
                labelBaru.appendChild(document.createTextNode("Fitur + Deskripsi " + jumlahInput));

                container.appendChild(labelBaru);
                container.appendChild(inputBaru);
                container.appendChild(newInput);
            }

            function deleteFitur() {
                var container = document.getElementById("fiturContainer");
                var jumlahInput = container.getElementsByTagName("input").length;

                if (jumlahInput > 2) {
                    container.removeChild(container.lastChild);
                    container.removeChild(container.lastChild);
                    container.removeChild(container.lastChild);
                }
            }

            function addPacket() {
                var container = document.getElementById("packageContainer");
                var tambahInput = container.getElementsByTagName("input").length - 1;

                var inputTambah = document.createElement("input");
                inputTambah.type = "text";
                inputTambah.name = "unit" + tambahInput;
                inputTambah.id = "unit" + tambahInput;
                inputTambah.className = "form-control mt-2";
                inputTambah.placeholder = "Masukan Paket";

                var inputBaru = document.createElement("input");
                inputBaru.type = "number";
                inputBaru.name = "price" + tambahInput;
                inputBaru.id = "price" + tambahInput;
                inputBaru.className = "form-control mt-2";
                inputBaru.placeholder = "Masukan Harga";

                var inputTambahan = document.createElement("input");
                inputTambahan.type = "text";
                inputTambahan.name = "descprice" + tambahInput;
                inputTambahan.id = "descprice" + tambahInput;
                inputTambahan.className = "form-control mt-2";
                inputTambahan.placeholder = "Masukan Penjelasan Fitur";

                var labelBaru = document.createElement("label");
                labelBaru.htmlFor = 'unitlabel' + tambahInput;
                labelBaru.className = "form-label mt-2";
                labelBaru.appendChild(document.createTextNode("Paket + Deskripsi " + tambahInput));

                container.appendChild(labelBaru);
                container.appendChild(inputTambah);
                container.appendChild(inputBaru);
                container.appendChild(inputTambahan);
            }

            function deletePacket() {
                var container = document.getElementById("packageContainer");
                var jumlahInput = container.getElementsByTagName("input").length;

                if (jumlahInput > 3) {
                    container.removeChild(container.lastChild);
                    container.removeChild(container.lastChild);
                    container.removeChild(container.lastChild);
                    container.removeChild(container.lastChild);
                }
            }
        </script>
    @endsection
</div>
@endsection
