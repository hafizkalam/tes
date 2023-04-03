@extends('layout.admin')

@section('meja')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Meja</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Meja</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline" action="{{ route('store') }}" method="POST">
                        @csrf
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" name="meja" placeholder="Masukkan Nomor Meja">
                            </div>
                            <button type="submit" class="btn btn-primary ml-1 mb-2">Create</button>
                        </form>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-tambah">
                        Tambah
                    </button>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO Meja</th>
                                <th scope="col">QR code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meja as $data)
                            <tr>
                               <td>{{ $data->no_meja }}</td>
                               <td>
                                   <a href="{{ route('generate',$data->id) }}" class="btn btn-primary">Generate</a>
                               </td>
                             </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- ./row -->
            <!-- ./row -->
  </section>

  <div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form method="POST" enctype='multipart/form-data' action="menu">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="id" id="id" class="d-none">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Menu</label>
                        <div class="col-sm-9">
                            <select name="meja" onchange="PilihJenis(this)" id="meja" class="form-control">
                                <option>Pilih Kategori</option>
                                <option value="S">Makanan</option>
                                <option value="P">Minuman</option>
                            </select>
                        </div>

                    </div>
                    <div id="LoadData">

                    </div>
                </div>
                <div class="modal-footer justify-content-between bg-light">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save </button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form method="POST" id="saveEdit" enctype='multipart/form-data' action="pelanggaranmaster">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Edit Pelanggaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <input type="text" id="idpelanggaran" name="id">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Pelanggaran</label>
                        <div class="col-sm-9">

                            <select name="pelanggar" onchange="PilihJenis(this)" id="pelanggar" class="form-control">
                                <option>Pilih Jenis Pelanggar</option>
                                <option value="S">Santri</option>
                                <option value="P">Pengajar</option>
                            </select>
                        </div>

                    </div>
                    <div id="LoadData">

                    </div>
                </div>
                <div class="modal-footer justify-content-between bg-light">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="edit" class="btn btn-primary">Save </button>
                </div>

            </form>
        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="container">
    <div class="row mt-4">
        <form class="form-inline" action="{{ route('store') }}" method="POST">
        @csrf
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="no_meja" placeholder="Masukkan Nomor Meja">
            </div>
            <button type="submit" class="btn btn-primary ml-1 mb-2">Create</button>
        </form>
        <br>
        <table class="table">
            <thead>
                      <tr>
                        <th scope="col">NO Meja</th>
                        <th scope="col">QR code</th>
                      </tr>
                    </thead>
                    <tbody>

                     {{-- @foreach ($meja as $data)
                     <tr>
                        <td>{{ $data->no_meja }}</td>
                        <td>
                            <a href="{{ route('generate',$data->id) }}" class="btn btn-primary">Generate</a>
                        </td>
                      </tr>
                     @endforeach --}}
                    </tbody>
                  </table>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

@endsection
