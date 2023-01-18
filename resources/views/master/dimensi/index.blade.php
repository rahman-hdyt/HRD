@extends('index')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">
                        Dimensi KPI
                    </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dimensi KPI</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="hstack gap-3">
                                <label class="col-md-2 col-form-label">Target KPI</label>
                                <select class="form-select" name="id_jabatan">
                                    @foreach ($jabatans as $j)
                                        <option value="{{ $j->id_jabatan }}">{{ $j->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-primary waves-effect waves-light w-md"> <i class="fas fa-info mr-2"></i> Tampilkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection
