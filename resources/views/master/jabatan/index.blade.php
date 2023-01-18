@extends('index')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Master Jabatan</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Master Jabatan</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-12 text-end mb-4">
                            <button type="button" class="btn btn-success ml-2" data-bs-toggle="modal" data-bs-target="#tambah-jabatan"><i class="fa fa-plus color-info" style="margin-right: .2rem;"></i> Tambah</button>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Jabatan</th>
                                <th>Level</th>
                                <th width="11%" class="text-center">Action</th>
                            </tr>
                            </thead>

                            @foreach ($jabatans as $jabatan)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jabatan->nama_jabatan }}</td>
                                        <td>{{ $jabatan->level_jabatan }}</td>
                                        <td>
                                            <div class="dropdown text-center">
                                                <button href="#" class="btn btn-sm btn-block btn-secondary dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action <i class="mdi mdi-chevron-down"></i>
                                                </button>

                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#edit-jabatan{{$jabatan->id_jabatan}}" data-bs-toggle="modal">Edit</a>

                                                    <form action="{{ route('master.jabatan.destroy', $jabatan->id_jabatan) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item sa-warning">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <!-- tambah -->
        <div id="tambah-jabatan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tambah Jabatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="{{ route('master.jabatan.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Jabatan</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="nama_jabatan" type="text" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Level</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="level_jabatan" type="number" id="example-text-input">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- edit -->
        @foreach ($jabatans as $jabatan)
        <div class="modal fade" id="edit-jabatan{{ $jabatan->id_jabatan }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tambah Jabatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="{{ route('master.jabatan.store', $jabatan->id_jabatan ) }}" method="POST">
                        @csrf
                        {{-- @method('update') --}}
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Jabatan</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}" type="text" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Level</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="level_jabatan" value="{{ $jabatan->level_jabatan }}" type="number" id="example-text-input">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        @endforeach

    </div> <!-- container-fluid -->
</div>
@endsection
