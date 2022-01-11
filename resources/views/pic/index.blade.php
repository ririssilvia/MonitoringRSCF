@extends('layout.master')
@section('konten')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DATA PIC</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="{{ route('createPic') }}"><button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NID</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>bidang</th>
                                            <th>fungsi</th>
                                            <th>level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pic as $key => $data)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $data->nid }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->password }}</td>
                                            <td>{{ $data->bidang }}</td>
                                            <td>{{ $data->fungsi }}</td>
                                            <td>{{ $data->level }}</td>
                                            <td>
                                                <a href="{{ route('editPic', $data->pic_id) }}"><button  class="btn btn-danger btn-sm"><i class="fas fa-edit"></i> Edit</button></a>
                                                <a href="{{ route('deletePic', $data->pic_id) }}"><button  class="btn btn-warning btn-sm"><i class="fas fa-trash"></i> Delete</button></a>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
  @endsection