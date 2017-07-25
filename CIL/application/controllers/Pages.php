<?php
require_once 'CILServiceUtil2.php';
require_once 'GeneralUtil.php';
class Pages  extends CI_Controller 
{
    public function Cell_illustration()
    {
        $data['test']="test";
        $this->load->view('templates/cil_header4', $data);
        $this->load->view('pages/cell_illustration_display', $data);
        $this->load->view('templates/cil_footer2', $data);
    }
    
    public function Datasets()
    {
        $data['test']="test";
        $data['category'] = "datasets";
        $this->load->view('templates/cil_header4', $data);
        $this->load->view('pages/dataset_display', $data);
        $this->load->view('templates/cil_footer2', $data);
    }
    
    public function Project_20269()
    {
        $data['test']="test";
        $this->load->view('templates/cil_header4', $data);
        $this->load->view('pages/project_20269_display', $data);
        $this->load->view('templates/cil_footer2', $data);
    }
}
