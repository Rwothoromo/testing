@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <form class="form-vertical" action="insert_patients" style="margin-bottom: 0;" id="validateSubmitForm" method="post" autocomplete="off">
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
                        <button type="submit" class="btn btn-icon btn-success glyphicons circle_ok pull-right" ><i></i>Register patient</button><!--OnSubmit="return onSubmit();"-->
                        <!--<button type="reset" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Reset</button>-->
                    </div>
                    <!-- // Form actions END -->
                </div>

            </div>
        </form>
    </div>
</div>
@endsection

<!--<script language="JavaScript">
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
</script>-->

<?php
// include 'pages/patients/modals.php'; ?>