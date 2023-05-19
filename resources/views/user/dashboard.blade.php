@extends('layouts.app')
@section('main')
<section id="QR-Scanner" class="bg-dark text-light" style="min-height:600px;">

        <div class="container">
            <div class="row p-md-5 p-0">

                <div class="col-md-12 py-2 text-center" style="margin:0 auto;">
                    <h2 class="text-center">API</h2>
                    <div class="qr-code p-3 border border-primary" style="max-width:300px; margin:20px auto !important;">
                        <img src="assets/images/qr-code.png"  class="img-fluid" alt="">
                    </div>
                    <button id="qr-button" class="btn btn-primary rounded-1">Scan</button>
                    <!--<a href="{{route('slot.confirm')}}" class="btn btn-primary rounded-1">Confirm</a>-->
                    <div class="render">
                      <div id="reader" style="width: 300px; margin:0 auto;"></div>
                      <button id="close" class="btn btn-primary m-3 rounded-pill">
                        <i class="fa fa-circle-xmark"></i>
                      </button>
                    </div>
                </div>

            </div>
        </div>
</section>

@endsection