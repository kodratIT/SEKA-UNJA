@extends('layouts.main')

@section('content')
          <!-- Row -->
        <div class="row mx-auto">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Presensi Datang</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{ session('success') }}
                        </div>
                        @endif
                        <div id="reader"  width="500px"></div>
                            <div class="">
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                        @if ($data['created_at'] === 'success')
                                         <button class="btn btn-primary mt-4 " id="scan1" >Scan QR-Code</button>
                                        @else
                                            <button class="btn btn-primary mt-4 " id="scan1" disabled>Scan QR-Code</button>
                                        @endif
                                    </div>
                                    <input type="hidden" name="result" id="result">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Presensi Pulang</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success2'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{ session('success2') }}
                        </div>
                        @endif
                            <div class="">
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                        @if ($status['btn'] === 'inactive')
                                          <button class="btn btn-primary mt-4 " id="scan1" disabled>Scan QR-Code</button>

                                        @else
                                      
                                          <a href="{{route('presensi.pulang')}}" class="btn   btn-primary mt-4 mb-0" name="action">Scan QR-Code</a>
                                        @endif
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
    {{-- qr-code scanner --}}
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        const qr_datang = document.getElementById('scan1');
        qr_datang.addEventListener("click", myFunction);
        function myFunction() {
            qr_datang.style.display = "none";
            function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
                $('#result').val(decodedText);
                            let id = decodedText;                
                            html5QrcodeScanner.clear().then(_ => {
                                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                                $.ajax({
                                    url: "{{ route('validasi') }}",
                                    type: 'POST',            
                                    data: {
                                        _methode : "POST",
                                        _token: CSRF_TOKEN, 
                                        qr_code : id
                                    },            
                                    success: function (response) { 
                                        if(response.status == 200){
                                            var bel = new Audio('{{url('../assets/sound/beep.wav')}}');
                                            bel.play();
                                            qr_datang.style.display = "block";
                                            qr_datang.innerHTML = "Redirect ...";
                                            window.location.href = "{{route('presensi.datang')}}";
                                        }else{
                                            alert('gagal');
                                        }
                                    }
                                });   
                            }).catch(error => {
                                alert('something wrong');
                            });
            }

            function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
            }

            let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        }
    </script>

  
@endsection
