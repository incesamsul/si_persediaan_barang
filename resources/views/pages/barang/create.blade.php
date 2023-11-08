@extends('layouts.v_template')

<style>

</style>
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Tambah / edit barang</h5>
                        <a href="{{ URL::to('barang') }}">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <?php
                        $id = $barang ? $barang->id : 0;
                        ?>
                        @if ($barang)
                            <form action="{{ URL::to('barang/update/' . $id) }}" method="post">
                            @else
                                <form action="{{ URL::to('barang/store') }}" method="post">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="kode_barang">Kode barang</label>
                            <input required type="text" class="form-control"
                                value="{{ $barang ? $barang->kode_barang : '' }}" name="kode_barang" id="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input required type="text" class="form-control"
                                value="{{ $barang ? $barang->nama_barang : '' }}" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input required type="text" class="form-control" value="{{ $barang ? $barang->satuan : '' }}"
                                name="satuan" id="satuan">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input required type="text" class="form-control"
                                value="{{ $barang ? $barang->deskripsi : '' }}" name="deskripsi" id="deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input required type="text" class="form-control" value="{{ $barang ? $barang->harga : '' }}"
                                name="harga" id="harga">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-main text-white">Simpan</button>
                        </div>
                        </form>

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
