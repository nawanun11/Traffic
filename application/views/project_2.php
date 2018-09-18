   <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <center><h2>ข้อมูลโครงการบำเพ็ญประโยชน์</h2> </center> 
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
                                    <p align="right"> <a href="http://localhost/Traffic/index.php/Trafcontrol/index_project" 
                                   class="btn btn-primary ">เพิ่มโครงการบำเพ็ญประโยชน์</a></p>
                                  <div class="col-md-26">
                        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                          
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th align="center">รหัส</th>
                                            <th align="center">ชื่อกิจกรรม</th>
                                            <th>รายละเอียดกิจกรรม</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php foreach ($name as $r) { ?>
                       
                          
                                       <tr class="odd gradeX">
                                            <td><?php echo $r["Base_ID"]?></td>
                                            <td><?php echo $r["Base_name"]?></td>
                                            <td><?php echo $r["point"]?></td>
                                            <td class="center" align="center"><i class="fa fa-pencil fa-1x" onclick="myFunction(
                                            <?php $r["Base_ID"]?>)"></td>
                                            <td class="center" align="center"><i class="fa fa-trash-o fa-1x"></td>
                                        </tr><?php   } ?>
                                       
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                    </div>
