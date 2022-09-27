<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Barang_model extends CI_Model
{
    public function import_data($databarang)
    {
        $jumlah = count($databarang);

        if ($jumlah > 0) {
            $this->db->replace('m_barang', $databarang);
        }
    }

    public function getDataBarang()
    {
        return $this->db->get('m_barang')->result_array();
    }
}
