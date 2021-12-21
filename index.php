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
                <a-asset-item id="amelia" src="amelia_watson/scene.gltf"></a-asset-item>
            </a-assets>   
      
        <<a-marker type='pattern' url='pattern-qr-code.patt'>
            <a-gltf-model  src="#amelia" scale=".4 .4 .4" rotation="-90. .0 .0"></a-gltf-model>
        </a-marker>
      
      <a-entity camera>
            
      </a-entity>
    </a-scene>
    
  </body>
</html>
