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
            <!-- <a-entity gltf-model="url(integra.gltf)" scale=".05 .05 .05"></a-entity> -->
          <a-entity geometry="primitive:plane;width:2;height:2;" position="0 0 0" rotation="270 0 0" material="shader:gif;src:url(platano.gif);alphaTest:0.5;"></a-entity>
        </a-marker-camera>
      <a-entity camera>
            
      </a-entity>
    </a-scene>
    
  </body>
</html>
