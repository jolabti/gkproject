
       
       <section class="content">
               <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa ion-ios-person-outline"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Jumlah Pengunjung</span>
                            <span class="info-box-number">100 K</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <div class="info-box">
                            <span class="info-box-icon bg-black"><i class="fa  fa-columns"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Jumlah Berita</span>
                            <span class="info-box-number">20<small></small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                </div>

            
            
                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-file-movie-o"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Jumlah Kegiatan</span>
                            <span class="info-box-number">20 </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Total Persembahan</span>
                            <span class="info-box-number">Rp 15.000.000<small></small></span>
                            <span class="info-box-text"><small>5-5-2019</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                </div>
                
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-purple"><i class="fa fa-calendar-times-o"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Domain & Hosting Expired</span>
                            <span class="info-box-text"><b>Minggu,<small>5 Januari 2021</small></b></span>
                            <span class="info-box-text"></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Jemaat Berulang Tahun</span>
                            <span class="info-box-number">100<small></small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                </div>
                
                 


              </div>
       </section>
    
       <!-- Limit of Dashboard Global Information -->

       <?php if ($flag=="main"){ ?>
       
        <!-- Main content -->        
            <?php $this->load->view('be/incl_main');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="struktur"){ ?>
     
            <!-- Main content -->        
            <?php $this->load->view('be/incl_strukorg');?>
           <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="visimisi"){ ?>
       <!-- Main content -->        
        <?php $this->load->view('be/incl_vismis');?>
       <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="sejarah"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_sejarah');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="ibadah"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_tata_ibadah');?>
        <!-- Main content -->        
        
       <?php } ?>      
       
       
       <?php if ($flag=="dopus"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_doa_puasa');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="dotungku"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_doa_tungku');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="dosemalam"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_doa_semalaman');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="dorantai"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_doa_rantai');?>
        <!-- Main content -->        
        
       <?php } ?>
       
        <?php if ($flag=="doling"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_doa_keliling');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="mentoring"){ ?>

        <!-- Main content -->        
            <?php $this->load->view('be/incl_doa_keliling');?>
        <!-- Main content -->        
        
       <?php } ?>



       
       <?php if ($flag=="nodata"){ ?>
      
        <!-- Main content -->        
            <?php $this->load->view('errors/incl_notfound');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="openingscreen"){ ?>
      
        <!-- Main content -->        
            <?php $this->load->view('be/incl_opening_admin');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       
        <?php if ($flag=="gerakan"){ ?>
      
        <!-- Main content -->        
            <?php $this->load->view('be/incl_gerakan');?>
        <!-- Main content -->        
        
       <?php } ?>
       
         <!-- Seksi Pelayanan -->
      
       <?php if ($flag=="siepel-perkaria"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_perkaria');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="siepel-perkauan"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_perkauan');?>
        <!-- Main content -->        
        
       <?php } ?>
      
      
       <?php if ($flag=="siepel-pemuda"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_pemuda');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="siepel-anak-remaja"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_anak_remaja');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="siepel-tata-ibadah"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_tata_ibadah');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="siepel-misi"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_misi');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="siepel-doa"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_doa');?>
        <!-- Main content -->        
        
       <?php } ?>
       
       <?php if ($flag=="siepel-konseling"){ ?>
      
        <!-- Main content -->                 
            <?php $this->load->view('be/siepel_konseling');?>
        <!-- Main content -->        
        
       <?php } ?>

         <!-- Seksi Pelayanan closed -->

        


      

    

  </div>
  <!-- /.content-wrapper -->