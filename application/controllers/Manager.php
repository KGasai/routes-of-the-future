<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
	public function orders()
	{
		$this->load->model('orders');
		$data['orders'] = $this->orders->selectOrders();
		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_manager.php');
		$this->load->view('view_orders.php',$data);
		$this->load->view('temp/footer.php');
	}

    public function feddbacks()
	{
		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_manager.php');
		$this->load->view('view_feedback.php');
		$this->load->view('temp/footer.php');
	}

    public function addFeedback()
	{
		if(isset($$_POST)){

        }
	}

    public function merops()
	{
		$this -> load -> model('vid_merop');
		$data['vid_merops']=$this -> vid_merop ->selectMerop();
		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_manager.php');
		$this->load->view('view_merops.php',$data);
		$this->load->view('temp/footer.php');
	}

    public function addMerop()
	{
		$this -> load -> model('vid_merop');
		$data['vid_merops']=$this -> vid_merop ->selectMerop();

		$this -> load -> model('vid_grupp');
		$data['vid_grupps']=$this -> vid_grupp ->selectGroup();

		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_manager.php');
		$this->load->view('form_addMerop.php',$data);
		$this->load->view('temp/footer.php');
	}

    public function insertMerop()
	{
		if(isset($_POST) && isset($_FILES)){
			$dirrectory = 'UploadImg/';
			$image = $_FILES['image'];

			if(move_uploaded_file($image['tmp_name'], $dirrectory.$image['name'])){
				$path_img = $dirrectory.$image['name'];
				$id_grup = $_POST['id_grup'];
				$id_vid = $_POST['id_vid'];
				$name_merop = $_POST['name_merop'];
				$price = $_POST['price'];
				$date1 = $_POST['date1'];
				$date2 = $_POST['date2'];
				$time_merop = $_POST['time'];
				$description = $_POST['description'];
				$adres = $_POST['adres'];

				$this -> load -> model('merop')	;
				$this -> merop -> insertMerop($id_grup, $id_vid, $name_merop, $price, $date1, $date2, $time_merop, $path_img, $description, $adres);
				redirect('Manager/merops');
			}else{
				echo 'ФОтография не загрузилась';
			}
        }
	}

    public function deleteMerop()
	{
		if(isset($_GET)){

        }
	}

	public function addVidMerop()
	{
		$this->load->view('temp/head.php');
		$this->load->view('temp/nav_manager.php');
		$this->load->view('form_VidMerop.php');
		$this->load->view('temp/footer.php');
	}

	public function insertVidMerop()
	{
		var_dump($_POST);
		if(isset($_POST)){
			$this -> load -> model('vid_merop');
			$this -> vid_merop ->insertMerop($_POST['name_merop']);
			redirect('Manager/merops');
        }
	}
}
