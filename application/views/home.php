<!-- Main Content Area -->
<div class="main-content">
   <!-- Table area Start -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="card box-margin">
               <div class="card-body">
                  <a href="<?php echo base_url();?>Dashboard/Add_form"><button class="btn btn-primary" style="float: right;">Add Form</button></a>
                  <h4 class="card-title">User </h4>
                  </br>
                  <div class="shortcode-html">
                     <!-- Table Bordered -->
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>Id</th>
                                 <th>User Name </th>
                                 <th>Mobile No</th>
                                 <th>Image</th>
                                 <th>Video</th>
                                 <th>Video Url</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $s = $this->db->query("SELECT * FROM user");
                                 $r = $s->result_array();
                                 
                                 
                                 
                                 
                                 
                                 foreach ($r as $key => $r) {
                                     @$uid =$r['id'];
                                 
                                   $image = $r['image'];
                                   $video = $r['video'];
                                 
                                 ?>
                              <tr class="odd gradeX">
                                 <td><?php echo @$r['id'] ?></td>
                                 <td><?php echo @$r['User_Name']; ?></td>
                                 <td><?php echo @$r['Mobile_No']; ?></td>
                                 <td><img class="upload" src="<?php echo @$image;?>"></td>
                                 <td>
                                    <?php
                                       if(!empty($video))
                                       {
                                       
                                       ?>
                                    <video width="320" height="240" controls>
                                       <source src="<?php echo $video;?>" type="video/mp4">
                                    </video>
                                    <?php
                                       }
                                       
                                       else
                                       {
                                       
                                         ?>
                                    <?php
                                       }
                                       ?>  
                                 </td>
                                 <td><?php echo @$r['video_url']; ?></td>
                              </tr>
                              <?php
                                 }
                                 ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- End Table Bordered -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer Area -->
</div>