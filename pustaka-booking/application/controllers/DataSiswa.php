<?php
class DataSiswa extends CI_Controller{

    public function index(){
        $this->load->view('view-form-datasiswa');
    }
    public function cetak(){
        
            $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[5]', [
                'required' => 'Nama Siswa Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]);

            $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
                'required' => 'NIS Harus diisi',
                'min_length' => 'NIS terlalu pendek'
            ]);
    
            $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
                'required' => 'Kelas Harus diisi',
                'min_length' => 'Kelas terlalu pendek'
            ]);
    
            $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|min_length[3]', [
                'required' => 'Tempat Lahir Harus diisi',
                'min_length' => 'Tempat Lahir terlalu pendek'
            ]);
    
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[10]', [
                'required' => 'Alamat Harus diisi',
                'min_length' => 'Alamat terlalu pendek'
            ]);
    
            if ($this->form_validation->run() != true) {
                $this->load->view('view-form-datasiswa');
            } else {
    
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-datasiswa', $data);
    }
}
    }
