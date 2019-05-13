@extends('layouts.admin')

@section('linkcontent')
    <li class="mt">
      <a href="{{route('home')}}">
        <i class="fa fa-home"></i>
        <span>Home</span>
        </a>
    </li>

    <li class="active">
      <a>
        <i class="fa fa-box"></i>
        <span>Produk</span>
        </a>
    </li>

    <li class="sub-menu">
      <a href="{{route('karyawan.index')}}">
        <i class="fa fa-users"></i>
        <span>Karyawan</span>
        </a>
    </li>

    <li class="sub-menu">
      <a href="{{route('pengguna.index')}}">
        <i class="fa fa-user"></i>
        <span>Pengguna</span>
        </a>
    </li>
    
    <li class="sub-menu">
      <a href="javascript:;">
        <i class="fa fa-list"></i>
        <span>Laporan</span>
        </a>
      <ul class="sub">
        <li><a href="#">Data Kategori</a></li>
        <li><a href="#">Data Pengeluaran</a></li>
      </ul>
    </li>
@endsection

@section('content')
  <div class="well" style="margin-top: 20px;">
          <h3><i class="fa fa-angle-right"></i> Data Produk</h3>
        </div>
        <!-- Button trigger modal -->
          <button class="btn btn-success btn-lg fa fa-plus" type="button" data-toggle="modal" data-target="#myModal" style="margin-bottom: 20px;">
            Tambah
          </button>

          <!-- page start-->
          <div class="content-panel">
              <table class="table table-responsive" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(count($data) > 0)
                    @foreach($data as $dt)
                        <tr>
                          <td>{{ $dt->id }}</td>
                          <td>{{ $dt->kode_produk }}</td>
                          <td>{{ $dt->nama_produk }}</td>
                          <td>{{ $dt->size }}</td>
                          <td>{{ $dt->harga }}</td>
                          <td>{{ $dt->stok }}</td>
                          <td><img width="70px" height="auto" src="uploads/{{$dt->gambar}}"></td>
                          <td>
                              <button type="button" class="btn btn-success" data-mynama="{{ $dt->nama_produk }}" data-mysize="{{ $dt->size }}" data-myid="{{ $dt->id }}" data-myharga="{{ $dt->harga }}" data-mystok="{{ $dt->stok }}" data-myimg="{{ $dt->gambar }}" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Ubah</button>
                              <button type="button" data-myid="{{ $dt->id }}" class="btn btn-danger" data-toggle="modal" data-target="#delete-produk"><i class="fa fa-trash"></i>Hapus</button>
                        </tr>
                    @endforeach
                @else
                    <td colspan="8"><center><h4>Belum Ada Data</h4></center></td>
                @endif
                </tbody>
              </table>
          <!-- page end-->
        </div>

        <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Produk</h4>
          </div>
          <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
              <input type="hidden" name="kode_produk" value="{{ $rand }}">
              @include('form.product')        
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ubah Produk</h4>
          </div>
          <form action="{{ route('products.update', 'test') }}" enctype="multipart/form-data" method="POST">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            <div class="modal-body">
              <input type="hidden" name="id" id="id">
              @include('form.product')     
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal modal-danger fade" id="delete-produk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="myModalLabel">Konfirmasi Hapus</h4>
          </div>
          <form action="{{ route('products.destroy', 'test') }}" method="POST">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <div class="modal-body">
              <h4 class="text-center">
                Apakah yakin ingin menghapus data ini?
              </h4>
              <input type="hidden" name="id" id="id">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Tidak, Batalkan</button>
            <button type="submit" class="btn btn-warning">Ya, Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection

