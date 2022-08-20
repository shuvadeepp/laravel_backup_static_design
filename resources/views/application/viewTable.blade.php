@extends('layouts.console') @section('innercontent') @include('includes.navbar')

  <div class="row justify-content-center">
    <div class="col-md-12">
      <br>
      <br>
      <!-- <h4> Shuvadeep Podder </h4> -->
      <small style="color: white; float: right; font-weight: bold; background-color:#0d6efd;"> <?php echo date("d-m-Y") ?></small>
      <h6 style="color: gray;"> <b> --YOUR PROJECT NAME-- </b> </h6>
      <hr>
      <form method="post">
         @csrf
      <fieldset class="rounded border border-secondary p-2">
        <legend class="float-none w-auto text-primary p-2">
            <h6> <b> Filter </b> </h6>
        </legend>
      <!-- dropdown -->
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <label for="housingProject" class="form-label"> SEARCH DROPDOWN NAME* </label>
            <select name="housingProject" id="housingProject" class="form-select" >
              <option value=""> --SELECT-- </option>
             
                  <option  value=""> STATIC </option>
                  <option  value=""> STATIC </option>
                  <option  value=""> STATIC </option>
              
            </select>
          </div>
          <div class="col-md-5">
            <label for="propertyType" class="form-label"> SEARCH DROPDOWN NAME* </label>
            <select name="propertyType" id="propertyType" class="form-select" data-type="">
              <option value=""> --SELECT-- </option>
              
              <option  value=""> STATIC </option>
              <option  value=""> STATIC </option>
              <option  value=""> STATIC </option>
            </select>
          </div>
          
          <div class="col-md-2">
          <label for="" class="form-label" style="visibility: hidden;"> Search </label>
            <br>
            <button class="btn btn-primary" type="submit" id="buttSearch" > <i class="fa-solid fa-magnifying-glass"></i> </button>
          </div>
        </div>
      </div>
      <br>
      <br>
      <!-- dropdown -->
      </fieldset>
      </form>
      <!-- table -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            
            <br>
            <table id="dataTable" class="table table-striped table table-bordered" style="width:100%">
              <thead >
                  <tr class="table-primary">
                      <th> Sl </th>
                      <th> Name </th>
                      <th> Email </th>
                      <th> Mobile No. </th>
                      <th> Age </th>
                      <th> Registion Date </th>
                      <th> Housing Project </th>
                      <th> Housing Type </th>
                      <th> Document </th>
                      <th> Download </th>
                  </tr>
              </thead>
              <tbody><?php //echo'<pre>';print_r($selectQuery);exit; ?>
              @php
                $count = 1;
              @endphp
              
                <tr>
                  <td>{{ $count++ }}</td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td> DATA </td>
                  <td>
                    <a class="btn btn-primary mt-2" href=""> <i class="fa fa-download"></i> </a>
                  </td>
                </tr> 
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- table -->
    </div>
  </div>

<script>
  /* JQUERY START */
  
  /* JQUERY END */
</script> @endsection

