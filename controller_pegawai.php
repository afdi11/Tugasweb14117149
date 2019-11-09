<?php

include "model_pegawai.php";
include "view_pegawai.php";

class controller_pegawai{
    function get(){
        $model_pegawai = new model_pegawai();
        $data['nama']= $model_pegawai->getNama();
        $data['nip']= $model_pegawai->getNip();
        $view_pegawai = new view_pegawai();
        $view_pegawai->show_pegawai($data);
    }
    function update(){

    }

    function delete(){

    }

    function edit($nip){
        $model_pegawai = new model_pegawai();
        $data['result']= $model_pegawai->getBynip();
        $view_pegawai = new view_pegawai();
        $view_pegawai->edit_pegawai($data);
    }
}

?> 