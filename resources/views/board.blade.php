<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pembelian tiket konser Colplay</title>
    <style>
        /* Style pada video: 100% lebar dan tinggi untuk menutupi seluruh jendela browser */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/*Tambahkan beberapa konten di bagian bawah video / halaman */
.content {
    text-align: center;
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  color: #f1f1f1;
  width: 100%;
  margin-right: 10px;
  padding: 20px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

/* Style pada button  yang digunakan untuk jeda / memutar video */
#myBtn {
  text-align: center;
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #8400ff;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: rgb(173, 32, 255);
}

#myBtn1 {
  text-align: center;
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #750000;
  color: #fff;
  cursor: pointer;
}

#myBtn1:hover {
  background: #ddd;
  color: rgb(255, 0, 0);
}
    </style>
</head>
<body>
 <!-- Videonya -->
<video autoplay muted loop id="myVideo">
    <source src="{{ asset('dashboard1/images/Coldplay.mp4') }}" type="video/mp4">
  </video>
  
  <!-- Opsional: beberapa teks overlay untuk mendeskripsikan video -->
  <div class="content">
    <h2 style="text-align: center;" class="headline"></h2>
    <h4 style="text-align:center" class="span"></h4>
    <!-- Gunakan tombol untuk menjeda / memutar video dengan JavaScript -->
    <a href="{{ route('login') }}"><button id="myBtn" class="mt-2">Pesan Tiket</button></a>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
<script>
  gsap.registerPlugin(TextPlugin);
  gsap.to('.headline' , {duration: 2, delay: 0.5 ,text: 'Keysar Tickets' });
  gsap.to('.span' , {duration: 6, delay: 2 ,text: 'Klik Tombol dibawah ini untuk melakukan pemesanan tiket konser Coldplay' });
</script>
</html>