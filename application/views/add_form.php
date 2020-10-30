<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- /. NAV SIDE  -->       <!-- Main Content Area -->
<div class="main-content">
<!-- Basic Form area Start -->
<div class="container-fluid">
   <!-- Form row -->
   <div class="row">
      <div class="col-xl-10 box-margin height-card">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">Add Form</h4>
               <br>
               <form role="form" method="POST" action="<?php echo base_url();?>Crud/insert" enctype="multipart/form-data">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="inputEmail4" class="col-form-label"><b>User Name</b></label>
                        <input type="text" name="user_name" class="form-control" id="inputEmail4" placeholder="Enter User Name " required="">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="inputEmail4" class="col-form-label"><b>Mobile No</b></label>
                        <input type="text" name="mobile_no" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" class="form-control" id="inputEmail4" placeholder="Enter MObile No " required="">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="inputEmail4" class="col-form-label"><b>Type</b></label>
                        <select required="required" class="form-control" name="type">
                           <option value="">Select Upload Type</option>
                           <option value="Image">Image</option>
                           <option value="Video">Video</option>
                        </select>
                        <div class="Image fox">
                           <div class="form-group col-md-12">
                              <label for="inputEmail4" class="col-form-label"><b>Upload Image</b></label>
                              <input class="form-control"type="file" name="image3">
                           </div>
                        </div>
                        <div class="Video fox">
                           <div class="form-group col-md-12">
                              <label for="inputEmail4" class="col-form-label"><b>Upload Video</b></label>
                              <input class="form-control"type="file" name="image4">
                           </div>
                           <div class="form-group col-md-12">
                              <label for="inputEmail4" class="col-form-label"><b>Video Url</b></label>
                              <input type="url" name="url"  class="form-control" id="inputEmail4" placeholder="Enter  Video Url " >
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
               </form>
               </div> <!-- end card-body -->
            </div>
            <!-- end card-->
         </div>
         <!-- end col -->
      </div>
      <!-- Footer Area -->
   </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
       $("select").change(function(){
           $(this).find("option:selected").each(function(){
               var optionValue = $(this).attr("value");
               if(optionValue){
                   $(".fox").not("." + optionValue).hide();
                   $("." + optionValue).show();
               } else{
                   $(".fox").hide();
               }
           });
       }).change();
   });
</script>