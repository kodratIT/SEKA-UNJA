@extends('layouts.main')

@section('content')
          <!-- Row -->
        <div class="row mx-auto">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pengajuan Sertifikat Khatam</h4>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive text-center">
                                <table class="table table-bordered border text-nowrap mb-0 " id="new-edit">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Created At</th>
                                            <th>status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>Kodrat Pamungkas</td>
                                            <td>kodrat@gmail.com</td>
                                            <td>01/02/2023</td>
                                            <td class="text-danger">Processing</td>
                                            <td class="d-flex justify-content-center border-0">
                                                <a href="{{route('admin.pengajuanSertifikat.show',1)}}" class="btn btn-sm btn-primary badge  mx-2"><i class="fe fe-edit"></i></a>
                                                <button class="btn btn-sm btn-danger badge " type="submit" name="action"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Muhammad Rayaan</td>
                                            <td>rayyan@gmail.com</td>
                                            <td>01/01/2023</td>
                                            <td class=" text-primary ">Completed</td>
                                            <td class="d-flex justify-content-center border-0">
                                                <a href="{{route('admin.pengajuanSertifikat.show',1)}}" class="btn btn-sm btn-primary badge  mx-2"><i class="fe fe-edit"></i></a>
                                                <button class="btn btn-sm btn-danger badge " type="submit" name="action"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
          
        </div>
@endsection

@section('script')
    
@endsection
