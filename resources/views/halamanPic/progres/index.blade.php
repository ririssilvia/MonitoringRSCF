@extends('halamanPic.layout.master')
@section('konten')
                <!-- Begin Page Content -->
                {{-- <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DATA  PROGRES</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama PIC</th>
                                            <th>Progres</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($progresPic as $key => $data)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $data->pic->nama }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                          
                                            <td>
                                                <a href="{{ route('editProgresPic', $data->progres_id) }}"><button  class="btn btn-danger btn-sm"><i class="fas fa-edit"></i> Edit</button></a>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> --}}
                <!-- /.container-fluid -->
                <div id="wrapper">

                    <div id="content-wrapper" class="d-flex flex-column">
                        <div id="content">
            
                            <div class="container-fluid">
            
                                <!-- Page Heading -->
                                <h1 class="h3 mb-2 text-gray-800">DATA  PROGRES</h1>
                                
            
                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Progres</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama PIC</th>
                                                        <th>Progres</th>
                                                        <th>Tanggal</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                @foreach($progresPic as $key => $data)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $data->pic->nama }}</td>
                                                    <td>{{ $data->keterangan }}</td>
                                                    <td>{{ $data->tanggal }}</td>
                                                  
                                                    <td>
                                                        <a href="{{ route('editProgresPic', $data->progres_id) }}"><button  class="btn btn-danger btn-sm"><i class="fas fa-edit"></i> Edit</button></a>
                                                      </td>
                                                </tr>
                                                @endforeach
                                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
  @endsection