<?php 

// ini adalah fungsi untuk menambah data ke database

public function tambah()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');

		if ($this->form_validation->run() === FALSE) {
			echo "
				<script>
					alert('error!');
					document.location.href = ' " . base_url() . "';
				</script>
			";
		} else {
			$this->movies_model->tambah();
			$data['alert'] = 'added';
			$this->load->view('movies/alert', $data);
		}
	}

?>