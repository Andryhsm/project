<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/cerulean.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $("#1").click(function(){
        $("#etape2").hide();
        $("#etape1").show();
    });
    $("#2").click(function(){
        $("#etape2").show();
        $("#etape1").hide();
    });
});
</script>
</head>
<body>

    <div id="etape1" class="well">Etape1</div>
    <div id="etape2" class="well" style="display: none;">Etape2</div>

    <button class="btn btn-primary" id="1">Etape 1</button>
<button class="btn btn-success" id="2">Etape 2</button>

</body>
</html>
