@extends('layout.layout')

@section('title', 'Tambah Pegawai')

@section('content')
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah Level Kamar</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
					    @if($errors->any())
					        <div class="alert alert-danger my-3">
					            <ul>
					                @foreach($errors->all() as $e)
					                <li>{{$e}}</li>
					                @endforeach
					            </ul>
					        </div>
					    @endif
                        <form method="post" action="/store_pegawai">
                            @csrf
                            <div class="mb-3">
                                <label for="no_kamar">Nomor kamar</label>
                                <input type="number" name="no_kamar" id="no_kamar" required class="form-control" value="{{ old('no_kamar') }}">
                            </div>
                            <div class="mb-3">
                                <label for="ruang">Ruang</label>
                                <input type="text" class="form-control" name="ruang" required id="ruang" value="{{ old('ruang') }}">
                            </div>
                        <div class="mb-3">
                            <label for="ketersediaan">Ketersediaan </label>
                            <input type="text" name="ketersediaan" required class="form-control" id="ketersediaan" value="{{ old('ketersediaan') }}">

                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection