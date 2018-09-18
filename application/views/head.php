<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>Traffic_css/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>Traffic_css/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>Traffic_css/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>Traffic_css/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">สมชาย ใจดี</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="<?php echo site_url("Trafcontrol/index_authorities")?>" class="btn btn-danger square-btn-adjust">หน้าหลัก</a> 
<a href="<?php echo site_url("Trafcontrol/login")?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url();?>Traffic_css/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				 <li>
                        <a  href="<?php echo site_url("Trafcontrol/index_record")?>"><i class="fa fa-desktop fa-3x"></i> บันทึกการกระทำความผิด</a>
                    </li>		
				<li>
                        <a  href="<?php echo site_url("Trafcontrol/index_report")?>"><i class="fa fa-child fa-3x"></i> รายงานตัว</a>
                    </li>
					<li>
                        <a  href="<?php echo site_url("Trafcontrol/index_benefit")?>"><i class="fa fa-book fa-3x"></i> การบำเพ็ญประโยชน์</a>
                    </li>
					
	
	
	
	
	
				<li>
                        <a><i class="fa fa-folder fa-3x"></i> จัดการข้อมูลพื้นฐาน</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_database_2")?>">ฐานความผิด</a>
                            </li>
                               
							<li>
                                <a href="<?php echo site_url("Trafcontrol/index_project_2")?>">โครงการบำเพ็ญประโยชน์</a>
                            </li>
                           
                </ul>
              
                 <a><i class="fa fa-file-word-o fa-3x"></i> ออกรายงาน</a>
                        <ul class="nav nav-second-level">
                        <li>
                                <a href="<?php echo site_url("Trafcontrol/index_Report1")?>">สรุปยอดนักศึกษาสำนักวิชาประจำเดือน</a>
                            </li>
                                                         
							<li>
                                <a href="<?php echo site_url("Trafcontrol/index_Report2")?>">สรุปรายชื่อนักศึกษาตามสำนักวิชา</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_Report3")?>">สรุปรายชื่อนักศึกษาตามหอพัก</a>
                            </li></ul>
                            
                            
                            <a><i class="fa fa-area-chart fa-3x"></i> แสดงกราฟสำนักวิชา</a>
                        <ul class="nav nav-second-level">
                        <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph1")?>">สำนักวิชาการจัดการ</a>
                            </li>
                               
							<li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph2")?>">สำนักวิชาเทคโนโลยีการเกษตร</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph3")?>">สำนักวิชาพยาบาลศาสตร์</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph4")?>">สำนักวิชาแพทยศาสตร์</a>
                            </li>
                               
							<li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph5")?>">สำนักวิชาเภสัชศาสตร์</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph6")?>">สำนักวิชาวิทยาศาสตร์</a>
                            </li>
                             
							<li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph7")?>">สำนักวิชาวิศวกรรมศาสตร์และทรัพยากร</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph8")?>">สำนักวิชาสถาปัตยกรรมศาสตร์และการออกแบบ</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph9")?>">สำนักวิชาสหเวชศาสตร์</a>
                            </li>
                               
							<li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph10")?>">สำนักวิชาสารสนเทศศาสตร์</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph11")?>">สำนักวิชาศิลปศาสตร์</a>
                            </li>
                      
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph12")?>">สำนักวิชาสาธารณสุขศาสตร์</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Trafcontrol/index_graph13")?>">สำนักวิชารัฐศาสตร์และนิติศาสตร์</a>
                            </li>
                            
                            
                               
							
            
            </ul>          
              </ul>
            </div>
            
            </nav>
            
             </div>
        
     
