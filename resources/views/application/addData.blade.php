@extends('layouts.console') 
@section('innercontent')
<?php 
/* TESTING */
   //echo'<pre>';print_R($);exit; 
?>

@include('includes.navbar')

   <div class="row justify-content-center">
      <div class="col-md-11">
         <br>
         <br>
         <!-- <h4> Shuvadeep Podder </h4> -->
         <small style="color: white; float: right; font-weight: bold; background-color:#0d6efd;"> <?php echo date("d-m-Y") ?></small>
         
         <h6 style="color: gray;"> <b> --YOUR PROJECT NAME-- </b>   </h6>
         <hr>
         <!-- FORM -->
         <span id="field_error"></span>
         <div class="alert alert-danger" style="display:none"></div>
         <form method="POST" id="formId" enctype='multipart/form-data'>
            @csrf 
            <input type="hidden" name="hdnAge" id="hdnAge">
            <div class="row g-3">
               <!-- dropdown -->
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <label for="housingProject" class="form-label"> DROPDOWN NAME* </label>
                        <select name="housingProject" id="housingProject" class="form-select"> 
                           <option value=""> --Select-- </option>
                           
                           <option value="" > Static </option>
                           <option value="" > Static </option>
                           <option value="" > Static </option>
                           
                        </select>
                        <span class="errMsg_housingProject errDiv" style="color: red;"></span>
                     </div>
                     <div class="col">
                        <label for="propertyType" class="form-label"> DROPDOWN NAME* </label>
                        <select name="propertyType" id="propertyType" class="form-select">
                           <option value=""> --Select-- </option>
                        </select>
                        <span class="errMsg_propertyType errDiv" style="color: red;"></span>
                     </div>
                     <div class="col">
                        <div class="col-sm-6">
                           <label for="propertyCost" class="form-label">  <b> FIELD NAME </b>  </label>
                           <input type="text" name="propertyCost" id="propertyCost" class="form-control" placeholder="&#xe1bc; Cost" style="font-family:Arial, FontAwesome" value="" readonly>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <br>
               <!-- dropdown -->
                <fieldset class="rounded border border-secondary p-2">
                <legend class="float-none w-auto text-primary p-2">
                    <h6> <b> Application Details </b> </h6>
                </legend>
                <div class="row">
               <div class="col-sm-4">
                  <label for="appName" class="form-label"> Applicant Name </label>
                  <input type="text" class="form-control" name="appName" id="appName" value="" onkeydown="return /[a-z]/i.test(event.key)" placeholder="&#xf007; Applicant Name" style="font-family:Arial, FontAwesome">
                  <span class="errMsg_appName errDiv" style="color: red;"></span>
               </div>
               <div class="col-sm-4">
                  <label for="appEmail" class="form-label"> Email </label>
                  <input type="text" class="form-control" name="appEmail" id="appEmail" placeholder="&#x40;Gmail.com" style="font-family:Arial, FontAwesome" value="">
                  
                  <span class="errMsg_appEmail errDiv" style="color: red;"></span>
               </div>
               <div class="col-sm-4">
                  <label for="appMobile" class="form-label"> Mobile </label>
                  <input type="text" class="form-control" name="appMobile" id="appMobile" placeholder="&#xf3cd; Mobile" style="font-family:Arial, FontAwesome" value=""  maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                  <span class="errMsg_appMobile errDiv" style="color: red;"></span>
               </div>
               </div><br>
               <div class="row">
               <div class="col-sm-4">
                  <label for="appdob" class="form-label"> Date Of Birth </label>
                  <input type="text" class="form-control" name="appdob" id="appdob" max="<?php echo date('Y-m-d');?>" placeholder="&#xf073; DD/MM/YYYY" style="font-family:Arial, FontAwesome" value=""  onchange="dateValidate(this.value)" onfocus="(this.type='date')">
                  <span class="errMsg_appdob errDiv" style="color: red;"></span>
               </div>

               
               <div class="col-sm-4">
                  <label for="gender" class="form-label"> Gender </label>
                  <br>
                    <input class="form-check-input" type="radio" name="gender" id="M_gender" value="Male" checked id="defaultCheck1">
                    <label class="form-check-label" for="M_gender"> <i class="fa-solid fa-person"></i> MALE </label> &nbsp &nbsp
                    <span class="errMsg_M_gender errDiv" style="color: red;"></span>

                    <input class="form-check-input" type="radio" name="gender" id="F_gender" value="Female">
                    <label class="form-check-label" for="F_gender"> <i class="fa-solid fa-person-dress"></i> FEMALE </label> &nbsp &nbsp
                    <span class="errMsg_F_gender errDiv" style="color: red;"></span>

                    <input class="form-check-input" type="radio" name="gender" id="O_gender" value="Other">
                    <label class="form-check-label" for="O_gender"> <i class="fa-solid fa-person-half-dress"></i> OTHER </label>
                    <span class="errMsg_O_gender errDiv" style="color: red;"></span>
                  
               </div>

            
               <div class="col-sm-4">
                  <label for="appIdproof" class="form-label"> Upload ID-Proof </label>
                  <input type="file" class="form-control" name="appIdproof" id="appIdproof" placeholder="" value="">
                  <span class="errMsg_appIdproof errDiv" style="color: red;"></span>
               </div>
               </div>
               <div class="d-grid gap-2 d-md-block text-center mb-2">
                  <br>
                  <button class="btn btn-success" type="submit" id="buttSubmit" > Submit <i class="fa-solid fa-circle-check"></i> </button>
                  <button type="reset" class="btn btn-outline-dark" value="Reset"> Reset <i class="fa-solid fa-rotate"></i></button>
               </div>
            </fieldset>
               
            </div>
         </form>
         <!-- FORM -->
      </div>
   </div>
</div>
<script>
   /* JQUERY START */
   
   /* JQUERY END */
</script> @endsection