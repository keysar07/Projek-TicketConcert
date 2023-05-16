<!DOCTYPE html>
<html>
<head>
  <title>Tiket Konser Coldplay</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .ticket {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      background-color: #f9f9f9;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .ticket-header {
      margin-bottom: 20px;
    }

    .ticket-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .ticket-info {
      margin-bottom: 20px;
    }

    .ticket-info p {
      margin: 5px;
    }

    .ticket-footer {
      color: #777;
    }
  </style>
</head>
<body>
  <div class="ticket">
    <div class="ticket-header">
      <h1 class="ticket-title">Tiket Konser Coldplay</h1>
    </div>
    <div class="ticket-info">
        <p><strong>ID Tiket:</strong> {{ $pesan->id }}</p>
      <p><strong>Nama:</strong> {{ $pesan->user->name }}</p>
      <p><strong>Tanggal:</strong> 15 November 2023</p>
      <p><strong>Jam:</strong> 10:00 WIB</p>
    </div>
    <div class="ticket-footer">
      <p>Tolong untuk screenshot atau print bukti ini, dan serahkan kepada petugas untuk penukaran tiket. <span style="color: red
      ">Jangan sampai ada yang melihat ID Tiket Anda!</span><br><br>
        Terima kasih telah menggunakan layanan kami!</p>
    </div>
  </div>
  <script type="text/javascript">
    window.print();
</script>
</body>
</html>