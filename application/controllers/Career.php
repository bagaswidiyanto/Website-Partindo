<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Career extends MY_Controller
{
	public function index()
	{

		$this->data['karir'] = $this->db->select('*')->where('aktif !=', 0)->order_by('sort', 'ASC')->get('tbl_karir')->result();

		$this->web = 'content/v_career';
		$this->layout();
	}


	public function detail_posisi()
	{
		$slug = $this->uri->segment(3);
		$this->data['career_detail'] = $this->db->get_where('tbl_karir', array('slug' => $slug))->row();
		$this->web = 'content/v_career_detail';
		$this->layout();
	}

	// public function resume()
	// {

	// 	// $lamaran = $_FILES['file']['name'];



	// 	if (isset($_FILES['file']['name'])) {

	// 		//form
	// 		$lamaranname = $_FILES["file"]["name"];
	// 		$file_extension = pathinfo($lamaranname, PATHINFO_EXTENSION);
	// 		$namalamaran = md5(date('Y-m-d H:i:s')) . '.' . $file_extension;

	// 		$folderuploadlamaran = FCPATH . 'file_lamaran';

	// 		$configlamaran['upload_path'] = $folderuploadlamaran . '/';
	// 		$configlamaran['allowed_types'] = 'pdf';
	// 		$configlamaran['max_size'] = 5000; // 0 = no file size limit           
	// 		$configlamaran['file_name'] =  $namalamaran;
	// 		$configlamaran['overwrite'] = FALSE;
	// 		$this->load->library('upload');
	// 		$this->upload->initialize($configlamaran);

	// 		if (!is_dir($folderuploadlamaran)) {
	// 			mkdir($folderuploadlamaran, 0777, true);
	// 			$dir_exist = false; // dir not exist
	// 		}

	// 		if (!$this->upload->do_upload('file')) {
	// 			$this->upload->display_errors();
	// 			echo "error";
	// 		} else {
	// 			$posisi = $this->input->post("posisi");
	// 			$telp = $this->input->post("telp");
	// 			$surat_lamaran = $this->input->post("surat_lamaran");

	// 			$data = array(
	// 				'posisi' => $posisi,
	// 				'telp' => '0' . $telp,
	// 				'surat_lamaran' => $surat_lamaran,
	// 				'file' => $namalamaran,
	// 			);
	// 			$this->db->insert("tbl_resume", $data);
	// 			echo "good";
	// 		}
	// 	}
	// 	// }
	// }
	public function resume()
	{

		$lamaran = $_FILES['file']['name'];



		if ($lamaran !== "") {

			//form
			$lamaranname = $_FILES["file"]["name"];
			$file_extension = pathinfo($lamaranname, PATHINFO_EXTENSION);
			$namalamaran = md5(date('Y-m-d H:i:s')) . '.' . $file_extension;

			$folderuploadlamaran = FCPATH . 'file_lamaran';

			$configlamaran['upload_path'] = $folderuploadlamaran . '/';
			$configlamaran['allowed_types'] = 'pdf';
			$configlamaran['max_size'] = 5000; // 0 = no file size limit           
			$configlamaran['file_name'] =  $namalamaran;
			$configlamaran['overwrite'] = FALSE;
			$this->load->library('upload');
			$this->upload->initialize($configlamaran);

			if (!is_dir($folderuploadlamaran)) {
				mkdir($folderuploadlamaran, 0777, true);
				$dir_exist = false; // dir not exist
			}

			if (!$this->upload->do_upload('file')) {
				$this->data["msg"] = '<div class="alert alert-danger text-center">Format file harus dalam bentuk .PDF</div>';
				$this->data["career_detail"] = $this->db->get('tbl_karir')->row();
				$this->web = 'content/v_career_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
				$this->layout();
			} else {
				$posisi = $this->input->post("posisi");
				$telp = $this->input->post("telp");
				$surat_lamaran = $this->input->post("surat_lamaran");

				$data = array(
					'posisi' => $posisi,
					'telp' => $telp,
					'surat_lamaran' => $surat_lamaran,
					'file' => $namalamaran,
				);
				$masuk = $this->db->insert("tbl_resume", $data);
				if ($masuk = true) {
					$this->data["msg"] = '<div class="alert alert-success text-center">Anda telah berhasil mengirimkan Resume</div>';
					$this->data["career_detail"] = $this->db->get('tbl_karir')->row();
					$this->web = 'content/v_career_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
					$this->layout();
				} else {
					$this->data["msg"] = '<div class="alert alert-danger text-center">Terjadi kesalahan dalam mengisi form / mengupload data, silahkan coba lagi.</div>';
					$this->data["career_detail"] = $this->db->get('tbl_karir')->row();
					$this->web = 'content/v_career_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
					$this->layout();
				}
			}
		} else {
			$this->data["msg"] = '<div class="alert alert-danger text-center">Anda belum upload file lamaran, silahkan coba lagi.</div>';
			$this->data["career_detail"] = $this->db->get('tbl_karir')->row();
			$this->web = 'content/v_career_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
			$this->layout();
		}
		// }
	}
}
