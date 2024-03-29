<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
    {
        # code...
        parent::__construct();

        $this->data['jenkel'] = ['L' => 'Laki-laki', 'P'=>'Perempuan'];
    }

	public function index()
	{
        $dosen = $this->Dosen_model->alldata();
        
        foreach ($dosen as $index => $value) {
            # code...
            $value['ketjenkel'] = $this->data['jenkel'][$value['jenkel']];
            $data['dosen'][] = $value;
        }

        $this->load->view('Dosen_view', $data);
    }


    
    
    public function tambah()
    {
        # code...
        $data['jenkel'] = $this->data['jenkel'];

        $this->load->view('Tambahdosen_view', $data);
    }

    public function simpan()
    {
        # code...
        $data['jenkel'] = $this->data['jenkel'];

        //pastikan tombol simpan di klik
        if ($this->input->post('tblsimpan')) {
            # code...
            $data['nik'] = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['notlp'] = $this->input->post('notlp');
            $data['jenkel'] = $this->input->post('jenkel');

            //validasi form
            $this->form_validation->set_rules('nik', 'NIK', 'required|is_unique[dosen.nik]');
            $this->form_validation->set_rules('nama', 'NAMA', 'required');
            $this->form_validation->set_rules('alamat', 'ALAMAT', 'required');
            $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');

            if ($this->form_validation->run() == true) {
                # code...
                $simpan = $this->Dosen_model->simpan($data);
                redirect('Dosen');

            }else {

                $this->load->view('Tambahdosen_view', $data);

            }

        } else {

            redirect('Dosen');

        }
    }

    public function hapus($nik)
    {
        # code...
        $this->Dosen_model->hapus($nik);
        redirect('Dosen');
    }

    public function ubah($nik)
    {
        # code...
        $data['jenkel'] = $this->data['jenkel'];
        $data['dosen'] = $this->Dosen_model->getData($nik);
        $this->load->view('Ubahdosen_view', $data);

    }

    public function prosesubah()
    {
        # code...
        if ($this->input->post('tblsimpan')) {
            # code...
            $nik = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['notlp'] = $this->input->post('notlp');
            $data['jenkel'] = $this->input->post('jenkel');

             // validasi dulu
            $this->form_validation->set_rules('nama', 'NAMA', 'required');
            $this->form_validation->set_rules('alamat', 'ALAMAT', 'required');
            $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');

            if ($this->form_validation->run() == true) {
                # code...
                $simpan = $this->Dosen_model->ubah($data, $nik);
                redirect('Dosen');
            }

        } else {

            redirect('Dosen');

        }

       

    }


}
