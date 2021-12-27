<?php

class KayitFormu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("kayitFormu");
    }


    public function insert()
    {
        $isim           = $this->input->get("isim");
        $email          = $this->input->get("email");
        $kullaniciAdi   = $this->input->get("kullaniciAdi");
        $parola         = $this->input->get("parola");
        $adres          = $this->input->get("adres");
        $sehir          = $this->input->get("sehir");
        $ilce           = $this->input->get("ilce");
        $mahalle        = $this->input->get("mahalle");
        $kartNumarasi   = $this->input->get("kartNumarasi");
        $kartIsim       = $this->input->get("kartIsim");
        $cvv            = $this->input->get("cvv");
        $gsm            = $this->input->get("gsm");
        
        $data = [
            "isim"          => $isim,
            "email"         => $email,
            "kullaniciAdi"  => $kullaniciAdi,
            "parola"        => $parola,
            "adres"         => $adres,
            "ilce"          => $ilce,
            "sehir"         => $sehir,
            "mahalle"       => $mahalle,
            "kartNumarasi"  => $kartNumarasi,
            "kartIsim"      => $kartIsim,
            "cvv"           => $cvv,
            "gsm"           => $gsm
        ];

        $this->load->model("KayitFormu_Model");

        $insert = $this->KayitFormu_Model->insert($data);

        if ($insert) {
            echo "Bilgiler Kaydedildi.";
        }

    }

    public function delete($id)
    {
        $this->load->model("todo_model");

        $this->todo_model->delete($id);

        redirect(base_url());
    }

    public function isComplatedSetter($id)
    {
        $this->load->model("todo_model");
        $complated = ($this->input->post("complated") == true) ? 1 : 0;
        $this->todo_model->update($id, array(
            "complatedAt" => $complated
        ));
    }
}
