<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 

	public function index(){

		if($this->session->has_userdata('sess_login')){
		 
			$data = array("visitor_id"=> uniqid(),"visitor_ip"=> $this->input->ip_address(), "visitor_ticking_time"=>date('Y-m-d H:i:s'));
			$this->backmodel->recordVisitorAdmin($data);
			$this->panel("openingscreen");

			//$this->panel("openingscreen");

		}

		else{
			
			$this->managearea();
		}	

	}



	public function managearea(){

		$data=array();
		if($this->session->has_userdata('sess_login')){
			$data=array("message" => "has a session");
			$this->index();
		}
		else
		{
			$this->load->view("be/headlogin");
			$this->load->view("be/login");
			$this->load->view("be/footerjs"); 		 
		}
		//echo json_encode($data);

	}


	function auth(){

			$data = array();
			$this->load->library("session");
 

		     if($this->backmodel->authBool($this->input->post("myUser"),$this->input->post("myPass"))>0){
					$data = array(
					"username" => $this->input->post("myUser"),
					"message" => "Access Granted",
					"status"   => "ok",
					'logged_in' => TRUE				 
				);
				
				 
			
				$this->session->set_userdata("sess_login",$data);
				
				//redirect('index','refresh');
				
			}

			else{
				$data = array(
					"message" => "Access Rejected",
					"status"   => "failed" 					 
				);
			
			}
			
			echo json_encode($data);
			 
			
	 
	}
	public function panel($flag="")
	{
		 
		$data["sessionsIbadah"]= $this->backmodel->loadSesiIbadah();
		$data["flag"]= $flag;

 		$this->load->view('be/head');
		$this->load->view('be/content', $data);
		$this->load->view('be/footermain');
		$this->load->view('be/footerjs');
	}

	public function testSesiIbadah(){

		$data["sessionsIbadah"]= $this->backmodel->loadSesiIbadah();
		echo json_encode($data);

	}

	function showerror(){
		echo "error page here";
	}

	function sample($flag="", $id=""){

		$vardata = $this->backmodel->show($flag,$id);
	 
		echo json_encode($vardata);
		

	}
	
	function loader($flag="", $id=""){

		$vardata = $this->backmodel->show($flag,$id);
	 
		echo json_encode($vardata);
		

	}



	public function updateprofile($flag=""){


		  $data=array("");
		  $message=array("");



		  if(isset($_FILES["image_file"]["name"]))  
		  {  
				$config['upload_path']="./assets/gluster/";
				$config['allowed_types']='gif|jpg|png';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload',$config);
				if($this->upload->do_upload("image_file")){
					$data = array('upload_data' => $this->upload->data());		
					$title= $this->input->post('txtupdated');
					$image= $data['upload_data']['file_name']; 					
					$data = array("isi"=> $title, "file_path" => $image); 

				}

		  }
		  else
		  {			
			
				$data = array("isi"=> $this->input->post('txtupdated')); 
		  }  	 


		  $this->db->trans_start();
		  $this->backmodel->updateProfilNavigation($flag, $data);
		  $this->db->trans_complete();


		  if ($this->db->trans_status() === FALSE)
			{
					// generate an error... or use the log_message() function to log your error

					$message = array("message" => "Failed to post DB");
	
			}
			else{
					$message = array("message" => "Data updated");
			}
		 
		
		 	echo json_encode($message);

	}


	public function addsipel($flag=""){

			header('Content-Type: application/json');
	
			$data=array("");
			$message=array("");

				switch($flag){

					case "perkaria":

							$data = array(
									"isi" => $this->input->post("paramIsi"),
									"jp_id" => "jp_001",
									"status" => 1
							);


					break;
					
					case "perkauan":
						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_002",
							"status" => 1
						);

					break;
					
					case "pemuda":
				
						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_003",
							"status" => 1
						);

					break;
					
					
					case "anak-remaja":

						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_004",
							"status" => 1
						);

					break;
					
					case "tata-ibadah":

						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_005",
							"status" => 1
						);

					break;	
					
					case "misi":

						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_006",
							"status" => 1
						);

					break;
					
					
					case "doa":

						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_007",
							"status" => 1
						);

					break;

					case "konseling":

						$data = array(
							"isi" => $this->input->post("paramIsi"),
							"jp_id" => "jp_008",
							"status" => 1
						);

					break;
				}

				$this->db->trans_start();
				$this->backmodel->recordSiePelayanan($data);
				$this->db->trans_complete();
	
	
				if ($this->db->trans_status() === FALSE)
				{
						// generate an error... or use the log_message() function to log your error
	
						$message = array("message" => "Failed to post DB");
		
				}
				else{
						$message = array("message" => "Data of " +$flag+" "+"is"+" "+"added succesfully");
				}
	
	
				echo json_encode($message);
	}

	public function addjakeg($flag=""){

			$data=array("");
			$message=array("");

			
			switch($flag){

				case "ibadah":

					$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),
							"singer"=>$this->input->post('paramSinger'),
							"pemusik"=>$this->input->post('paramPemusik'),
							"doa_syafaat"=>$this->input->post('paramDoaSyafaat'),
							"kolektan"=>$this->input->post('paramKolektan'),
							"penerima_tamu"=>$this->input->post('paramPenerimaTamu'),
							"lcd"=>$this->input->post('paramLcd'),
							"supervisor"=>$this->input->post('paramSupervisor'),
							"kebersihan"=>$this->input->post('paramKebersihan'),
							"judul"=>$this->input->post('paramJudul'),
							"tempat"=>$this->input->post('paramTempat'),
							"pob"=>$this->input->post('paramPob'),
							"status"=>1,

					);

				break;

				case "doatungku":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),					 
							"status"=>1

						);

				break;
				
				case "dopus":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),					 
							"doa_syafaat"=>$this->input->post('paramPemimpinDoa'),					 
							"pemusik"=>$this->input->post('paramPemusik'),					 
							"status"=>1

						);

				break;
				
				
				case "dosemalam":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),					 
							"doa_syafaat"=>$this->input->post('paramPemimpinDoa'),					 
							"pemusik"=>$this->input->post('paramPemusik'),					 
							"status"=>1

						);

				break;
				
				
				case "dorantai":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),					 				 
							"doa_syafaat"=>$this->input->post('paramPemimpinDoa'),							 			 
							"status"=>1

						);

				break;
				
				
				case "doling":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),					 				 
							"pengemudi"=>$this->input->post('paramPengemudi'),							 			 
							"status"=>1

						);

				break;


			}
			
			$this->db->trans_start();
			$this->backmodel->recordTataIbadah($data);
			$this->db->trans_complete();


			if ($this->db->trans_status() === FALSE)
			{
					// generate an error... or use the log_message() function to log your error

					$message = array("message" => "Failed to post DB");
	
			}
			else{
					$message = array("message" => "Data updated");
			}


			echo json_encode($message);

	}
	
	public function updateJakeg($flag="", $paramID=""){

			$data=array("");
			$message=array("");

			
			switch($flag){

				case "ibadah":

					$data = array(

							//"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),
							"singer"=>$this->input->post('paramSinger'),
							"pemusik"=>$this->input->post('paramPemusik'),
							"doa_syafaat"=>$this->input->post('paramDoaSyafaat'),
							"kolektan"=>$this->input->post('paramKolektan'),
							"penerima_tamu"=>$this->input->post('paramPenerimaTamu'),
							"lcd"=>$this->input->post('paramLcd'),
							"supervisor"=>$this->input->post('paramSupervisor'),
							"kebersihan"=>$this->input->post('paramKebersihan'),
							"judul"=>$this->input->post('paramJudul'),
							"tempat"=>$this->input->post('paramTempat'),
							"pob"=>$this->input->post('paramPob'),
							"status"=>1,

					);

				break;

				case "doatungku":

						$data = array(
 
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),					 
							"status"=>1

						);

				break;
				
				case "dopus":

						$data = array(

						 
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),					 
							"doa_syafaat"=>$this->input->post('paramPemimpinDoa'),					 
							"pemusik"=>$this->input->post('paramPemusik'),					 
							"status"=>1

						);

				break;
				
				
				case "dosemalam":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),
							"pelayan_firman"=>$this->input->post('paramPelayanFirman'),					 
							"doa_syafaat"=>$this->input->post('paramPemimpinDoa'),					 
							"pemusik"=>$this->input->post('paramPemusik'),					 
							"status"=>1

						);

				break;
				
				
				case "dorantai":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),					 				 
							"doa_syafaat"=>$this->input->post('paramPemimpinDoa'),							 			 
							"status"=>1

						);

				break;
				
				
				case "doling":

						$data = array(

							"id_ibadah"=>"",
							"gkii_sesi_id"=>$this->input->post('paramSesiID'),
							"tanggal"=>$this->input->post('paramTanggal'),
							"jam"=>$this->input->post('paramJam'),					 				 
							"pengemudi"=>$this->input->post('paramPengemudi'),							 			 
							"status"=>1

						);

				break;


			}
			
			$this->db->trans_start();
			$this->backmodel->updateJadwalKegiatan($paramID,$data);
			$this->db->trans_complete();


			if ($this->db->trans_status() === FALSE)
			{
					// generate an error... or use the log_message() function to log your error

					$message = array("message" => "Failed to update Database");
	
			}
			else{
					$message = array("message" => "Data updated");
			}


			echo json_encode($message);

	}

	public function logout(){

		$this->session->sess_destroy();
		
		redirect('welcome/managearea','refresh');
		

	}




}
