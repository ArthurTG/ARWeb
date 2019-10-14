<!doctype HTML>
<html>
<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.0/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <a-marker preset="hiro">
          <a-box position='0 0.5 0' material='color: yellow;'></a-box>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>
