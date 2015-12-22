<?php
require("config.php");
?>
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/homefade.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
}
</style>
<head>

<script>
</script>

</head>
<html>
<body>
<div class="game">
<table>
<tr><td>Welcome to your pizza oven!</td></tr>
<tr><td></td></tr>
<tr><td><img src ="pics\oven.png" style="z-index:1" width="600px" id="bread"></td>
</tr>
</table>
</div>
</body>
</html>
