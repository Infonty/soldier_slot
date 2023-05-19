<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <title>Picktime</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <style class="text/css">
      .stop-scrolling {
        height: 100%;
        overflow: hidden;
    }
    </style>
</head>

<body>

    @include('layouts.app.header')
    @yield('main')
    @include('layouts.app.footer')

    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
    <script src="node_modules/html5-qrcode/html5-qrcode.min.js"></script>
    <!--<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>-->

      <script>
            
        function disableScroll() {
            console.log("disable");
            document.body.classList.add("stop-scrolling");
        }
            
        function enableScroll() {
            console.log("enable");
            document.body.classList.remove("stop-scrolling");
        }
  
        let button = document.getElementById("qr-button");

        const html5QrCode = new Html5Qrcode("reader");

        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            if(decodedText == "C562D3DDC79B78D56C1023048AD71CD3"){
                window.location.href = "{{route('slot.confirm')}}";
            } else {
                window.alert("confirmation failed."+decodedText);
            }
        };

        const config = { fps: 30, qrbox: 250 };
        
        button.addEventListener("click",function(){
            html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback);    
            document.getElementsByClassName("render")[0].style.display = "block";
            disableScroll();

        },false);

        let closeButton = document.getElementById("close");
        
        closeButton.addEventListener("click",function(){

        html5QrCode.stop()
        document.getElementsByClassName("render")[0].style.display = "none";
        enableScroll();

        },false);
  
        

      </script>

</body>
</html>