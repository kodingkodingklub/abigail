@extends('layouts.admin')

@section('linkcontent')
<li class="mt">
  <a href="{{route('home')}}">
    <i class="fa fa-home"></i>
    <span>Home</span>
  </a>
</li>

<li class="sub-menu">
  <a href="{{route('products.index')}}">
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

<li class="active">
  <a>
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
  <h3><i class="fa fa-angle-right"></i> Data Pengguna</h3>
</div>

<!-- page start-->
<div class="panel panel-default">
  <div class="panel-body table-responsive">
    <table class="table table-bordered" id="hidden-table-info">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Avatar</th>
          <th>Level</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @if(count($data) > 0)
        @foreach($data as $dt)
        <tr>
          <td>{{ $dt->id }}</td>
          <td>{{ $dt->name }}</td>
          <td>{{ $dt->email }}</td>
          <td><img width="70px" height="auto" src="{{$dt->photo}}"></td>
          <td>{{ $dt->role }}</td>
          @if($dt->status == 'Offline')
          <td style="color: red">{{ $dt->status }}</td>
          @else
          <td style="color: green">{{ $dt->status }}</td>
          @endif
          @endforeach
          @else
          <td colspan="8">
            <center>
              <h4>Belum Ada Data</h4>
            </center>
          </td>
          @endif
      </tbody>
    </table>
  </div>
  <!-- page end-->
</div>

<!-- Modal -->
<div class="modal fade" id="AddKaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <form action="{{ route('karyawan.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          @include('form.karyawan')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal modal-danger fade" id="kosong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Informasi</h4>
      </div>
      <div class="modal-body">
        <h4 class="text-center">
          Silahkan Cari Email Terlebih Dahulu Dengan Klik "Cari Email Karyawan"
        </h4>
        <input type="hidden" name="id" id="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete-produk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
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