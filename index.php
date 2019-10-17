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
      
        <a-marker  type='pattern' url='pattern-mente.patt'>
            <a-entity gltf-model="url(integra.gltf)" scale=".025 .025 .025"></a-entity>
        </a-marker>
      
      <a-marker type='pattern' url='pattern-cuerpo.patt'>
            <a-entity text="value: What's up" ></a-entity>
        </a-marker>
      
      <a-entity camera>
            
      </a-entity>
    </a-scene>
    
  </body>
</html>
