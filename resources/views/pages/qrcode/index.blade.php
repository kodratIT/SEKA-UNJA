@extends('layouts.main')

@section('content')
          <!-- Row -->
        <div class="row mx-auto">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">QR Code</h4>
                    </div>
                    <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{ session('success') }}
                            </div>
                            @endif
                            @if ($qrcode['created_at'] !== "failed")
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs panel-secondary">
                                            <li><a href="#tab1" class="active" data-bs-toggle="tab"><span><i class="fe fe-user me-1"></i></span>Datang</a></li>
                                            <li><a href="#tab2" data-bs-toggle="tab"><span><i class="fe fe-calendar me-1"></i></span>Pulang</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="tab1">
                                            {!! QrCode::size(200)->generate($qrcode['firstQR']); !!}
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            {!! QrCode::size(200)->generate($qrcode['lastQR']); !!}
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="d-flex justify-content-center"  id="qr1">
                                <form action="{{route('admin.create.qr')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{Auth::user()->id}}" name="admin_id">
                                    <button class="btn btn-primary mt-4 " >Generated QR-Code</button>
                                </form>
                            </div>
                            @endif
                        </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
          
        </div>
@endsection
@section('script')
    <script>
        const qr_datang = document.getElementById('#qrdatang')
        qr_datang.addEventListener("click", myFunction)
        function myFunction() {
            console.log("hai")
        /     // qr_1.style.display ="none";
        }
    </script>
@endsection