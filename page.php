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
                    $("#etape4").hide();
                    $("#etape3").hide();
                    $("#etape2").hide();
                    $("#etape1").show();
                });
                $("#2").click(function () {
                    $("#etape2").show();
                    $("#etape1").hide();
                    $("#etape3").hide();
                    $("#etape4").hide();
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
                    $("#etape3").show();
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape4").hide();

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
                    $("#etape4").show();
                    $("#etape1").hide();
                    $("#etape2").hide();
                    $("#etape3").hide();
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
                    <a class="navbar-brand" href="#">Insulinothérapie</a>
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
            <button class="btn btn-default col-md-3 col-lg-3 col-sm-12 col-xs-12" id="1">Etape 1</button>
            <button class="btn btn-primary col-md-3 col-lg-3 col-sm-12 col-xs-12" id="2">Etape 2</button>
            <button class="btn btn-success col-md-3 col-lg-3 col-sm-12 col-xs-12" id="3">Etape 3</button>
            <button class="btn btn-warning col-md-3 col-lg-3 col-sm-12 col-xs-12" id="4">Etape 4</button>
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

            $('#save').click(function (e) {
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
        </script>

    </body>

</html>
