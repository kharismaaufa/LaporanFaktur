<?php

class DataUser extends CI_Controller{

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
        $data['title'] = "Kelola User";
        $data['user'] = $this->fakturModel->get_data('data_user')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataUser', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahUser(){
        $data['title'] = "Tambah User";
        $data['user'] = $this->fakturModel->get_data('data_user')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formTambahUser', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahUserAksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambahUser();
        }else{
            $nama                   = $this->input->post('nama_user');
            $username               = $this->input->post('username');
            $password               = md5($this->input->post('password'));
            $hak_akses              = $this->input->post('hak_akses');
            $photo                  = $_FILES['photo']['name'];
            if($photo=''){}else{
                $config ['upload_path']      = './template/photo';
                $config ['allowed_types']    = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('photo')){
                    echo "Photo gagal diupload!";
                }else{
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_user'             => $nama,
                'username'              => $username,
                'password'              => $password,
                'hak_akses'             => $hak_akses,
                'photo'                 => $photo,
            );

            $this->fakturModel->insert_data($data, 'data_user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>User berhasil ditambahkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('admin/DataUser');
        }
    }

    public function updateUser($id){
        $where = array('id_user' => $id);
        $data['title'] = "Update Data User";
        $data['user'] = $this->db->query("SELECT * FROM data_user WHERE id_user='$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formUpdateUser', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateUserAksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $id             = $this->input->post('id_user');
            $this->updateUser($id);
        }else{
            $id                 = $this->input->post('id_user');
            $nama               = $this->input->post('nama_user');
            $username           = $this->input->post('username');
            $password           = $this->input->post('password');
            $hak_akses           = $this->input->post('hak_akses');
            $photo              = $_FILES['photo']['name'];
            if($photo){
                $config ['upload_path']      = './template/photo';
                $config ['allowed_types']    = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if($this->upload->do_upload('photo')){
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nama_user'             => $nama,
                'username'              => $username,
                'password'              => $password,
                'photo'                 => $photo,
                'hak_akses'             => $hak_akses,

            );
            $where = array(
                'id_user' => $id,
            );
            $this->fakturModel->update_data('data_user', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Faktur berhasil diupdate!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('admin/DataUser');
        }
    }

    public function deleteUser($id){
        $where = array('id_user' => $id);
        $this->fakturModel->delete_data($where, 'data_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data User berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('admin/DataUser');
    }


    public function _rules(){
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');
    }
}

?>