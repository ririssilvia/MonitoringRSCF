@extends('halamanPic.layout.master')
@section('konten')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">DATA  FDT</h1>

                    {{-- @foreach($fdtPic as $key => $data)
                    <div class="card mb-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/fdt1.png"  class="card-img" alt="...">
                            </div>
                            <div class="col-md-8 bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Nama FDT</h5>{{ ++$key }}.{{ $data->nama_fdt }}
                                     <p class="card-text">Target : {{ $data->target }}</p>
                                     <a href="{{ route('fdtPic') }}" class="btn btn-primary">Detail FDT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    <div class="card-deck">
                        @foreach ($fdtPic as $key => $data)
                        <div class="card">
                          <img src="img/fdt.png" class="card-img-top" alt="..."  width="50" height="200">
                          <div class="card-body bg-primary text-white">
                            <h5 class="card-title"><b>Nama FDT</b></h5>{{ ++$key }}.{{ $data->nama_fdt }}
                            <p class="card-text">Target : {{ $data->target }}</p>
                          </div>
                          <a href="{{ route('progresPic') }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>Detail Progres</a>
                        </div>
                        @endforeach
                    </div>
            
            
                <!-- fotter -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
  @endsection