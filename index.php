<!doctype HTML>
<html>
  <head>
      <script src="/A-Frame/aframe.min.js"></script>
      <script src="/A-Frame/aframe-ar.js"></script>
      <script src="/A-Frame/aframe-gif-shader.min.js"></script>
      <script src="/A-Frame/aframe-gif-component.min.js"></script>
  </head>

  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs vr-mode-ui="enabled: false">
            <a-assets>
                    
            </a-assets>         
        <a-marker-camera preset='hiro'>
            <a-entity gltf-model="url(integra.gltf)" scale=".05 .05 .05"></a-entity>
        </a-marker-camera>
      <a-entity camera>
            
      </a-entity>
    </a-scene>
    
  </body>
</html>
