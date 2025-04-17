<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function signUp()
	{
		$this->load->model('vid_grupp');
		$data['vid_grupps'] = $this->vid_grupp->selectGroup();
		$this->load->model('vid_merop');
		$data['excursions'] = $this->vid_merop->selectMerop();
		$this->load->view('temp/head.php');

		$id_vid = $this->input->get('id_vid');
		$id_grup = $this->input->get('id_grup');

		$this->load->model('merop');
		$data['merops'] = $this->merop->selectMeropByVidAndGrup($id_vid, $id_grup);

		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_client.php');
		$this->load->view('view_signUp.php',$data);
		$this->load->view('temp/footer.php');
	}

	public function personCabinet()
	{
		$offset = $this->uri->segment(3, 0);
		$offset = intval($offset);

		$this->load->model('orders');
		$id_user = $this->session->userdata('id_user');
		$id_user = intval($id_user);
		$data['orders'] = $this->orders->selectOrder($id_user, 3, $offset);

		$this->load->library('pagination');
		$config['base_url'] = 'user/personCabinet/';
		$config['total_rows'] = 7;
		$config['per_page'] = 3;
		$config['full_tag_open'] = '<ul  class="pagination">';
		$config['full_tag_close'] = '</ul' >
			$config['first_link'] = 'Первая';
		$config['last_link'] = 'Последняя';
		$config['first_tag_open'] =  '<li  class="page-item"><spann class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';

		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$data['pagination']= $this->pagination->create_links();

		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_client.php');
		$this->load->view('view_personCabinet.php', $data);
		$this->load->view('temp/footer.php');
	}

	public function toOrder()
	{
		if ($this->session->userdata('id_user')) {
			$id_merop = $this->uri->segment(3, 0);

			$this->load->model('merop');
			$data['merop'] = $this->merop->selectMeropById($id_merop);
			$this->load->view('temp/head.php');
			$this->load->view('temp/nav_client.php');
			$this->load->view('form_toOrder.php', $data);
			$this->load->view('temp/footer.php');
		} else {
			redirect('Main/register');
		}
	}

	public function insertOrder()
	{
		if (isset($_POST)) {
			$id_user = $this->session->userdata('id_user');
			$id_merop = $_POST['id_merop'];
			$kol = $_POST['kol'];
			$this->load->model('orders');
			$this->orders->insertOrder($id_merop, $id_user, $kol);
			redirect('Main/index');
		}
	}

	public function toCancel()
	{
		$id_order = $this->uri->segment(3,0);
		$id_order = intval($id_order);
		$this->load->model('orders');
		$this->orders->cancelOrder($id_order);
		redirect('user/personCabinet');
	}
}
