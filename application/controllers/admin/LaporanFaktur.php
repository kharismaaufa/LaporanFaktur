<?php

class LaporanFaktur extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('hak_akses') != '1'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda Belum Login!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
				redirect('welcome');
        }
    }

    public function index(){
        $data['title'] = "Laporan Faktur";
        $data['faktur'] = $this->fakturModel->get_data('data_faktur')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporanFaktur', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahFaktur(){
        $data['title'] = "Buat Laporan Faktur";
        $data['faktur'] = $this->fakturModel->get_data('data_faktur')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formLaporanFaktur', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahLaporanAksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambahFaktur();
        }else{
            $tanggal            = $this->input->post('tanggal');
            $jumlah             = $this->input->post('jumlah');
            $cabang             = $this->input->post('cabang');
            $status             = $this->input->post('status');

            $data = array(
                'tanggal'              => $tanggal,
                'jumlah'               => $jumlah,
                'cabang'               => $cabang,
                'status'               => $status,

            );

            $this->fakturModel->insert_data($data, 'data_faktur');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Faktur berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('admin/LaporanFaktur');
        }
    }

    public function updateFaktur($id){
        $where = array('id_faktur' => $id);
        $data['title'] = "Update Laporan Faktur";
        $data['faktur'] = $this->db->query("SELECT * FROM data_faktur WHERE id_faktur='$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formUpdateFaktur', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateFakturAksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $id             = $this->input->post('id_faktur');
            $this->updateFaktur($id);
        }else{
            $id                 = $this->input->post('id_faktur');
            $tanggal            = $this->input->post('tanggal');
            $jumlah             = $this->input->post('jumlah');
            $cabang             = $this->input->post('cabang');
            $status             = $this->input->post('status');

            $data = array(
                'tanggal'              => $tanggal,
                'jumlah'               => $jumlah,
                'cabang'               => $cabang,
                'status'               => $status,

            );
            $where = array(
                'id_faktur' => $id,
            );
            $this->fakturModel->update_data('data_faktur', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Faktur berhasil diupdate!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('admin/LaporanFaktur');
        }
    }

    public function deleteFaktur($id){
        $where = array('id_faktur' => $id);
        $this->fakturModel->delete_data($where, 'data_faktur');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Faktur berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('admin/LaporanFaktur');
    }

    public function _rules(){
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('cabang', 'Cabang', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }

}

?>