<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Trafcontrol extends CI_Controller{
    
    public function login()
    {
        $this->load->view('login');
    }
    public function index_authorities()
    {
        $this->load->view('head');
        $this->load->view('index');
        $this->load->view('foot');
    }
    public function index_student()
    {
        $this->load->view('head_student');
        $this->load->view('index_student');
        $this->load->view('foot');
    }
    public function index_student1()
    {
        $this->load->view('head_student');
        $this->load->view('student_1');
        $this->load->view('foot');
    }
    public function index_teacher()
    {
        $this->load->view('head_teacher');
        $this->load->view('index_teacher');
        $this->load->view('foot');
    }
    public function index_teacher1()
    {
        $this->load->view('head_teacher');
        $this->load->view('teacher_1');
        $this->load->view('foot');
    }
    public function index_chief()
    {
        $this->load->view('head_chief');
        $this->load->view('index_chief');
        $this->load->view('foot');
    }
    public function index_chief_management1()
    {
        $this->load->view('head_chief');
        $this->load->view('chief_management1');
        $this->load->view('foot');
    }
   
    public function index_chief_management3()
    {
        $this->load->view('head_chief');
        $this->load->view('chief_management3');
        $this->load->view('foot');
    }
    public function index_chief_management4()
    {
        $this->load->view('head_chief');
        $this->load->view('chief_management4');
        $this->load->view('foot');
    }
  
  
    public function index_dean_info()
    {
        $this->load->view('head_info');
        $this->load->view('index_info');
        $this->load->view('foot');
    }
    public function index_dean_info1()
    {
        $this->load->view('head_info');
        $this->load->view('info_1');
        $this->load->view('foot');
    }
    public function index_dean_info2()
    {
        $this->load->view('head_info');
        $this->load->view('info_2');
        $this->load->view('foot');
    }
    public function index_dean_info3()
    {
        $this->load->view('head_info');
        $this->load->view('info_3');
        $this->load->view('foot');
    }
    public function index_dean_info4()
    {
        $this->load->view('head_info');
        $this->load->view('info_4');
        $this->load->view('foot');
    }
    public function index_dean_info5()
    {
        $this->load->view('head_info');
        $this->load->view('info_5');
        $this->load->view('foot');
    }
    public function index_dean_agriculture()
    {
        $this->load->view('head_agriculture');
        $this->load->view('index_agriculture');
        $this->load->view('foot');
    }
    public function index_dean_agriculture1()
    {
        $this->load->view('head_agriculture');
        $this->load->view('agriculture_1');
        $this->load->view('foot');
    }
    public function index_dean_nursing()
    {
        $this->load->view('head_nursing');
        $this->load->view('index_nursing');
        $this->load->view('foot');
    }
    public function index_dean_nursing1()
    {
        $this->load->view('head_nursing');
        $this->load->view('nursing_1');
        $this->load->view('foot');
    }
    public function index_dean_physician()
    {
        $this->load->view('head_physician');
        $this->load->view('index_physician');
        $this->load->view('foot');
    }
    public function index_dean_physician1()
    {
        $this->load->view('head_physician');
        $this->load->view('physician_1');
        $this->load->view('foot');
    }
    public function index_dean_drug()
    {
        $this->load->view('head_drug');
        $this->load->view('index_drug');
        $this->load->view('foot');
    }
    public function index_dean_drug1()
    {
        $this->load->view('head_drug');
        $this->load->view('drug_1');
        $this->load->view('foot');
    }
    public function index_dean_management()
    {
        $this->load->view('head_management');
        $this->load->view('index_management');
        $this->load->view('foot');
    }
    public function index_dean_management1()
    {
        $this->load->view('head_management');
        $this->load->view('management_1');
        $this->load->view('foot');
    }
    public function index_dean_management2()
    {
        $this->load->view('head_management');
        $this->load->view('management_2');
        $this->load->view('foot');
    }
    public function index_dean_management3()
    {
        $this->load->view('head_management');
        $this->load->view('management_3');
        $this->load->view('foot');
    }
    public function index_dean_management4()
    {
        $this->load->view('head_management');
        $this->load->view('management_4');
        $this->load->view('foot');
    }
    public function index_dean_science()
    {
        $this->load->view('head_science');
        $this->load->view('index_science');
        $this->load->view('foot');
    }
    public function index_dean_science1()
    {
        $this->load->view('head_science');
        $this->load->view('science_1');
        $this->load->view('foot');
    }
    public function index_dean_enginee()
    {
        $this->load->view('head_enginee');
        $this->load->view('index_enginee');
        $this->load->view('foot');
    }
    public function index_dean_enginee1()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_1');
        $this->load->view('foot');
    }
    public function index_dean_enginee2()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_2');
        $this->load->view('foot');
    }
    public function index_dean_enginee3()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_3');
        $this->load->view('foot');
    }
    public function index_dean_enginee4()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_4');
        $this->load->view('foot');
    }
    public function index_dean_enginee5()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_5');
        $this->load->view('foot');
    }
    public function index_dean_enginee6()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_6');
        $this->load->view('foot');
    }
    public function index_dean_enginee7()
    {
        $this->load->view('head_enginee');
        $this->load->view('enginee_7');
        $this->load->view('foot');
    }
    public function index_dean_architecture()
    {
        $this->load->view('head_architecture');
        $this->load->view('index_architecture');
        $this->load->view('foot');
    }
    public function index_dean_architecture1()
    {
        $this->load->view('head_architecture');
        $this->load->view('architecture_1');
        $this->load->view('foot');
    }
    public function index_dean_architecture2()
    {
        $this->load->view('head_architecture');
        $this->load->view('architecture_2');
        $this->load->view('foot');
    }
    public function index_dean_architecture3()
    {
        $this->load->view('head_architecture');
        $this->load->view('architecture_3');
        $this->load->view('foot');
    }
    public function index_dean_architecture4()
    {
        $this->load->view('head_architecture');
        $this->load->view('architecture_4');
        $this->load->view('foot');
    }
    public function index_dean_Health()
    {
        $this->load->view('head_Health');
        $this->load->view('index_Health');
        $this->load->view('foot');
    }
    public function index_dean_Health1()
    {
        $this->load->view('head_Health');
        $this->load->view('Health1');
        $this->load->view('foot');
    }
    public function index_dean_Health2()
    {
        $this->load->view('head_Health');
        $this->load->view('Health2');
        $this->load->view('foot');
    }
    public function index_dean_liberal_arts()
    {
        $this->load->view('head_liberal_arts');
        $this->load->view('index_liberal_arts');
        $this->load->view('foot');
    }
    public function index_dean_liberal_arts1()
    {
        $this->load->view('head_liberal_arts');
        $this->load->view('liberal_arts_1');
        $this->load->view('foot');
    }
    public function index_dean_liberal_arts2()
    {
        $this->load->view('head_liberal_arts');
        $this->load->view('liberal_arts_2');
        $this->load->view('foot');
    }
    public function index_dean_liberal_arts3()
    {
        $this->load->view('head_liberal_arts');
        $this->load->view('liberal_arts_3');
        $this->load->view('foot');
    }
    public function index_dean_liberal_arts4()
    {
        $this->load->view('head_liberal_arts');
        $this->load->view('liberal_arts_4');
        $this->load->view('foot');
    }
    public function index_dean_public_health ()
    {
        $this->load->view('head_public_health');
        $this->load->view('index_public_health');
        $this->load->view('foot');
    }
    public function index_dean_public_health1 ()
    {
        $this->load->view('head_public_health');
        $this->load->view('public_health1');
        $this->load->view('foot');
    }
    public function index_dean_public_health2 ()
    {
        $this->load->view('head_public_health');
        $this->load->view('public_health2');
        $this->load->view('foot');
    }
    public function index_dean_public_health3()
    {
        $this->load->view('head_public_health');
        $this->load->view('public_health3');
        $this->load->view('foot');
    }
    
    public function index_dean_Political ()
    {
        $this->load->view('head_Political');
        $this->load->view('index_Political');
        $this->load->view('foot');
    }
    public function index_dean_Political1 ()
    {
        $this->load->view('head_Political');
        $this->load->view('Political_1');
        $this->load->view('foot');
    }
    public function index_dean_Political2 ()
    {
        $this->load->view('head_Political');
        $this->load->view('Political_2');
        $this->load->view('foot');
    }
    public function index_dean_Political3 ()
    {
        $this->load->view('head_Political');
        $this->load->view('Political_3');
        $this->load->view('foot');
    }
    public function index_project()
    {
        $this->load->view('head');
        $this->load->view('project');
        $this->load->view('foot');
    }
    public function index_project_2()
    {
        $this->load->view('head');
        
        $query = $this->db->query('select *from faultb');
        $pj['name'] =$query->result_array();
        $this->load->view('project_2',$pj);
        $this->load->view('foot');
    }
    public function index_database()
    {
        $this->load->view('head');
        $query = $this->db->query('select *from faultb');
        $data['name'] =$query->result_array();
        $this->load->view('database',$data);
        
        
       
        $this->load->view('foot');
    }
    public function index_database_2()
    {
        $this->load->view('head');
    
        $query = $this->db->query('select *from faultb');
        $data['name'] =$query->result_array();
        $this->load->view('database_2',$data);
        $this->load->view('foot');
    }
    public function index_record()
    {
        $this->load->view('head');
        $this->load->view('record');
      //  $this->load->view('foot');
    }
    public function index_report()
    {
        $this->load->view('head');
        $this->load->view('report');
        $this->load->view('foot');
    }
    public function index_benefit()
    {
        $this->load->view('head');
        $this->load->view('benefit');
        $this->load->view('foot');
    }
    public function index_data()
    {
       $this->load->view('head');
        $this->load->view('data');
      // $this->load->view('foot');
    }
    public function adddata(){
        if ($this->input->post("ok")!=null){
            $ara =array (
                "Base_id"=> $this->input->post("Base_id"),
                "Base_name"=>$this->input->post("Base_name"),
                "point"=> $this->input->post("point")
                );
        }
    $this->db->insert("faultb",$ara);
    //redirect("Trafcontrol","refersh");
    //exit();
    }
    public function alldata(){
        $query = $this->db->query('select *from faultb');
        $data['name'] =$query->result_array();
        $this->load->view('database',$data);
       // print_r($query->result());
    }
    public function index_graph1()
    {
        $this->load->view('head');
        $this->load->view('graph_1');
        $this->load->view('foot');
    }
    public function index_graph2()
    {
        $this->load->view('head');
        $this->load->view('graph_2');
        $this->load->view('foot');
    }
    public function index_graph3()
    {
        $this->load->view('head');
        $this->load->view('graph_3');
        $this->load->view('foot');
    }
    public function index_graph4()
    {
        $this->load->view('head');
        $this->load->view('graph_4');
        $this->load->view('foot');
    }
    public function index_graph5()
    {
        $this->load->view('head');
        $this->load->view('graph_5');
        $this->load->view('foot');
    }
    public function index_graph6()
    {
        $this->load->view('head');
        $this->load->view('graph_6');
        $this->load->view('foot');
    }
    public function index_graph7()
    {
        $this->load->view('head');
        $this->load->view('graph_7');
        $this->load->view('foot');
    }
    public function index_graph8()
    {
        $this->load->view('head');
        $this->load->view('graph_8');
        $this->load->view('foot');
    }
    public function index_graph9()
    {
        $this->load->view('head');
        $this->load->view('graph_9');
        $this->load->view('foot');
    }
    public function index_graph10()
    {
        $this->load->view('head');
        $this->load->view('graph_10');
        $this->load->view('foot');
    }
    public function index_graph11()
    {
        $this->load->view('head');
        $this->load->view('graph_11');
        $this->load->view('foot');
    }
    public function index_graph12()
    {
        $this->load->view('head');
        $this->load->view('graph_12');
        $this->load->view('foot');
    }
    public function index_graph13()
    {
        $this->load->view('head');
        $this->load->view('graph_13');
        $this->load->view('foot');
    }
    public function index_Report1()
    {
        $this->load->view('head');
        $this->load->view('Report1');
        $this->load->view('foot');
    }
    public function index_Report2()
    {
        $this->load->view('head');
        $this->load->view('Report2');
        $this->load->view('foot');
    }
    public function index_Report3()
    {
        $this->load->view('head');
        $this->load->view('Report3');
        $this->load->view('foot');
    }
}
