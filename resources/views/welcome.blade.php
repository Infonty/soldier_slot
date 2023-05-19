@extends("layouts.guest")
@section("main")
<section id="QR-Scanner" class="bg-dark text-light" style="min-height:500px;">

<div class="container">
    <div class="row p-md-5 p-0">

        <div class="col-md-6 d-md-block d-none">
            <h1 class="text-md-start text-center">Welcome To <span class="text-primary">Pick</span> Time!</h1>
              <ol class="dc-ol mt-5">
                <li>Login</li>
                <li>Scan the QR Code on Wall to confirm booking.</li>
                <p class="fs-5 text-primary mt-5">Note : If the confirmation fails, you are due your appointed time. Book a new slot and try again.</p>
              </ol>
        </div>

        <div class="col-md-6 py-2 text-center">
            <h2 class="text-center">QR-Service</h2>
            <div class="qr-code p-3 border border-primary" style="max-width:300px; margin:20px auto !important;">
                <img src="assets/images/qr-code.png"  class="img-fluid" alt="">
            </div>
            
            
        </div>

        <div class="col-md-6 d-md-none d-block text-md-start text-center">
            <h1 class="mt-md-0 mt-5">QR-Code Scanner</h1>
              <ol class="dc-ol mt-md-5 mt-2">
                <li>Click On Scan</li>
                <li>Scan the QR Code on Wall to confirm booking.</li>
                <p class="fs-5 text-primary mt-5">Note : If the confirmation fails, you are due your appointed time. Book a new slot and try again.</p>
              </ol>
        </div>
    </div>
</div>
</section>
@endsection