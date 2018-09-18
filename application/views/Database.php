<script>
function myFunction(id) { alert(id);
  //document.getElementById("Base_id").innerHTML = "Hello World";
}
</script>


<!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h2>ฐานความผิด</h2></center> 
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /><center>
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                 
                        <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                  <div class="col-md-26">
                        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                       
                              <div class="panel panel-default">
                            <div class="panel-heading">
                     <strong> บันทึกฐานความผิด </strong>  
                            </div>
                             <?php //echo form_open("Trafcontrol/adddata");?>  
                            <div class="panel-body">
                              
                                       <br />
                                       
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">รหัสฐานความผิด</span>
                                            <input type="text" name ="Base_id" id="Base_id" class="form-control" placeholder=" " disabled/>
                                        </div>

                                     <center><div class="form-group input-group">
                                            <span class="input-group-addon">ชื่อฐานความผิด&nbsp;&nbsp;</span>
                                            <input type="text" name ="Base_name" class="form-control" placeholder=" " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon">คะแนนที่ตัด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></span>
                                            <input type="password" name ="point"  class="form-control"  placeholder="" />
                                        </div>
                                    
                                     
                                     <center><a href="index.html" class="btn btn-primary ">บันทึก</a></center>
                                 
                                 
                            </div> <?php //echo form_close();?> 
                           
                        </div> </div> </div>
                           </div>

                                </table>
                                 
                            </div>
                            
                        </div>
                    </div>
