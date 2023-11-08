@extends('layouts.v_template')

<style>

</style>
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Tambah / edit barang keluar</h5>
                        <a href="{{ URL::to('barang') }}">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <?php
                        $id = $edit ? $edit->id : 0;
                        ?>
                        @if ($edit)
                            <form action="{{ URL::to('barang_keluar/update/' . $id) }}" method="post">
                            @else
                                <form action="{{ URL::to('barang_keluar/store') }}" method="post">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="kode_barang">Kode barang</label>
                            <select name="kode_barang" id="kode_barang" class="form-control">
                                @foreach ($barang as $row)
                                    <option value="{{ $row->kode_barang }}">{{ $row->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input required type="text" class="form-control" value="{{ $edit ? $edit->jumlah : '' }}"
                                name="jumlah" id="jumlah">
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
