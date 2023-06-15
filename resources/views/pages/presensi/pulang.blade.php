@extends('layouts.main')

@section('content')
          <!-- Row -->
        <div class="row mx-auto">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Kepulangan</h4>
                    </div>
                    <div class="card-body">

                            <div class="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <form action="{{route('presensi.update',$user->id)}}" method="post">
                                                @csrf

                                                @foreach ($histories as $history)
                                                    
                                                <input type="hidden" value="{{$history->surah_awal}}" name="surah_awal" >
                                                <input type="hidden" value="{{$history->juz_awal}}" name="juz_awal">
                                                <input type="hidden" value="{{$history->ayat_awal}}" name="ayat_awal">
                                                <input type="hidden" value="{{$history->created_at}}"  name="time">
                                                @endforeach
                                                <label for="surah">Surah</label>
                                                <input type="text" class="form-control " id="surah" value="" placeholder="masukan data ..." name="surah_akhir">
                                                <label for="juz_l" class="form-label">Juz</label>
                                                <input type="text" class="form-control " id="juz_l" value="" placeholder="masukan data ..."  name="juz_akhir">
                                                <label for="ayat">Ayat</label>
                                                <input type="text" class="form-control " id="ayat" value="" placeholder="masukan data ..." name="ayat_akhir">
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-primary mt-4 mb-0 float-right" name="action">Save</button>
                                                </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
@endsection

@section('script')
    <script>
        const qr_datang = document.getElementById('qr-datang');
        const display_qr = document.getElementById('display-qr');

        qr_datang.addEventListener("click", myFunction);
        function myFunction() {
            display_qr.setAttribute("id",'reader');
        }
</script>
@endsection
