<?php
include("query.php");
include("header.php")
?>
       <!-- Blank Start -->
       <div class="container-fluid pt-4 px-4 p-5">
                <div class="row vh-100 bg-light rounded  justify-content-center mx-0">
                    <div class="col-md-10 p-5">
                        <h3>This is program page</h3>
                        <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="proname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                   
                    <button class="btn btn-info mt-3" name="addprogram">Add Program</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
    


         <?php
include("footer.php")
?>
         