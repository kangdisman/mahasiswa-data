<?php 

class Anggota_model extends CI_Model {

	private $table = 'anggota';
	private $primary = 'id';

	function count() {
		return $this->db->count_all($this->table);
	}

	function get_by_id($id) {
		$this->db->where($this->primary, $id);
		return $this->db->get($this->table);
	}

	function get_paged_list($limit=3, $offset=0, $order_column='', $order_type='asc') {
		if (empty($order_column)|| empty($order_type)) {
			$this->db->order_by($this->primary, 'asc');
		} else {
			$this->db->order_by($order_column, $order_type);
			return $this->db->get($this->table, $limit, $offset);
		}
	}

	function add($data) {
		return $this->db->insert($this->table, $data);
	}

	function update($id, $data) {
		$this->db->where($this->primary, $id);
		$this->db->update($this->table, $data);
	}

	function hapus($id) {
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
	}

	function cari($cari) {
		$this->db->like($this->primary, $cari);
		$this->db->or_like('nama', $cari);
		return $this->db->get($this->table);
	}

}

 ?>