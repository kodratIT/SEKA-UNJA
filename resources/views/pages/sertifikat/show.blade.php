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
                        <div class="row">
                            
                            <div class="col-6">
                                <div class="">
                                    <div class="form-group">
                                        <label for="role" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="role" name="name" value="Kodrat Pamungkas" disabled>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="">
                                    <div class="form-group">
                                        <label for="role" class="form-label">Fak/Prodi</label>
                                        <input type="text" class="form-control" id="role" name="name" value="Sistem Informasi" disabled>
                                    </div>
                                    
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <div class="form-group">
                                        <label for="role" class="form-label">NIM</label>
                                        <input type="text" class="form-control" id="role" name="name" value="F1E121034" disabled>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="">
                                    <div class="form-group">
                                        <label for="role" class="form-label">Semester</label>
                                        <input type="text" class="form-control" id="role" name="name" value="4 " disabled>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive text-center">
                            <table class="table table-bordered border text-nowrap mb-0 " id="new-edit">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th colspan="2">Batas Mulai QS dan Waktu</th>
                                        <th colspan="2">Batas Akhir QS dan Waktu</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td rowspan="2"> 1</td>
                                        <td rowspan="2"> 01/01/2024</td>
                                        <td> Juz : 1</td>
                                        <td> WIB: 08.00 </td>
                                        <td> Juz : 1</td>
                                        <td> WIB: 9.00</td>
                                        <td rowspan="2" class="text-success"> Done</td>

                                    </tr>
                                    <tr>
                                        <td> QS : Al- Baqarah</td>
                                        <td> AYAT:1 </td>
                                        <td> QS : Al- Baqarah</td>
                                        <td> AYAT: 20</td>
                                    </tr>

                                    <tr>
                                        <td rowspan="2"> 2</td>
                                        <td rowspan="2"> 01/01/2024</td>
                                        <td> Juz :</td>
                                        <td> WIB: </td>
                                        <td> Juz :</td>
                                        <td> WIB: </td>
                                        <td rowspan="2" class="text-success"> Done</td>

                                    </tr>
                                    <tr>
                                        <td> QS :</td>
                                        <td> AYAT: </td>
                                        <td> QS :</td>
                                        <td> AYAT: </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                        <div class="d-flex justify-content-center">
                            {{-- <button class="btn btn-secondary mt-4 mb-5 ms-auto" name="action">Aprovade</button> --}}
                            <button class="btn btn-secondary mt-4 mb-5 ms-auto" name="action">Aprovade</button>

                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
          
        </div>
@endsection

@section('script')
    
@endsection
