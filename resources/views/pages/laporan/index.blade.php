@extends('layouts.v_template')

<style>

</style>
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5>List data barang masuk</h5>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode barang</th>
                                    <th>Nama barang</th>
                                    <th>jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_masuk as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->kode_barang }}</td>
                                        <td>{{ $row->barang->nama_barang }}</td>
                                        <td>{{ $row->jumlah }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5>List data barang keluar</h5>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode barang</th>
                                    <th>Nama barang</th>
                                    <th>jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_keluar as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->kode_barang }}</td>
                                        <td>{{ $row->barang->nama_barang }}</td>
                                        <td>{{ $row->jumlah }}</td>

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
