<!DOCTYPE html>
<html>
<script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="aframe-ar.js"></script>

<body style='margin : 0px; overflow: hidden;'>
    <a-scene stats embedded arjs='sourceType: webcam;'>

        <a-assets>
            <a-asset-item id="model" src="models/manekiinu.gltf" />
        </a-assets>
        <a-gltf-model src="#model" scale="0.01 0.01 0.01"></a-gltf-model>
        <!--<a-box material='color: black;'></a-box>-->
        <a-marker-camera preset='custom' type='pattern' patterUrl='ar.patt' url='ar.patt'>

        </a-marker-camera>
    </a-scene>
</body
</html>
