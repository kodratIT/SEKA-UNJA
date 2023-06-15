@extends('layouts.main')

@section('content')
          <!-- Row -->
        <div class="row mx-auto">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Kedatangan</h4>
                    </div>
                    <div class="card-body">

                            <div class="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <form action="{{route('presensi.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                                <label for="surah">Surah</label>
                                                <input type="text" class="form-control " id="surah" value="" placeholder="masukan data ..." name="surah_awal">
                                                <label for="juz_l" class="form-label">Juz</label>
                                                <input type="text" class="form-control " id="juz_l" value="" placeholder="masukan data ..."  name="juz_awal">
                                                <label for="ayat">Ayat</label>
                                                <input type="text" class="form-control " id="ayat" value="" placeholder="masukan data ..." name="ayat_awal">
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
