<?php
include("query.php");
include("header.php")
?>
       <!-- Blank Start -->
       <div class="container-fluid pt-4 px-4 p-5">
                <div class="row vh-100 bg-light rounded  justify-content-center mx-0">
                    <div class="col-md-10 p-5">
                        <h3>This is Department page</h3>
                        <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="deptName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" name="deptDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="deptImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <button class="btn btn-info mt-3" name="addDepartment">Add Department</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
    


         <?php
include("footer.php")
?>
         