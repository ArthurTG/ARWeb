<!doctype HTML>
<html>
<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.0/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs vr-mode-ui="enabled: false">
            <a-assets>
                    <a-asset-item id="object-obj" src="BMW.obj" shadow="receive:false"></a-asset-item>
                    <a-asset-item id="object-mtl" src="BMW.mtl"></a-asset-item>
            </a-assets>         
        <a-marker-camera preset='hiro'>
            <a-entity id="loadingEl" obj-model="obj: #object-obj; mtl: #object-mtl" scale=".01 .01 .01" rotation="0 0 0" loader></a-entity>
        </a-marker-camera>
      <a-entity camera>
            
      </a-entity>
    </a-scene>
  </body>
</html>
