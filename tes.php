<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webcam Capture</title>
  <style>
    #videoElement {
      width: 400px;
      height: 300px;
      background-color: #666;
    }
    #canvasElement {
      display: none;
    }
    #captureButton {
      margin-top: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <video id="videoElement" autoplay></video>
  <canvas id="canvasElement"></canvas>
  <button id="captureButton">Capture</button>

  <script>
    const videoElement = document.getElementById('videoElement');
    const canvasElement = document.getElementById('canvasElement');
    const captureButton = document.getElementById('captureButton');

    // Akses kamera pengguna saat halaman dimuat
    navigator.mediaDevices.getUserMedia({ video: true })
      .then(function(stream) {
        videoElement.srcObject = stream;
      })
      .catch(function(error) {
        console.error('Error accessing camera:', error);
      });

    // Tanggapi saat tombol capture ditekan
    captureButton.addEventListener('click', function() {
      const context = canvasElement.getContext('2d');
      context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);

      // Ambil gambar sebagai data URL
      const imageDataUrl = canvasElement.toDataURL('image/png');
      
      // Tampilkan gambar di tag <img> atau kirim ke server
      const imageElement = new Image();
      imageElement.src = imageDataUrl;
      document.body.appendChild(imageElement);
    });
  </script>
</body>
</html>
