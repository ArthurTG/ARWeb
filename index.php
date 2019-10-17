<!doctype HTML>
<html>
<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.0/aframe/build/aframe-ar.js"></script>
<body style='margin : 0px; overflow: hidden;'>

  
    <a-scene embedded arjs vr-mode-ui="enabled: false">
        <a-assets>
            <a-asset-item id="integra" src="https://github.com/ArthurTG/ARWeb/blob/master/integra.gltf"></a-asset-item>
        </a-assets>

        <a-marker preset='hiro'>
            <a-gltf-model  src="#integra" scale=".025 .025 .025"></a-gltf-model>
        </a-marker>
    <a-entity camera>
            
      </a-entity>
    </a-scene>
    
  </body>
</html>
