@extends('layouts.main')

@section('content')
           
             <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">KKD</h3>
                    </div>
                    
                    <div class="card-body">
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
                                    
                                    @foreach ($histories as $history)
                                        
                                    <tr>
                                        <td rowspan="2"> {{$loop->iteration}}</td>
                                        <td rowspan="2">{{substr($history->created_at->isoFormat('D MMMM Y'),0,10)}} </td>
                                        <td> Juz : {{$history->juz_awal}}</td>
                                        <td> WIB: {{substr($history->created_at,10)}}</td>
                                        <td> Juz : {{$history->juz_akhir}}</td>
                                        <td> @if($history->created_at == $history->updated_at  )
                                            <span>WIB:</span>
                                        @else  
                                            <span>  {{substr($history->updated_at,10)}}</span>
                                        @endif</td>
                                        <td rowspan="2"> 
                                            @if($history->created_at == $history->updated_at  )
                                                <span class="text-danger">proses</span>
                                            @else  
                                                <span class="text-success">Done</span>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td> QS : {{$history->surah_awal}}</td>
                                        <td> AYAT:{{$history->ayat_awal}} </td>
                                        <td> QS : {{$history->surah_akhir}}</td>
                                        <td> AYAT: {{$history->ayat_akhir}}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success mt-4 mb-0 float-right" name="action">Download KKD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
@endsection