<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backmodel extends CI_Model {

    //Tata Ibadah
    public function recordIbadah($data=array())
    {        
        $this->db->insert('ibadah', $data);        
    }


    public function modify($idParam="", $flag="")
    {
          switch($flag){
              case "jadwalkegiatan":                        
                    $this->db->where('id_ibadah', $idParam);
                    return $this->db->get('ibadah')->row();
              break;

              case "seksipelayanan":
                    $this->db->where('id_seksi_pelayanan', $idParam);
                    return $this->db->get('seksi_pelayanan')->row();
              break;
              
              case "doagroup":                    
                    $this->db->where('id_doa', $idParam);
                    return $this->db->get('doa')->row();
              break;              
              
          }
    }

    public function show($flag="",$idParam=""){

            if($idParam==""&&$flag==""){
                $data = array("message", "no selected right query");
                echo json_encode($data);
            }
            else if($idParam==""){
                
                switch($flag){
                    
                    case "ibadah":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_1' OR ibadah.gkii_sesi_id='sesi_2' OR ibadah.gkii_sesi_id='sesi_3')"); 
                       $this->db->where("LOWER(DAYNAME(ibadah.tanggal))", "sunday"); 
                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    
                    case "doatungku":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("ibadah.gkii_sesi_id", "sesi_4");                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    case "dopus":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_5')"); 
                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    case "dosemalam":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_6')"); 
                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    case "doarantai":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_7')"); 
                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    case "doakeliling":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_8')"); 
                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    case "mentoring":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_9')"); 
                       
                       return $this->db->get('ibadah')->result();                         

                    break;
                    
                    case "doagroup":

                       return $this->db->get('doa')->result();                         

                    break;

                    case "mysejarah":

                        $this->db->where('kategori', "sejarah");
                        return $this->db->get('profil')->row(); 
                
                    break;
                    
                    case "myvisimisi":

                        $this->db->where('kategori', "visi_misi");
                        return $this->db->get('profil')->row(); 
                
                    break;
                    
                    case "mygerakan":

                        $this->db->where('kategori', "gerakan");
                        return $this->db->get('profil')->row(); 
                
                    break;
                }


            }
            else if($idParam!=""){

                switch($flag){                    
              
                    case "doagroup":
                       $this->db->where('id_doa', $idParam);
                       return $this->db->get('doa')->result();                         

                    break;


                    //======
                    case "ibadah":                  
                       
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_1' OR ibadah.gkii_sesi_id='sesi_2' OR ibadah.gkii_sesi_id='sesi_3')");                                         
                       $this->db->where("ibadah.id_ibadah", $idParam);                        
                       return $this->db->get('ibadah')->row();   

                    break;
                    
                    
                    case "doatungku":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_4')");                       
                       $this->db->where("ibadah.id_ibadah", $idParam);                        
                       return $this->db->get('ibadah')->row();     
                    break;
                    
                    case "doapuasa":
                        $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                        $this->db->where("(ibadah.gkii_sesi_id='sesi_5')");                       
                        $this->db->where("ibadah.id_ibadah", $idParam);                        
                        return $this->db->get('ibadah')->row();      
                    break;
                    
                    case "dosemalam":
                        $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                        $this->db->where("(ibadah.gkii_sesi_id='sesi_6')");                       
                        $this->db->where("ibadah.id_ibadah", $idParam);                        
                        return $this->db->get('ibadah')->row();      
                    break;
                    
                    case "doarantai":
                           $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                           $this->db->where("(ibadah.gkii_sesi_id='sesi_7')");                       
                           $this->db->where("ibadah.id_ibadah", $idParam);                        
                           return $this->db->get('ibadah')->row();      
                    break;
                    
                    case "doakeliling":
                           $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                           $this->db->where("(ibadah.gkii_sesi_id='sesi_8')");                       
                           $this->db->where("ibadah.id_ibadah", $idParam);                        
                           return $this->db->get('ibadah')->row();    
                    break;
                    
                    case "mentoring":
                       $this->db->join('gkii_sesi_ibadah', 'gkii_sesi_ibadah.gkii_sesi_id = ibadah.gkii_sesi_id');
                       $this->db->where("(ibadah.gkii_sesi_id='sesi_9')"); 
                       
                       $this->db->where("gkii_sesi_ibadah.id_ibadah", $idParam);                        
                       return $this->db->get('ibadah')->result();     
                    break;

                   

                }

            }

            


    }

    //=========================================

    public function recordVisitorAdmin($data=array()){

            $this->db->insert('gkii_visitor', $data);
            
    }
    
    public function recordTataIbadah($data=array()){

            $this->db->insert('ibadah', $data);
            
    }

    public function recordSiePelayanan($data=array()){

            $this->db->insert('seksi_pelayanan', $data);
            
    }




    public function updateProfilNavigation($kategori,$data=array()){

            $this->db->where('kategori', trim($kategori));
            $this->db->update('profil', $data);
            
            

    }

    public function updateJadwalKegiatan($paramID, $data= array()){
     
            $this->db->where('id_ibadah', trim($paramID));
            $this->db->update('ibadah', $data);
    }

    public function loadSesiIbadah(){
                            
            $this->db->where("(gkii_sesi_id='sesi_1' OR gkii_sesi_id='sesi_2' OR gkii_sesi_id='sesi_3')");
            return $this->db->get('gkii_sesi_ibadah')->result();
    }


    public function authBool($username, $password){

            $this->db->where("username", trim($username));
            $this->db->where("password", $password);             
            
                             

            return count($this->db->get('admin')->result());
    }

    public function authAdmin($username, $password){

        $this->db->where("username", trim($username));
        $this->db->where("password", $password);
        return $this->db->get('admin')->row();            

    }



}

/* End of file ModelName.php */


?>