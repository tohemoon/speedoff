
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Video Player</title>

  <style>
    #vg-player {
      width: 100%;
      margin: 0;
      padding: 0;
      background: #000;
      font-family: Arial, Helvetica, sans-serif;
    }

    #vg-video-wrap {
      position: relative;
      width: 100%;
      max-width: 900px;
      margin: 0 auto;
      background: #000;
      overflow: hidden;
    }

    #vg-video {
      display: block;
      width: 100%;
      height: auto;
      min-height: 200px;
      background: #000;
    }

    #vg-error {
      display: none;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 10px;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.8);
      color: #fff;
      text-align: center;
      font-size: 13px;
      z-index: 50;
    }
  </style>
</head>

<body style="margin:0;background:#000;">

  <div id="vg-player">
    <div id="vg-video-wrap">

      <video
        id="vg-video"
        controls
        playsinline
        webkit-playsinline
        preload="metadata">
      </video>

      <div id="vg-error" role="status" aria-live="polite">
        Video is unavailable.
      </div>

    </div>
  </div>

  <!-- POPUNDER AD: fungsi asli dipertahankan -->
  <script
    async
    data-cfasync="false"
    data-clocid="2123547"
    src="https://driverhugoverblown.com/on.js">
  </script>

  <script>
  (function () {
    "use strict";

    /* CONFIG: sumber video asli */
    const CDN = "https://cdn.videy.co/";
    const DIRECT = "";

    /* ELEMENT */
    const video = document.getElementById("vg-video");
    const error = document.getElementById("vg-error");

    function showError(message) {
      error.textContent = message || "Video is unavailable.";
      error.style.display = "block";
    }

    /* AMBIL PARAMETER ?id= */
    const params = new URLSearchParams(
      window.location.search
    );

    let id = params.get("id");

    /* VALIDASI ID */
    if (!id || !id.trim()) {
      showError("Video ID is missing.");
      return;
    }

    /* BERSIHKAN ID */
    id = id.trim().replace(/\.mp4$/i, "");

    id = id.replace(/[^a-zA-Z0-9_-]/g, "");

    if (!id) {
      showError("Invalid video ID.");
      return;
    }

    /* BUAT URL VIDEO */
    const source = DIRECT
      ? DIRECT
      : CDN + id + ".mp4";

    console.log("VIDEO ID:", id);
    console.log("VIDEO SOURCE:", source);

    /* PASANG SUMBER VIDEO */
    video.addEventListener("error", function () {
      console.error("Video failed to load:", source);
      showError("Video is unavailable.");
    });

    video.addEventListener("loadedmetadata", function () {
      error.style.display = "none";
    });

    video.src = source;
    video.load();
  })();
  </script>

  <!-- HISTATS: kode asli dipertahankan -->
  <script>
    var _Hasync = _Hasync || [];

    _Hasync.push([
      "Histats.start",
      "1,4275200,4,0,0,0,00010000"
    ]);

    _Hasync.push(["Histats.fasi", "1"]);
    _Hasync.push(["Histats.track_hits", ""]);

    (function () {
      var hs = document.createElement("script");
      hs.type = "text/javascript";
      hs.async = true;
      hs.src = "https://s10.histats.com/js15_as.js";

      (
        document.getElementsByTagName("head")[0] ||
        document.getElementsByTagName("body")[0]
      ).appendChild(hs);
    })();
  </script>

  <noscript>
    <a href="/" target="_blank" rel="noopener">
      <img
        src="https://sstatic1.histats.com/0.gif?4275200&amp;101"
        alt="Website traffic statistics"
        border="0">
    </a>
  </noscript>

</body>
</html>
