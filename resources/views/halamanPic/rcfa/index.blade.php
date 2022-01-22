@extends('halamanPic.layout.master')
@section('konten')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DATA  RCFA</h1>
                    <!-- DataTales Example -->
                        {{-- @foreach($rcfaPic as $key => $data)
                        <div class="card mb-2" style="max-width: 540px;">
                            <div class="row g-0">
		                        <div class="col-md-4">
			                        <img src="img/rcfa.png"  class="card-img" alt="...">
		                        </div>
                                <div class="col-md-8 bg-primary text-white">
			                        <div class="card-body">
                                        <h5 class="card-title">Judul Rcfa</h5>{{ ++$key }}.{{ $data->keterangan }}
                                        <p class="card-text">Tanggal : {{ $data->tanggal }}</p>
                                        <a href="{{ route('fdtPic') }}" class="btn btn-primary">Detail FDT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    <div class="card-deck">
                        @foreach ($rcfaPic as $key => $data)
                        <div class="card">
                          <img src="img/rcfa.png" class="card-img-top" alt="..." width="200" height="200">
                          <div class="card-body bg-primary text-white">
                            <h5 class="card-title"><b>Judul Rcfa</b></h5>{{ ++$key }}. {{ $data->keterangan }}
                            <p class="card-text">Tanggal : {{ $data->tanggal }}</p>
                          </div>
                          <a href="{{ route('fdtPic') }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>Detail FDT</a>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
  @endsection