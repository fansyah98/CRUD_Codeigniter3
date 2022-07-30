<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_m extends CI_Model {

    public function get()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('prodi' , 'prodi.id_prodi = mahasiswa.prodi');
        $this->db->order_by('id_mhs', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function get_data($id = null )
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        if( $id != null ) {
            $this->db->where('id_mhs', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
         $data['nama'] = $post['nama'];
        $data['jenis_kelamin'] = $post['jenis_kelamin'];
        $data['alamat'] = $post['alamat'];
        $data['umur'] = $post['umur'];
        $this->db->insert('mahasiswa', $data);
    }
    public function update_data($post)
    {
        $data['nama'] = $post['nama'];
        $data['jenis_kelamin'] = $post['jenis_kelamin'];
        $data['alamat'] = $post['alamat'];
        $data['umur'] = $post['umur'];
        $this->db->where('id_mhs', $post['id']);
        $this->db->update('mahasiswa', $data);
    }

    public function del($id){
        $this->db->where('id_mhs' , $id);
        $this->db->delete('mahasiswa');
    }

}

/* End of file Mahasiswa_m.php */
