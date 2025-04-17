<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


	public function index()
	{

		$this->load->model('merop');
		$data['tours'] = $this->merop->selectMeropByName('Туры');

		$data['excursions'] = $this->merop->selectMeropByName('Экскурсии');
		$this->load->view('temp/head.php');

		if ($this->session->userdata('role')  == 'client') {
			$this->load->view('temp/nav_client.php');
		} else {
			$this->load->view('temp/nav.php');
		}

		$this->load->view('index.php', $data);
		$this->load->view('temp/footer.php');
	}

	public function register()
	{
		$this->load->view('temp/head.php');
		$this->load->view('temp/nav.php');
		$this->load->view('form_register.php');
		$this->load->view('temp/footer.php');
	}

	public function insertUser()
	{
		$this->load->model('users');
		if (isset($_POST) && isset($_FILES)) {
			if ($_POST['password'] == $_POST['repeatPassword']) {
				$dirrectory = 'UploadImg/';
				$avatar = $_FILES['avatar'];
				if (move_uploaded_file($avatar['tmp_name'], $dirrectory . $avatar['name'])) {
					$avatar = $dirrectory . $avatar['name'];
					$fio = $_POST['fio'];
					$login = $_POST['login'];
					$email = $_POST['email'];
					$password = $_POST['password'];

					$this->users->insertUser($fio, $email, $login, $password, $avatar);
					$user = $this->users->selectUser($login, $password);
					if ($user) {
						$this->session->set_userdata('role', $user[0]['role']);
						$this->session->set_userdata('id_user', $user[0]['id_user']);
						redirect('Main/index');
					} else {
						echo 'Неправильный логин или пароль';
					}
				}
			} else {
				echo 'Пароли не совпадают.';
			}
		}
	}

	public function auth()
	{
		$this->load->view('temp/head.php');
		$this->load->view('temp/nav.php');
		$this->load->view('form_auth.php');
		$this->load->view('temp/footer.php');
	}

	public function selectUser()
	{
		if (isset($_POST)) {
			$login = $_POST['login'];
			$password = $_POST['password'];
			$this->load->model('users');
			$user = $this->users->selectUser($login, $password);
			if ($user) {
				$this->session->set_userdata('role', $user[0]['role']);
				$this->session->set_userdata('id_user', $user[0]['id_user']);
				if ($user[0]['role'] == 'manager') {
					redirect('Manager/orders');
				} else {
					redirect('Main/index');
				}
			} else {
				echo 'Неправильный логин или пароль';
			}
		}
	}

	public function page_merop()
	{
		$id_merop = $this->uri->segment(3, 0);
		$this->load->model('merop');
		$data['merop'] = $this->merop->selectMeropById($id_merop);

		$this->load->view('temp/head.php');
		$this->load->view('temp/nav.php');
		$this->load->view('view_pageMerop.php', $data);
		$this->load->view('temp/footer.php');
	}

	public function exit()
	{
		session_destroy();
		redirect('Main/index');
	}
}
