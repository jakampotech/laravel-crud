@extends('navigation')
@section('title')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-body ">
                <h3>Tambah disini</h3>
                <br/>
	            <a style="float:right" class="btn btn-sm btn-outline-dark"href="/home">Back</a>
	            <br/>
                <br/>
                @foreach($siswa as $p)
                <form class="form-group row" action="/home/update" method="post">
		            {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" name="nama" required="required" class="form-control" placeholder="Nama kau" value="{{ $p->nama }}"><br/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Umur</label>
                        <div class="col-sm-3">
                            <input type="number" name="umur" required="required" class="form-control" placeholder="Umur kau" value="{{ $p->umur }}"><br/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <textarea name="alamat" required="required" class="form-control" placeholder="Alamat kau" value="{{ $p->alamat }}"></textarea><br/>
                        </div>
                    </div>
                    <br/>
                    <div>
                        <input class="btn btn-sm btn-outline-primary col-sm-1" type="submit" value="Simpan">
                    </div>
	            </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection