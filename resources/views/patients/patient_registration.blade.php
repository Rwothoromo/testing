<?php
//require_once 'pages/patients/func.php';
?>


<!--<script type="text/javascript" src="pages/patients/ajax.js"></script>-->

<!--for the ajax submit-->
<!--<script src="pages/patients/reg_scripts.js"></script>-->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <?php // include 'pages/custom_header.php'; ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>


        <script type="text/javascript">
            function show(id)
            {
                if (document.getElementById(id).style.display == 'none')
                {
                    document.getElementById(id).style.display = '';
                }
            }


            function hide(id)
            {
                document.getElementById(id).style.display = 'none';

            }

//calculating the age of the patient
            function calculate_age()
            {
                var xmlhttp;
                xmlhttp = new XMLHttpRequest();
                var myage = document.getElementById('birthdate').value;
                //alert(myage);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById('age').value = xmlhttp.responseText;
                        //alert(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET", "pages/patients/get_age.php?age=" + myage, true);
                xmlhttp.send();
            }


//This will get the details of the patient depending on the insurance number that has been selected.
            function get_details()
            {
                var xmlhttp;
                xmlhttp = new XMLHttpRequest();
                var insurance_id = document.getElementById('insurance_number').value;
//  alert(insurance_id);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById('details').innerHTML = xmlhttp.responseText;
                        //alert(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET", "pages/patients/get_details.php?insurance_id=" + insurance_id, true);
                xmlhttp.send();
            }

            $(function () {
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name') }}
                </div>

                <form class="form-vertical" action ="add_patients" style="margin-bottom: 0;" id="validateSubmitForm" method="post" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="widget">
                        <!-- Widget heading -->
                        <div class="widget-head">
                            @if (isset($_GET["pat_id"]))
                            <h4 class="heading">New Staff Member Registration</h4>
                            @else
                            <h4 class="heading">New Patient Registration</h4>
                            @endif
                        </div>

                        <div class="widget-body">       
                            @include('patients/patient_form')
                            
                            <hr class="separator" />

                            <!-- Form actions -->
                            <div class="form-actions">
                                <button type="submit" name="savePateint" class="btn btn-icon btn-success glyphicons circle_ok pull-right" OnSubmit="return onSubmit();"><i></i>Register patient</button>
                                <button type="reset" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Reset</button>
                            </div>
                            <!-- // Form actions END -->
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


<script language="JavaScript">
    function onSubmit()
    {
        if (confirm('Are you sure you want to create a new patient?') == true)
        {
            return true;
        } else
        {
            return false;
        }
    }
</script>

<?php
// include 'pages/patients/modals.php'; ?>