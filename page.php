<?php require './protection.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/cerulean.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-datepicker-1.6.4/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-datepicker-1.6.4/css/bootstrap-datetimepicker.min.css">

        <style>
            #rot  img{
                -webkit-transition:-webkit-transform .9s; 
                -moz-transition:-moz-transform .9s;       
                -o-transition:-o-transform .9s;          
                -ms-transition:-ms-transform .9s;         
                transition:transform .9s;
            }
            #rot  img:hover{
                -webkit-transform:rotate(720deg); 
                -moz-transform:rotate(720deg);
                -o-transform:rotate(720deg); 
                -ms-transform:rotate(720deg); 
                transform:rotate(720deg);
            }
            img.zoomEffect {
                -moz-transition: all 0.5s ease-in-out 0s;
                -webkit-transition: all 0.5s ease-in-out 0s;
                -o-transition: all 0.5s ease-in-out 0s;
                -ms-transition: all 0.5s ease-in-out 0s;
                transition: all 0.5s ease-in-out 0s;
                opacity: 0.7;
            }
            img.zoomEffect:hover {
                -moz-transform: rotate(5deg) scale(1.10);
                -webkit-transform: rotate(5deg) scale(1.10);
                -o-transform: rotate(5deg) scale(1.10);
                -ms-transform: rotate(5deg) scale(1.10);
                transform: rotate(5deg) scale(1.10);
                opacity: 1;
            }
            body
            {
                background: url("img/bg5.jpg") no-repeat center fixed;
                background-size: cover;
                -webkit-background-size: cover;
            }
            label {
                color: white;
            }
            .well
            {
                background: rgba(10, 10, 10, 0.51);
            }
            h4{
                color: white;
            }
        </style>

        <script src="jquery/jquery-2.1.4.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/js/bootstrap-datetimepicker.js"></script>
        <script src="bootstrap-datepicker-1.6.4/locales/bootstrap-datepicker.fr.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
        <script>
            $(document).ready(function () {
                $("#insulinelentematin").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir);
                    var total = totalIL + parseInt(totalIR);
                    $("#totalinsulinelente").val(totalIL);
                    $("#quantitetotal").val(total);
                });
                $("#insulinelentemidi").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir);
                    var total = totalIL + parseInt(totalIR);
                    $("#totalinsulinelente").val(totalIL);
                    $("#quantitetotal").val(total);
                });
                $("#insulinelentesoir").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            totalIR = ($("#totalinsulinerapide").val()) ? $("#totalinsulinerapide").val() : 0;
                    var totalIL = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir);
                    var total = totalIL + parseInt(totalIR);
                    $("#totalinsulinelente").val(totalIL);
                    $("#quantitetotal").val(total);
                });
                $("#insulinerapidematin").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir);
                    $("#totalinsulinerapide").val(totalR);
                    var total = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + totalR;
                    $("#quantitetotal").val(total);
                });
                $("#insulinerapidemidi").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir);
                    $("#totalinsulinerapide").val(totalR);
                    var total = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + totalR;
                    $("#quantitetotal").val(total);
                });
                $("#insulinerapidesoir").change(function (event) {
                    var ILmidi = ($("#insulinelentemidi").val()) ? $("#insulinelentemidi").val() : 0,
                            ILmatin = ($("#insulinelentematin").val()) ? $("#insulinelentematin").val() : 0,
                            ILsoir = ($("#insulinelentesoir").val()) ? $("#insulinelentesoir").val() : 0,
                            IRmatin = ($("#insulinerapidematin").val()) ? $("#insulinerapidematin").val() : 0,
                            IRmidi = ($("#insulinerapidemidi").val()) ? $("#insulinerapidemidi").val() : 0,
                            IRsoir = ($("#insulinerapidesoir").val()) ? $("#insulinerapidesoir").val() : 0;
                    var totalR = parseInt(IRmatin) + parseInt(IRmidi) + parseInt(IRsoir);
                    $("#totalinsulinerapide").val(totalR);
                    var total = parseInt(ILmatin) + parseInt(ILmidi) + parseInt(ILsoir) + totalR;
                    $("#quantitetotal").val(total);
                });
                $('.datepicker').datepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    format: "yyyy-mm-dd",
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
                $('.datetimepicker').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
                $("#1").click(function () {
                    $("#etape1").show();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").hide();
                });
                $("#2").click(function () {
                    $("#etape1").hide();
                    $("#etape2").show();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    var Horaire1 = "",
                            Horaire2 = "",
                            Horaire3 = "",
                            Horaire4 = "",
                            Horaire5 = "",
                            Horaire6 = "",
                            Horaire7 = "",
                            Horaire8 = "";
                    var Horaire9 = "",
                            Horaire10 = "",
                            Horaire11 = "",
                            Horaire12 = "",
                            Horaire13 = "",
                            Horaire14 = "",
                            Horaire15 = "",
                            Horaire16 = "";
                    var Horaire21 = "",
                            Horaire22 = "",
                            Horaire23 = "",
                            Horaire24 = "",
                            Horaire25 = "",
                            Horaire26 = "",
                            Horaire27 = "",
                            Horaire28 = "";
                    var Horaire29 = "",
                            Horaire210 = "",
                            Horaire211 = "",
                            Horaire212 = "",
                            Horaire213 = "",
                            Horaire214 = "",
                            Horaire215 = "",
                            Horaire216 = "";
                    var Debit1 = 0,
                            Debit2 = 0,
                            Debit3 = 0,
                            Debit4 = 0,
                            Debit5 = 0,
                            Debit6 = 0,
                            Debit7 = 0,
                            Debit8 = 0;
                    var Debit9 = 0,
                            Debit10 = 0,
                            Debit11 = 0,
                            Debit12 = 0,
                            Debit13 = 0,
                            Debit14 = 0,
                            Debit15 = 0,
                            Debit16 = 0;
                    var Debit21 = 0,
                            Debit22 = 0,
                            Debit23 = 0,
                            Debit24 = 0,
                            Debit25 = 0,
                            Debit26 = 0,
                            Debit27 = 0,
                            Debit28 = 0;
                    var Debit29 = 0, Debit210 = 0, Debit211 = 0, Debit212 = 0, Debit213 = 0, Debit214 = 0, Debit215 = 0, Debit216 = 0;
                    var ValDatesHemGlyc1 = 0, ValDatesHemGlyc2 = 0, ValDatesHemGlyc3 = 0, ValDatesHemGlyc4 = 0, ValDatesHemGlyc5 = 0, ValDatesHemGlyc6 = 0, ValDatesHemGlyc7 = 0, ValDatesHemGlyc8 = 0, ValDatesHemGlyc9 = 0;
                    var ValHbA1cHemGlyc1 = 0, ValHbA1cHemGlyc2 = 0, ValHbA1cHemGlyc3 = 0, ValHbA1cHemGlyc4 = 0, ValHbA1cHemGlyc5 = 0, ValHbA1cHemGlyc6 = 0, ValHbA1cHemGlyc7 = 0, ValHbA1cHemGlyc8 = 0, ValHbA1cHemGlyc9 = 0;
                    jQuery(document).ready(function ($) {
                        // recup data table01
                        $("#Debit1").change(function (event) {
                            Debit1 = $('#Debit1').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit2").change(function (event) {
                            Debit2 = $('#Debit2').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit3").change(function (event) {
                            Debit3 = $('#Debit3').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit4").change(function (event) {
                            Debit4 = $('#Debit4').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit5").change(function (event) {
                            Debit5 = $('#Debit5').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit6").change(function (event) {
                            Debit6 = $('#Debit6').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit7").change(function (event) {
                            Debit7 = $('#Debit7').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit8").change(function (event) {
                            Debit8 = $('#Debit8').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit9").change(function (event) {
                            Debit9 = $('#Debit9').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit10").change(function (event) {
                            Debit10 = $('#Debit10').val();
                            Debit_graphe1(DDebit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit11").change(function (event) {
                            Debit11 = $('#Debit11').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit12").change(function (event) {
                            Debit12 = $('#Debit12').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit13").change(function (event) {
                            Debit13 = $('#Debit13').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit14").change(function (event) {
                            Debit14 = $('#Debit14').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit15").change(function (event) {
                            Debit15 = $('#Debit15').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        $("#Debit16").change(function (event) {
                            Debit16 = $('#Debit16').val();
                            Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                        });
                        // recup data table01
                        // recup data table02
                        $("#Debit21").change(function (event) {
                            Debit21 = $('#Debit21').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit22").change(function (event) {
                            Debit22 = $('#Debit22').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit23").change(function (event) {
                            Debit23 = $('#Debit23').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit24").change(function (event) {
                            Debit24 = $('#Debit24').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit25").change(function (event) {
                            Debit25 = $('#Debit25').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit26").change(function (event) {
                            Debit26 = $('#Debit26').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit27").change(function (event) {
                            Debit27 = $('#Debit27').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit28").change(function (event) {
                            Debit28 = $('#Debit28').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit29").change(function (event) {
                            Debit29 = $('#Debit29').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit210").change(function (event) {
                            Debit210 = $('#Debit210').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit211").change(function (event) {
                            Debit211 = $('#Debit211').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit212").change(function (event) {
                            Debit212 = $('#Debit212').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit213").change(function (event) {
                            Debit213 = $('#Debit213').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit214").change(function (event) {
                            Debit214 = $('#Debit214').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit215").change(function (event) {
                            Debit215 = $('#Debit215').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        $("#Debit216").change(function (event) {
                            Debit216 = $('#Debit216').val();
                            Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216);
                        });
                        // recup data table02
                        // recup data table Dates
                        $("#ValDatesHemGlyc1").change(function (event) {
                            ValDatesHemGlyc1 = $('#ValDatesHemGlyc1').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc2").change(function (event) {
                            ValDatesHemGlyc2 = $('#ValDatesHemGlyc2').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc3").change(function (event) {
                            ValDatesHemGlyc3 = $('#ValDatesHemGlyc3').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc4").change(function (event) {
                            ValDatesHemGlyc4 = $('#ValDatesHemGlyc4').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc5").change(function (event) {
                            ValDatesHemGlyc5 = $('#ValDatesHemGlyc5').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc6").change(function (event) {
                            ValDatesHemGlyc6 = $('#ValDatesHemGlyc6').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc7").change(function (event) {
                            ValDatesHemGlyc7 = $('#ValDatesHemGlyc7').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc8").change(function (event) {
                            ValDatesHemGlyc8 = $('#ValDatesHemGlyc8').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValDatesHemGlyc9").change(function (event) {
                            ValDatesHemGlyc9 = $('#ValDatesHemGlyc9').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        // recup data table Dates
                        // recup data table HbA1c
                        $("#ValHbA1cHemGlyc1").change(function (event) {
                            ValHbA1cHemGlyc1 = $('#ValHbA1cHemGlyc1').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc2").change(function (event) {
                            ValHbA1cHemGlyc2 = $('#ValHbA1cHemGlyc2').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc3").change(function (event) {
                            ValHbA1cHemGlyc3 = $('#ValHbA1cHemGlyc3').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc4").change(function (event) {
                            ValHbA1cHemGlyc4 = $('#ValHbA1cHemGlyc4').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc5").change(function (event) {
                            ValHbA1cHemGlyc5 = $('#ValHbA1cHemGlyc5').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc6").change(function (event) {
                            ValHbA1cHemGlyc6 = $('#ValHbA1cHemGlyc6').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc7").change(function (event) {
                            ValHbA1cHemGlyc7 = $('#ValHbA1cHemGlyc7').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc8").change(function (event) {
                            ValHbA1cHemGlyc8 = $('#ValHbA1cHemGlyc8').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        $("#ValHbA1cHemGlyc9").change(function (event) {
                            ValHbA1cHemGlyc9 = $('#ValHbA1cHemGlyc9').val();
                            Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        });
                        // recup data table HbA1c
                        //init graphe table date01
                        var barData1 = {
                            labels: ["Schémas 1", "Schémas 2", "Schémas 3", "Schémas 4"],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [Debit1, Debit2, Debit3, Debit4]
                                }, {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [Debit5, Debit6, Debit7, Debit8]
                                }, {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [Debit9, Debit10, Debit11, Debit12]
                                }, {
                                    fillColor: "rgba(11,56,205,0.5)",
                                    strokeColor: "rgba(11,56,205,0.8)",
                                    highlightFill: "rgba(11,56,205,0.75)",
                                    highlightStroke: "rgba(11,56,205,1)",
                                    data: [Debit13, Debit14, Debit15, Debit16]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate1').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
                        //init graphe table date01
                        //init graphe table date02
                        var barData2 = {
                            labels: ["Schémas 1", "Schémas 2", "Schémas 3", "Schémas 4"],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [Debit21, Debit22, Debit23, Debit24]
                                }, {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [Debit25, Debit26, Debit27, Debit28]
                                }, {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [Debit29, Debit210, Debit211, Debit212]
                                }, {
                                    fillColor: "rgba(11,56,205,0.5)",
                                    strokeColor: "rgba(11,56,205,0.8)",
                                    highlightFill: "rgba(11,56,205,0.75)",
                                    highlightStroke: "rgba(11,56,205,1)",
                                    data: [Debit213, Debit214, Debit215, Debit216]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate02 = document.getElementById('bardate2').getContext('2d');
                        new Chart(bardate02).Bar(barData2, barOptions);
                        //init graphe table date02
                        //init graphe table HG
                        var barDataHG = {
                            labels: [ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var barHbA1c = document.getElementById('barhg').getContext('2d');
                        new Chart(barHbA1c).Bar(barDataHG, barOptions);
                        //init graphe table HG
                    });
                    function Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16) {
                        var barData1 = {
                            labels: ["Schémas 1", "Schémas 2", "Schémas 3", "Schémas 4"],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [Debit1, Debit2, Debit3, Debit4]
                                }, {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [Debit5, Debit6, Debit7, Debit8]
                                }, {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [Debit9, Debit10, Debit11, Debit12]
                                }, {
                                    fillColor: "rgba(11,56,205,0.5)",
                                    strokeColor: "rgba(11,56,205,0.8)",
                                    highlightFill: "rgba(11,56,205,0.75)",
                                    highlightStroke: "rgba(11,56,205,1)",
                                    data: [Debit13, Debit14, Debit15, Debit16]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate1').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
                    }
                    function Debit_graphe2(Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit210, Debit211, Debit212, Debit213, Debit214, Debit215, Debit216) {
                        var barData2 = {
                            labels: ["Schémas 1", "Schémas 2", "Schémas 3", "Schémas 4"],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [Debit21, Debit22, Debit23, Debit24]
                                }, {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [Debit25, Debit26, Debit27, Debit28]
                                }, {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [Debit29, Debit210, Debit211, Debit212]
                                }, {
                                    fillColor: "rgba(11,56,205,0.5)",
                                    strokeColor: "rgba(11,56,205,0.8)",
                                    highlightFill: "rgba(11,56,205,0.75)",
                                    highlightStroke: "rgba(11,56,205,1)",
                                    data: [Debit213, Debit214, Debit215, Debit216]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate02 = document.getElementById('bardate2').getContext('2d');
                        new Chart(bardate02).Bar(barData2, barOptions);
                    }
                    function Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9) {
                        var barDataHG = {
                            labels: [ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9],
                            datasets: [{
                                    fillColor: "rgba(147,163,244,0.5)",
                                    strokeColor: "rgba(147,163,244,0.8)",
                                    highlightFill: "rgba(147,163,244,0.75)",
                                    highlightStroke: "rgba(147,163,244,1)",
                                    data: [ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var barHbA1c = document.getElementById('barhg').getContext('2d');
                        new Chart(barHbA1c).Bar(barDataHG, barOptions);
                    }
                });
                $("#3").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").show();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    var date1 = "", date2 = "", date3 = "", date4 = "", date5 = "", date6 = "", date7 = "", date8 = "", date9 = "";
                    var taille1 = 0, taille2 = 0, taille3 = 0, taille4 = 0, taille5 = 0, taille6 = 0, taille7 = 0, taille8 = 0, taille9 = 0;
                    var poids1 = 0, poids2 = 0, poids3 = 0, poids4 = 0, poids5 = 0, poids6 = 0, poids7 = 0, poids8 = 0, poids9 = 0;
                    var imc1 = 0, imc2 = 0, imc3 = 0, imc4 = 0, imc5 = 0, imc6 = 0, imc7 = 0, imc8 = 0, imc9 = 0;
                    jQuery(document).ready(function ($) {
                        $("#date1").change(function (event) {
                            date1 = $('#date1').val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#poids1").change(function (event) {
                            date1 = $("#date1").val();
                            taille1 = $("#taille1").val();
                            poids1 = $("#poids1").val();
                            var taille = Math.sqrt(taille1);
                            imc1 = poids1 / taille;
                            $("#imc1").val(imc1);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date2").change(function (event) {
                            date2 = $("#date2").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#poids2").change(function (event) {
                            date2 = $("#date2").val();
                            taille2 = $("#taille2").val();
                            poids2 = $("#poids2").val();
                            var taille = Math.sqrt(taille2);
                            imc2 = poids2 / taille;
                            $("#imc2").val(imc2);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date3").change(function (event) {
                            date3 = $("#date3").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#poids3").change(function (event) {
                            date3 = $("#date3").val();
                            taille3 = $("#taille3").val();
                            poids3 = $("#poids3").val();
                            var taille = Math.sqrt(taille3);
                            imc3 = poids3 / taille;
                            $("#imc3").val(imc3);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date4").change(function (event) {
                            date4 = $("#date4").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#poids4").change(function (event) {
                            date4 = $("#date4").val();
                            taille4 = $("#taille4").val();
                            poids4 = $("#poids4").val();
                            var taille = Math.sqrt(taille4);
                            imc4 = poids4 / taille;
                            $("#imc4").val(imc4);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date5").change(function (event) {
                            date5 = $("#date5").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9)
                        });
                        $("#poids5").change(function (event) {
                            date5 = $("#date5").val();
                            taille5 = $("#taille5").val();
                            poids5 = $("#poids5").val();
                            var taille = Math.sqrt(taille4);
                            imc5 = poids5 / taille;
                            $("#imc5").val(imc5);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date6").change(function (event) {
                            date6 = $("#date6").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9)
                        });
                        $("#poids6").change(function (event) {
                            date6 = $("#date6").val();
                            taille6 = $("#taille6").val();
                            poids6 = $("#poids6").val();
                            var taille = Math.sqrt(taille4);
                            imc6 = poids6 / taille;
                            $("#imc6").val(imc6);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date7").change(function (event) {
                            date7 = $("#date7").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9)
                        });
                        $("#poids7").change(function (event) {
                            date7 = $("#date7").val();
                            taille7 = $("#taille7").val();
                            poids7 = $("#poids7").val();
                            var taille = Math.sqrt(taille7);
                            imc7 = poids7 / taille;
                            $("#imc7").val(imc7);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date8").change(function (event) {
                            date8 = $("#date8").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9)
                        });
                        $("#poids8").change(function (event) {
                            date8 = $("#date8").val();
                            taille8 = $("#taille8").val();
                            poids8 = $("#poids8").val();
                            var taille = Math.sqrt(taille8);
                            imc8 = poids8 / taille;
                            $("#imc8").val(imc8);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        $("#date9").change(function (event) {
                            date9 = $("#date9").val();
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9)
                        });
                        $("#poids9").change(function (event) {
                            date9 = $("#date9").val();
                            taille9 = $("#taille9").val();
                            poids9 = $("#poids9").val();
                            var taille = Math.sqrt(taille9);
                            imc9 = poids9 / taille;
                            $("#imc9").val(imc9);
                            dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9);
                        });
                        var barData = {
                            labels: [date1, date2, date3, date4, date5, date6, date7, date8, date9],
                            datasets: [
                                {
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9]
                                },
                                {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9]
                                },
                                {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9]
                                }
                            ]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bar = document.getElementById('bar').getContext('2d');
                        new Chart(bar).Bar(barData, barOptions);
                    });
                    function dater_graphe(date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9) {
                        var barData = {
                            labels: [date1, date2, date3, date4, date5, date6, date7, date8, date9],
                            datasets: [
                                {
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9]
                                },
                                {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9]
                                },
                                {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9]
                                }
                            ]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bar = document.getElementById('bar').getContext('2d');
                        new Chart(bar).Bar(barData, barOptions);
                    }
                });
                $("#4").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").show();
                    $("#etape5").hide();
                    $("#etape6").hide();
                    
                    var pmpdate1 = "",
                        pmpdate2 = "",
                        pmpdate3 = "",
                        pmpdate4 = "",
                        pmpdate5 = "",
                        pmpdate6 = "",
                        pmpdate7 = "",
                        pmpdate8 = "";
                    var pmpdate9 = "",
                        pmpdate10 = "",
                        pmpdate11 = "",
                        pmpdate12 = "",
                        pmpdate13 = "",
                        pmpdate14 = "",
                        pmpdate15 = "",
                        pmpdate16 = "";
                    var pmpdate17 = "",
                        pmpdate18 = "",
                        pmpdate19 = "",
                        pmpdate20 = "",
                        pmpdate21 = "",
                        pmpdate22 = "",
                        pmpdate23 = "",
                        pmpdate24 = "";
                    var pmpdate25 = "",
                        pmpdate26 = "",
                        pmpdate27 = "",
                        pmpdate28 = "",
                        pmpdate29 = "",
                        pmpdate291 = "",
                        pmpdate292 = "",
                        pmpdate293 = "";
                    var pmpdate294 = "",
                        pmpdate295 = "",
                        pmpdate296 = "",
                        pmpdate297 = "";
                    jQuery(document).ready(function ($) {
                        $("#pmpdate1").change(function (event) {
                            pmpdate1 = $('#pmpdate1').val();
                        });
                        $("#pmpdate2").change(function (event) {
                            pmpdate2 = $('#pmpdate2').val();
                        });
                        $("#pmpdate3").change(function (event) {
                            pmpdate3 = $('#pmpdate3').val();
                        });
                        $("#pmpdate4").change(function (event) {
                            pmpdate4 = $('#pmpdate4').val();
                        });
                        $("#pmpdate5").change(function (event) {
                            pmpdate5 = $('#pmpdate5').val();
                        });
                        $("#pmpdate6").change(function (event) {
                            pmpdate6 = $('#pmpdate6').val();
                        });
                        $("#pmpdate7").change(function (event) {
                            pmpdate7 = $('#pmpdate7').val();
                        });
                        $("#pmpdate8").change(function (event) {
                            pmpdate8 = $('#pmpdate8').val();
                        });
                        $("#pmpdate9").change(function (event) {
                            pmpdate9 = $('#pmpdate9').val();
                        });
                        $("#pmpdate10").change(function (event) {
                            pmpdate10 = $('#pmpdate10').val();
                        });
                        $("#pmpdate11").change(function (event) {
                            pmpdate11 = $('#pmpdate11').val();
                        });
                        $("#pmpdate12").change(function (event) {
                            pmpdate12 = $('#pmpdate12').val();
                        });
                        $("#pmpdate13").change(function (event) {
                            pmpdate13 = $('#pmpdate13').val();
                        });
                        $("#pmpdate14").change(function (event) {
                            pmpdate14 = $('#pmpdate14').val();
                        });
                        $("#pmpdate15").change(function (event) {
                            pmpdate15 = $('#pmpdate15').val();
                        });
                        $("#pmpdate16").change(function (event) {
                            pmpdate16 = $('#pmpdate16').val();
                        });
                        $("#pmpdate17").change(function (event) {
                            pmpdate17 = $('#pmpdate17').val();
                        });
                        $("#pmpdate18").change(function (event) {
                            pmpdate18 = $('#pmpdate18').val();
                        });
                        $("#pmpdate19").change(function (event) {
                            pmpdate19 = $('#pmpdate19').val();
                        });
                        $("#pmpdate20").change(function (event) {
                            pmpdate20 = $('#pmpdate20').val();
                        });
                        $("#pmpdate21").change(function (event) {
                            pmpdate21 = $('#pmpdate21').val();
                        });
                        $("#pmpdate22").change(function (event) {
                            pmpdate22 = $('#pmpdate22').val();
                        });
                        $("#pmpdate23").change(function (event) {
                            pmpdate23 = $('#pmpdate23').val();
                        });
                        $("#pmpdate24").change(function (event) {
                            pmpdate24 = $('#pmpdate24').val();
                        });
                        $("#pmpdate25").change(function (event) {
                            pmpdate25 = $('#pmpdate25').val();
                        });
                        $("#pmpdate26").change(function (event) {
                            pmpdate26 = $('#pmpdate26').val();
                        });
                        $("#pmpdate27").change(function (event) {
                            pmpdate27 = $('#pmpdate27').val();
                        });
                        $("#pmpdate28").change(function (event) {
                            pmpdate28 = $('#pmpdate28').val();
                        });
                        $("#pmpdate29").change(function (event) {
                            pmpdate29 = $('#pmpdate29').val();
                        });
                        $("#pmpdate291").change(function (event) {
                            pmpdate291 = $('#pmpdate291').val();
                        });
                        $("#pmpdate292").change(function (event) {
                            pmpdate292 = $('#pmpdate292').val();
                        });
                        $("#pmpdate293").change(function (event) {
                            pmpdate293 = $('#pmpdate293').val();
                        });
                        $("#pmpdate294").change(function (event) {
                            pmpdate294 = $('#pmpdate294').val();
                        });
                        $("#pmpdate295").change(function (event) {
                            pmpdate1295 = $('#pmpdate1295').val();
                        });
                        $("#pmpdate296").change(function (event) {
                            pmpdate296 = $('#pmpdate296').val();
                        });
                        $("#pmpdate297").change(function (event) {
                            pmpdate297 = $('#pmpdate297').val();
                        });
                        $("#pmpcommentaire1").change(function (event) {
                            pmpcommentaire1 = $('#pmpcommentaire1').val();
                        });
                        $("#pmpcommentaire2").change(function (event) {
                            pmpcommentaire2 = $('#pmpcommentaire2').val();
                        });
                        $("#pmpcommentaire3").change(function (event) {
                            pmpcommentaire3 = $('#pmpcommentaire3').val();
                        });
                        $("#pmpcommentaire4").change(function (event) {
                            pmpcommentaire4 = $('#pmpcommentaire4').val();
                        });
                        $("#pmpcommentaire5").change(function (event) {
                            pmpcommentaire5 = $('#pmpcommentaire5').val();
                        });
                        $("#pmpcommentaire6").change(function (event) {
                            pmpcommentaire6 = $('#pmpcommentaire6').val();
                        });
                        $("#pmpcommentaire7").change(function (event) {
                            pmpcommentaire7 = $('#pmpcommentaire7').val();
                        });
                        $("#pmpcommentaire8").change(function (event) {
                            pmpcommentaire8 = $('#pmpcommentaire8').val();
                        });
                        $("#pmpcommentaire9").change(function (event) {
                            pmpcommentaire9 = $('#pmpcommentaire9').val();
                        });
                    
                    });
                var alarmedate1 = "",
                        alarmedate2 = "",
                        alarmedate3 = "",
                        alarmedate4 = "",
                        alarmedate5 = "",
                        alarmedate6 = "",
                        alarmedate7 = "",
                        alarmedate8 = "",
                        alarmedate9 = "",
                        alarmedate10 = "",
                        alarmedate11 = "",
                        alarmedate12 = "",
                        alarmedate13 = "",
                        alarmedate14 = "",
                        alarmedate15 = "",
                        alarmedate16 = "",
                        alarmedate17 = "",
                        alarmedate18 = "",
                        alarmedate19 = "",
                        alarmedate20 = "",
                        alarmedate21 = "",
                        alarmedate22 = "",
                        alarmedate23 = "",
                        alarmedate24 = "",
                        alarmedate25 = "",
                        alarmedate26 = "",
                        alarmedate27 = "",
                        alarmedate28 = "";
                    jQuery(document).ready(function ($) {
                        $("#alarmedate1").change(function (event) {
                            alarmedate1 = $('#alarmedate1').val();
                        });
                        $("#alarmedate2").change(function (event) {
                            alarmedate2 = $('#alarmedate2').val();
                        });
                        $("#alarmedate3").change(function (event) {
                            alarmedate3 = $('#alarmedate3').val();
                        });
                        $("#alarmedate4").change(function (event) {
                            alarmedate4 = $('#alarmedate4').val();
                        });
                        $("#alarmedate5").change(function (event) {
                            alarmedate5 = $('#alarmedate5').val();
                        });
                        $("#alarmedate6").change(function (event) {
                            alarmedate6 = $('#alarmedate6').val();
                        });
                        $("#alarmedate7").change(function (event) {
                            alarmedate7 = $('#alarmedate7').val();
                        });
                        $("#alarmedate8").change(function (event) {
                            alarmedate8 = $('#alarmedate8').val();
                        });
                        $("#alarmedate9").change(function (event) {
                            alarmedate9 = $('#alarmedate9').val();
                        });
                        $("#alarmedate10").change(function (event) {
                            alarmedate10 = $('#alarmedate10').val();
                        });
                        $("#alarmedate11").change(function (event) {
                            alarmedate11 = $('#alarmedate11').val();
                        });
                        $("#alarmedate12").change(function (event) {
                            alarmedate12 = $('#alarmedate12').val();
                        });
                        $("#alarmedate13").change(function (event) {
                            alarmedate13 = $('#alarmedate13').val();
                        });
                        $("#alarmedate14").change(function (event) {
                            alarmedate14 = $('#alarmedate14').val();
                        });
                        $("#alarmedate15").change(function (event) {
                            alarmedate15 = $('#alarmedate15').val();
                        });
                        $("#alarmedate16").change(function (event) {
                            alarmedate16 = $('#alarmedate16').val();
                        });
                        $("#alarmedate17").change(function (event) {
                            alarmedate17 = $('#alarmedate17').val();
                        });
                        $("#alarmedate18").change(function (event) {
                            alarmedate18 = $('#alarmedate18').val();
                        });
                        $("#alarmedate19").change(function (event) {
                            alarmedate19 = $('#alarmedate19').val();
                        });
                        $("#alarmedate20").change(function (event) {
                            alarmedate20 = $('#alarmedate20').val();
                        });
                        $("#alarmedate21").change(function (event) {
                            alarmedate21 = $('#alarmedate21').val();
                        });
                        $("#alarmedate22").change(function (event) {
                            alarmedate22 = $('#alarmedate22').val();
                        });
                        $("#alarmedate23").change(function (event) {
                            alarmedate23 = $('#alarmedate23').val();
                        });
                        $("#alarmedate24").change(function (event) {
                            alarmedate24 = $('#alarmedate24').val();
                        });
                        $("#alarmedate25").change(function (event) {
                            alarmedate25 = $('#alarmedate25').val();
                        });
                        $("#alarmedate26").change(function (event) {
                            alarmedate26 = $('#alarmedate26').val();
                        });
                        $("#alarmedate27").change(function (event) {
                            alarmedate27 = $('#alarmedate27').val();
                        });
                        $("#alarmedate28").change(function (event) {
                            alarmedate28 = $('#alarmedate28').val();
                        });
                        $("#alarmecommentaire1").change(function (event) {
                            alarmecommentaire1 = $('#alarmecommentaire1').val();
                        });
                        $("#alarmecommentaire2").change(function (event) {
                            alarmecommentaire2 = $('#alarmecommentaire2').val();
                        });
                        $("#alarmecommentaire3").change(function (event) {
                            alarmecommentaire3 = $('#alarmecommentaire3').val();
                        });
                        $("#alarmecommentaire4").change(function (event) {
                            alarmecommentaire4 = $('#alarmecommentaire4').val();
                        });
                        $("#alarmecommentaire5").change(function (event) {
                            alarmecommentaire5 = $('#alarmecommentaire5').val();
                        });
                        $("#alarmecommentaire6").change(function (event) {
                            alarmecommentaire6 = $('#alarmecommentaire6').val();
                        });
                        $("#alarmecommentaire7").change(function (event) {
                            alarmecommentaire7 = $('#alarmecommentaire7').val();
                        });
                    });
                
                var manipdate1,
                    manipdate2,
                    manipdate3,
                    manipdate4,
                    manipdate5,
                    manipdate6,
                    manipdate7,
                    manipdate8,
                    manipdate9,
                    manipdate10,
                    manipdate11,
                    manipdate12,
                    manipdate13,
                    manipdate14,
                    manipdate15,
                    manipdate16,
                    manipdate17,
                    manipdate18,
                    manipdate19,
                    manipdate20;
                    jQuery(document).ready(function ($) {
                        $("#manipdate1").change(function (event) {
                            manipdate1 = $('#manipdate1').val();
                        });
                        $("#manipdate2").change(function (event) {
                            manipdate2 = $('#manipdate2').val();
                        });
                        $("#manipdate3").change(function (event) {
                            manipdate3 = $('#manipdate3').val();
                        });
                        $("#manipdate4").change(function (event) {
                            manipdate4 = $('#manipdate4').val();
                        });
                        $("#manipdate5").change(function (event) {
                            manipdate5 = $('#manipdate5').val();
                        });
                        $("#manipdate6").change(function (event) {
                            manipdate6 = $('#manipdate6').val();
                        });
                        $("#manipdate7").change(function (event) {
                            manipdate7 = $('#manipdate7').val();
                        });
                        $("#manipdate8").change(function (event) {
                            manipdate8 = $('#manipdate8').val();
                        });
                        $("#manipdate9").change(function (event) {
                            manipdate9 = $('#manipdate9').val();
                        });
                        $("#manipdate10").change(function (event) {
                            manipdate10 = $('#manipdate10').val();
                        });
                        $("#manipdate11").change(function (event) {
                            manipdate11 = $('#manipdate11').val();
                        });
                        $("#manipdate12").change(function (event) {
                            manipdate12 = $('#manipdate12').val();
                        });
                        $("#manipdate13").change(function (event) {
                            manipdate13 = $('#manipdate13').val();
                        });
                        $("#manipdate14").change(function (event) {
                            manipdate14 = $('#manipdate14').val();
                        });
                        $("#manipdate15").change(function (event) {
                            manipdate15 = $('#manipdate15').val();
                        });
                        $("#manipdate16").change(function (event) {
                            manipdate16 = $('#manipdate16').val();
                        });
                        $("#manipdate17").change(function (event) {
                            manipdate17 = $('#manipdate17').val();
                        });
                        $("#manipdate18").change(function (event) {
                            manipdate18 = $('#manipdate18').val();
                        });
                        $("#manipdate19").change(function (event) {
                            manipdate19 = $('#manipdate19').val();
                        });
                        $("#manipdate20").change(function (event) {
                            manipdate20 = $('#manipdate20').val();
                        });
                        $("#manipcommentaire1").change(function (event) {
                            manipcommentaire1 = $('#manipcommentaire1').val();
                        });
                        $("#manipcommentaire2").change(function (event) {
                            manipcommentaire2 = $('#manipcommentaire2').val();
                        });
                        $("#manipcommentaire3").change(function (event) {
                            manipcommentaire3 = $('#manipcommentaire3').val();
                        });
                        $("#manipcommentaire4").change(function (event) {
                            manipcommentaire4 = $('#manipcommentaire4').val();
                        });
                        $("#manipcommentaire5").change(function (event) {
                            manipcommentaire5 = $('#manipcommentaire5').val();
                        });
                    });
                });
                $("#5").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").show();
                    $("#etape6").hide();
                    
                    var cathdate1 = "",
                        cathdate2 = "",
                        cathdate3 = "",
                        cathdate4 = "",
                        cathdate5 = "",
                        cathdate6 = "",
                        cathdate7 = "",
                        cathdate8 = "";
                    var cathdate9 = "",
                        cathdate10 = "",
                        cathdate11 = "",
                        cathdate12 = "",
                        cathdate13 = "",
                        cathdate14 = "",
                        cathdate15 = "",
                        cathdate16 = "";
                    var cathdate17 = "",
                        cathdate18 = "",
                        cathdate19 = "",
                        cathdate20 = "",
                        cathdate21 = "",
                        cathdate22 = "",
                        cathdate23 = "",
                        cathdate24 = "";
                    var cathdate25 = "",
                        cathdate26 = "",
                        cathdate27 = "",
                        cathdate28 = "",
                        cathdate29 = "",
                        cathdate211 = "",
                        cathdate212 = "",
                        cathdate213 = "";
                    var cathdate214 = "",
                        cathdate215 = "",
                        cathdate216 = "",
                        cathdate217 = ""
                        cathdate218 = "",
                        cathdate219 = "",
                        cathdate221 = "",
                        cathdate222 = "",
                        cathdate223 = "",
                        cathdate224 = "",
                        cathdate225 = "",
                        cathdate226 = "";
                    jQuery(document).ready(function ($) {
                        $("#cathdate1").change(function (event) {
                            cathdate1 = $('#cathdate1').val();
                        });
                        $("#cathdate2").change(function (event) {
                            cathdate2 = $('#cathdate2').val();
                        });
                        $("#cathdate3").change(function (event) {
                            cathdate3 = $('#cathdate3').val();
                        });
                        $("#cathdate4").change(function (event) {
                            cathdate4 = $('#cathdate4').val();
                        });
                        $("#cathdate5").change(function (event) {
                            cathdate5 = $('#cathdate5').val();
                        });
                        $("#cathdate6").change(function (event) {
                            cathdate6 = $('#cathdate6').val();
                        });
                        $("#cathdate7").change(function (event) {
                            cathdate7 = $('#cathdate7').val();
                        });
                        $("#cathdate8").change(function (event) {
                            cathdate8 = $('#cathdate8').val();
                        });
                        $("#cathdate9").change(function (event) {
                            cathdate9 = $('#cathdate9').val();
                        });
                        $("#cathdate10").change(function (event) {
                            cathdate10 = $('#cathdate10').val();
                        });
                        $("#cathdate11").change(function (event) {
                            cathdate11 = $('#cathdate11').val();
                        });
                        $("#cathdate12").change(function (event) {
                            cathdate12 = $('#cathdate12').val();
                        });
                        $("#cathdate13").change(function (event) {
                            cathdate13 = $('#cathdate13').val();
                        });
                        $("#cathdate14").change(function (event) {
                            cathdate14 = $('#cathdate14').val();
                        });
                        $("#cathdate15").change(function (event) {
                            cathdate15 = $('#cathdate15').val();
                        });
                        $("#cathdate16").change(function (event) {
                            cathdate16 = $('#cathdate16').val();
                        });
                        $("#cathdate17").change(function (event) {
                            cathdate17 = $('#cathdate17').val();
                        });
                        $("#cathdate18").change(function (event) {
                            cathdate18 = $('#cathdate18').val();
                        });
                        $("#cathdate19").change(function (event) {
                            cathdate19 = $('#cathdate19').val();
                        });
                        $("#cathdate20").change(function (event) {
                            cathdate20 = $('#cathdate20').val();
                        });
                        $("#cathdate21").change(function (event) {
                            cathdate21 = $('#cathdate21').val();
                        });
                        $("#cathdate22").change(function (event) {
                            cathdate22 = $('#cathdate22').val();
                        });
                        $("#cathdate23").change(function (event) {
                            cathdate23 = $('#cathdate23').val();
                        });
                        $("#cathdate24").change(function (event) {
                            cathdate24 = $('#cathdate24').val();
                        });
                        $("#cathdate25").change(function (event) {
                            cathdate25 = $('#cathdate25').val();
                        });
                        $("#cathdate26").change(function (event) {
                            cathdate26 = $('#cathdate26').val();
                        });
                        $("#cathdate27").change(function (event) {
                            cathdate27 = $('#cathdate27').val();
                        });
                        $("#cathdate28").change(function (event) {
                            cathdate28 = $('#cathdate28').val();
                        });
                        $("#cathdate29").change(function (event) {
                            cathdate29 = $('#cathdate29').val();
                        });
                        $("#cathdate211").change(function (event) {
                            cathdate211 = $('#cathdate211').val();
                        });
                        $("#cathdate212").change(function (event) {
                            cathdate212 = $('#cathdate212').val();
                        });
                        $("#cathdate213").change(function (event) {
                            cathdate213 = $('#cathdate213').val();
                        });
                        $("#cathdate214").change(function (event) {
                            cathdate214 = $('#cathdate214').val();
                        });
                        $("#cathdate215").change(function (event) {
                            cathdate215 = $('#cathdate215').val();
                        });
                        $("#cathdate216").change(function (event) {
                            cathdate216 = $('#cathdate216').val();
                        });
                        $("#cathdate217").change(function (event) {
                            cathdate217 = $('#cathdate217').val();
                        });
                        $("#cathdate218").change(function (event) {
                            cathdate218 = $('#cathdate218').val();
                        });
                        $("#cathdate219").change(function (event) {
                            cathdate219 = $('#cathdate219').val();
                        });
                        $("#cathdate221").change(function (event) {
                            cathdate221 = $('#cathdate221').val();
                        });
                        $("#cathdate222").change(function (event) {
                            cathdate222 = $('#cathdate222').val();
                        });
                        $("#cathdate223").change(function (event) {
                            cathdate223 = $('#cathdate223').val();
                        });
                        $("#cathdate224").change(function (event) {
                            cathdate224 = $('#cathdate224').val();
                        });
                        $("#cathdate225").change(function (event) {
                            cathdate225 = $('#cathdate225').val();
                        });
                        $("#cathdate226").change(function (event) {
                            cathdate226 = $('#cathdate226').val();
                        });
                        $("#cathcommentaire1").change(function (event) {
                            cathcommentaire1 = $('#cathcommentaire1').val();
                        });
                        $("#cathcommentaire2").change(function (event) {
                            cathcommentaire2 = $('#cathcommentaire2').val();
                        });
                        $("#cathcommentaire3").change(function (event) {
                            cathcommentaire3 = $('#cathcommentaire3').val();
                        });
                        $("#cathcommentaire4").change(function (event) {
                            cathcommentaire4 = $('#cathcommentaire4').val();
                        });
                        $("#cathcommentaire5").change(function (event) {
                            cathcommentaire5 = $('#cathcommentaire5').val();
                        });
                        $("#cathcommentaire6").change(function (event) {
                            cathcommentaire6 = $('#cathcommentaire6').val();
                        });
                        $("#cathcommentaire7").change(function (event) {
                            cathcommentaire7 = $('#cathcommentaire7').val();
                        });
                        $("#cathcommentaire8").change(function (event) {
                            cathcommentaire8 = $('#cathcommentaire8').val();
                        });
                        $("#cathcommentaire9").change(function (event) {
                            cathcommentaire9 = $('#cathcommentaire9').val();
                        });
                        $("#cathcommentaire10").change(function (event) {
                            cathcommentaire10 = $('#cathcommentaire10').val();
                        });
                        $("#cathcommentaire11").change(function (event) {
                            cathcommentaire11 = $('#cathcommentaire11').val();
                        });
                    
                    });
                });
                
                var asgdetail1 = "",
                    asgdetail2 = "",
                    asgdetail3 = "",
                    asgdetail4 = "",
                    asgobservation1 = "",
                    asgobservation2 = "",
                    asgobservation3 = "",
                    asgobservation4 = "";
                jQuery(document).ready(function ($) {
                        $("#asgdetail1").change(function (event) {
                            asgdetail1 = $('#asgdetail1').val();
                        });
                        $("#asgdetail2").change(function (event) {
                            asgdetail2 = $('#asgdetail2').val();
                        });
                        $("#asgdetail3").change(function (event) {
                            asgdetail3 = $('#asgdetail3').val();
                        });
                        $("#asgdetail4").change(function (event) {
                            asgdetail4 = $('#asgdetail4').val();
                        });
                        $("#asgobservation1").change(function (event) {
                            asgobservation1 = $('#asgobservation1').val();
                        });
                        $("#asgobservation2").change(function (event) {
                            asgobservation2 = $('#asgobservation2').val();
                        });
                        $("#asgobservation3").change(function (event) {
                            asgobservation3 = $('#asgobservation3').val();
                        });
                        $("#asgobservation4").change(function (event) {
                            asgobservation4 = $('#asgobservation4').val();
                        });
                });
                var frequence1 = "",
                    frequence2 = "",
                    connaissanceoui = "",
                    connaissancenon = "";
                jQuery(document).ready(function ($) {
                        $("#frequence1").change(function (event) {
                            frequence1 = $('#frequence1').val();
                        });
                        $("#frequence2").change(function (event) {
                            frequence2 = $('#frequence2').val();
                        });
                        $("#connaissance1").change(function (event) {
                            connaissance1 = $('#connaissance1').val();
                        });
                        $("#connaissance2").change(function (event) {
                            connaissance2 = $('#connaissance2').val();
                        });
                });
                var connaissance1 = "",
                    connaissance2 = "",
                    connaissance3 = "",
                    connaissance4 = "",
                    connaissance5 = "",
                    connaissance6 = "",
                    connaissance7 = "",
                    connaissance8 = "",
                    connaissance9 = "",
                    connaissance10 = "",
                    connaissance11 = "",
                    cnsobservation1 = "",
                    cnsobservation2 = "",
                    cnsobservation3 = "",
                    cnsobservation4 = "",
                    cnsobservation5 = "",
                    cnsobservation6 = "",
                    cnsobservation7 = "",
                    cnsobservation8 = "",
                    perempdate1 ="",
                    perempdate2 ="";
                    jQuery(document).ready(function ($) {
                        $("#connaissance1").change(function (event) {
                            connaissance1 = $('#connaissance1').val();
                        });
                        $("#connaissance2").change(function (event) {
                            connaissance2 = $('#connaissance2').val();
                        });
                        $("#connaissance3").change(function (event) {
                            connaissance3 = $('#connaissance3').val();
                        });
                        $("#connaissance4").change(function (event) {
                            connaissance4 = $('#connaissance4').val();
                        });
                        $("#connaissance5").change(function (event) {
                            connaissance5 = $('#connaissance5').val();
                        });
                        $("#connaissance6").change(function (event) {
                            connaissance6 = $('#connaissance6').val();
                        });
                        $("#connaissance7").change(function (event) {
                            connaissance7 = $('#connaissance7').val();
                        });
                        $("#connaissance8").change(function (event) {
                            connaissance8 = $('#connaissance8').val();
                        });
                        $("#connaissance9").change(function (event) {
                            connaissance9 = $('#connaissance9').val();
                        });
                        $("#connaissance10").change(function (event) {
                            connaissance10 = $('#connaissance10').val();
                        });
                        $("#connaissance11").change(function (event) {
                            connaissance11 = $('#connaissance11').val();
                        });
                        $("#cnsobservation1").change(function (event) {
                            cnsobservation1 = $('#cnsobservation1').val();
                        });
                        $("#cnsobservation2").change(function (event) {
                            cnsobservation2 = $('#cnsobservation2').val();
                        });
                        $("#cnsobservation3").change(function (event) {
                            cnsobservation3 = $('#cnsobservation3').val();
                        });
                        $("#cnsobservation4").change(function (event) {
                            cnsobservation4 = $('#cnsobservation4').val();
                        });
                        $("#cnsobservation5").change(function (event) {
                            cnsobservation5 = $('#cnsobservation5').val();
                        });
                        $("#cnsobservation6").change(function (event) {
                            cnsobservation6 = $('#cnsobservation6').val();
                        });
                        $("#cnsobservation7").change(function (event) {
                            cnsobservation7 = $('#cnsobservation7').val();
                        });
                        $("#cnsobservation8").change(function (event) {
                            cnsobservation8 = $('#cnsobservation8').val();
                        });
                        $("#perempdate1").change(function (event) {
                            perempdate1 = $('#perempdate1').val();
                        });
                        $("#perempdate2").change(function (event) {
                            perempdate2 = $('#perempdate2').val();
                        });
                });
                $("#6").click(function () {
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
                    $("#etape5").hide();
                    $("#etape6").show();
                });
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                    <?php echo($_SESSION['nom']); ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!--                        <li><a href="./essai.php">essai</a></li>-->
                        <li><a href="./lumiere.php"><img width="33px" src="./img/help.png" /></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img width="33px" src="./img/pignon.png" /> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./modification.php">Modifier mon profil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./logout.php">Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <form method="POST" action="traitement.php" id="form-filter" class="form-horizontal" enctype="multipart/form-data">


            <div class="container" style="margin-top: 82px;">
                <div class="item active" id="etape1">
                    <?php require './etape1.php'; ?>

                </div>
                <div class="item" id="etape2" style="display: none;">
                    <?php require './etape2.php'; ?>
                </div>
                <div class="item"  id="etape3" style="display: none;">
                    <?php require './etape3.php'; ?>
                </div>
                <div class="item" id="etape4" style="display: none;">
                    <?php require './etape4.php'; ?>
                </div>
                <div class="item"  id="etape5" style="display: none;">
                    <?php require './etape5.php'; ?>
                </div>
                <div class="item" id="etape6" style="display: none;">
                    <div class="container"  style="margin-top: 230px;">
                        <div class="col-lg-3 col-md-offset-1">
                            <center>  

                                <img class="zoomEffect" src="./img/save.png" width="120" alt="" id="enregistrer">
                                <h3 style="color: black; text-align: center;">ENREGISTRER</h3> 

                            </center>
                        </div>
                        <div class="col-lg-3">
                            <center>

                                <img class="zoomEffect" src="./img/share.png" width="160" alt="">
                                <h3 style="color: black; text-align: center;">PARTAGER</h3>

                            </center>
                        </div>
                        <div class="col-lg-3">
                            <center>

                                <img class="zoomEffect" src="./img/print.png"  width="160" alt="">
                                <h3 style="color: black; text-align: center;">IMPRIMER</h3>

                            </center>
                        </div>        
                    </div>
                    <br><br><br><br><br><br><br><br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary hidden" id="save">Enregistrement</button>
        </form>
        <div class="container">
            <button class="btn btn-default col-md-2 col-lg-2 col-sm-12 col-xs-12" id="1" onClick="enHaut();">Etape 1</button>
            <button class="btn btn-primary col-md-2 col-lg-2 col-sm-12 col-xs-12" id="2" onClick="enHaut();">Etape 2</button>
            <button class="btn btn-success col-md-2 col-lg-2 col-sm-12 col-xs-12" id="3" onClick="enHaut();">Etape 3</button>
            <button class="btn btn-default col-md-2 col-lg-2 col-sm-12 col-xs-12" id="4" onClick="enHaut();">Etape 4</button>
            <button class="btn btn-info col-md-2 col-lg-2 col-sm-12 col-xs-12" id="5" onClick="enHaut();">Etape 5</button>
            <button class="btn btn-warning col-md-2 col-lg-2 col-sm-12 col-xs-12" id="6" onClick="enHaut();">Etape 6</button>
        </div>

        <button class="btn btn-primary btn-lg hidden" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
        <div class="modal" id="loginerror">
            <div class="modal-dialog">
                <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                        <h4 class="modal-title" style="text-align: center;">Message</h4>
                    </div>
                    <div class="modal-body">
                        <div class="warning" id="erreur_inscription"></div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script> 
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
        <script src="assets/js/Chart.min.js"></script>

        <script type="text/javascript">
            $('#enregistrer').click(function () {
                $('#save').trigger('click');
            });
            $('#save').click(function(e) {
                e.preventDefault();
                var form = $('#form-filter').get(0);
                var formData = new FormData(form);// get the form data
                // on envoi formData vers mail.php
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'traitement.php', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'text', // what type of data do we expect back from the server
                    processData: false,
                    contentType: false,
                    success: function (server_response)
                    {
                        if (server_response === "succes")
                        {
                            window.location.href = "page.php";
                        }
                        else
                        {
                            $('#erreur_inscription').html('<p>' + server_response + '</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 4000);
                        }
                    },
                    error: function (server_response)
                    {
                        $('#erreur_inscription').html('<p>' + server_response + '</p>');
                        $('#triggerwarning').trigger('click');
                        setTimeout(function () {
                            $('#ferme').trigger('click');
                        }, 4000);
                    }
                });
            });

            function enHaut()
            {
                $('html,body').animate({scrollTop: 0}, 'fast');
            }
        </script>

    </body>

</html>