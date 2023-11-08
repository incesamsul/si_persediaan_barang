@extends('layouts.v_template')

<style>

</style>
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5>List data barang</h5>
                        <a href="{{ URL::to('barang/create') }}">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode barang</th>
                                    <th>Nama barang</th>
                                    <th>Satuan</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->kode_barang }}</td>
                                        <td>{{ $row->nama_barang }}</td>
                                        <td>{{ $row->satuan }}</td>
                                        <td>
                                            <a href="{{ URL::to('barang/' . $row->id . '/edit') }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ URL::to('barang/' . $row->id . '/delete') }}"
                                                class="btn btn-sm btn-danger hapus">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#liDashboard').addClass('active');
    </script>
@endsection
