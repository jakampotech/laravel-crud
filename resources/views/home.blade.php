@extends('navigation')
@section('title')
@section('content')    
    <div class="container">
        <div class="card bg-light">
            <div class="card-body ">
                <h3>Data Siswa-siswi</h3>
                <br/>
	            <a style="float:right" class="btn btn-sm btn-outline-dark" href="/home/tambah">Add</a>
	            <form action="/pegawai/cari" method="GET" class="form-inline">
                    <input class="form-control-sm" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		            <input class="btn btn-sm btn-dark" type="submit" value="CARIIN">
                </form>
	            <br/>
	            <table class="table table-bordered">
		            <tr class="text-center">
                        <th >NO</th>
                        <th>NAMA</th>
			            <th>UMUR</th>
			            <th>ALAMAT</th>
			            <th>Opsi</th>
		            </tr>
		            @foreach($siswa as $p)
		            <tr>
                        <td class="text-center">{{ $p->id }}</td>
		                <td>{{ $p->nama }}</td>
		                <td class="text-center">{{ $p->umur }}</td>
		                <td>{{ $p->alamat }}</td>
		                <td class="text-center">
				            <a class="btn btn-warning btn-sm" href="/home/edit/{{ $p->id }}">Edit</a>
				            <a class="btn btn-danger btn-sm" href="/home/hapus/{{ $p->id }}">Hapus</a>
			            </td>
		            </tr>
		            @endforeach
	            </table>
                <br/>
                
            </div>
        </div>
    </div>
@endsection