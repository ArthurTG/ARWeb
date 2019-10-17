<!doctype HTML>
<html>
  <head>
      <script src="/A-Frame/aframe.min.js"></script>
      <script src="/A-Frame/aframe-ar.js"></script>
      <script src="/A-Frame/aframe-gif-shader.min.js"></script>
      <script src="/A-Frame/aframe-gif-component.min.js"></script>
  </head>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs= "debugUIEnabled:false" vr-mode-ui="enabled: false">
            <a-assets>
                    
            </a-assets>   
      
        <a-marker type='pattern' url='pattern-mente.patt'>
            <a-gltf-model  src="integra.gltf" scale=".025 .025 .025"></a-gltf-model>
        </a-marker>

        <a-marker type='pattern' url='pattern-cuerpo.patt'>
          <a-gltf-model  src="Mision.gltf" scale=".2 .2 .2"></a-gltf-model>
        </a-marker>

        <a-marker type='pattern' url='pattern-emociones.patt'>
          <a-gltf-model  src="Vision.gltf" scale=".2 .2 .2"></a-gltf-model>
        </a-marker>
      
      <a-entity camera>
            
      </a-entity>
    </a-scene>
    
  </body>
</html>
