@extends('layouts.v_template')

<style>

</style>
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5>List data barang keluar</h5>
                        <a href="{{ URL::to('barang_keluar/create') }}">
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
                                    <th>jumlah</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->kode_barang }}</td>
                                        <td>{{ $row->barang->nama_barang }}</td>
                                        <td>{{ $row->jumlah }}</td>
                                        <td>
                                            <a href="{{ URL::to('barang_keluar/' . $row->id . '/edit') }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ URL::to('barang_keluar/' . $row->id . '/delete') }}"
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
