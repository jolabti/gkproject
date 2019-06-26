<section class="content" id="inputPageIbadah">
          <!-- Info boxes -->
          <div class="row">
             <div class="col-sm-12">

             

          <div class="box box-primary">
             <div class="box-header with-border">
                <h3 class="box-title">Tata Ibadah</h3>

                <form class="form-horizontal" method="post" enctype="multipart/form-data" id="formGlobal">

                    <div class="form-group">
                        <label for="inputTanggal" class="col-sm-2 control-label">Tanggal</label>
                        <div  class="col-sm-4">
                        <div class="input-group">
                           <input type="date" name="tanggal" value="" id="inputDateIbadah" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask >
                           <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                        </div><!-- /.input group -->
                      </div>
                     </div>
                  
               

                      


                       <div class="form-group">
                        <label for="inputPelayanFirman" class="col-sm-2 control-label">Sesi Ibadah Raya</label>
                        <div class="col-sm-10">
                           <select name="" id="inputNamaSesi" class="form-control">
                                  <?php foreach($sessionsIbadah as $sesi) { ?>  
                                    
                                            <option value="<?= $sesi->gkii_sesi_id;?>"><?= $sesi->gkii_sesi_name." ".$sesi->gkii_sesi_desc;?></option>

                                  <?php } ?>

                           </select>


                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputPelayanFirman" class="col-sm-2 control-label">Pelayan Firman</label>
                        <div class="col-sm-10">
                          <input type="text" name="pelayan_firman" value="" class="form-control" id="inputPelayanFirman" placeholder="Pelayan Firman">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="inputWL" class="col-sm-2 control-label">WL & Singer</label>
                        <div class="col-sm-10">
                          <input type="text" name="wl" value="" class="form-control" id="inputWl" placeholder=" Worship Leader dan Singer" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputWL" class="col-sm-2 control-label">Pemusik</label>
                        <div class="col-sm-10">
                          <input type="text" name="wl" value="" class="form-control" id="inputPemusik" placeholder="Pemusik" >
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <label for="inputSinger" class="col-sm-2 control-label">Singer</label>
                        <div class="col-sm-10">
                          <input type="text" name="singer" value="<br />
<b>Notice</b>:  Undefined variable: singer in <b>/Applications/XAMPP/xamppfiles/htdocs/skrip/admin/jadwal_kegiatan_tambah_ibadah_raya.php</b> on line <b>127</b><br />
" class="form-control" id="inputSinger" placeholder="Singer" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPemusik" class="col-sm-2 control-label">Pemusik</label>
                        <div class="col-sm-10">
                          <input type="text" name="pemusik" value="<br />
<b>Notice</b>:  Undefined variable: pemusik in <b>/Applications/XAMPP/xamppfiles/htdocs/skrip/admin/jadwal_kegiatan_tambah_ibadah_raya.php</b> on line <b>134</b><br />
" class="form-control" id="inputPemusik" placeholder="Pemusik" >
                        </div>
                      </div> -->

                      <div class="form-group">
                        <label for="inputDoaSyafaat" class="col-sm-2 control-label">Doa Syafaat</label>
                        <div class="col-sm-10">
                          <input type="text" name="doa_syafaat" value="" class="form-control" id="inputDoaSyafaat" placeholder="Doa Syafaat" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputKolektan" class="col-sm-2 control-label">Kolektan</label>
                        <div class="col-sm-10">
                          <input type="text" name="kolektan" value="" class="form-control" id="inputKolektan" placeholder="Kolektan" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPenerimaTamu" class="col-sm-2 control-label">Penerima Tamu</label>
                        <div class="col-sm-10">
                          <input type="text" name="penerima_tamu" value="" class="form-control" id="inputPenerimaTamu" placeholder="Penerima Tamu" >
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="inputPenerimaTamu" class="col-sm-2 control-label">Pelayan Orang Baru</label>
                        <div class="col-sm-10">
                          <input type="text" name="penerima_tamu" value="" class="form-control" id="inputPob" placeholder="Pelayan Orang Baru" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputLCD" class="col-sm-2 control-label">LCD</label>
                        <div class="col-sm-10">
                          <input type="text" name="lcd" value="" class="form-control" id="inputLCD" placeholder="LCD" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputSupervisor" class="col-sm-2 control-label">Supervisor</label>
                        <div class="col-sm-10">
                          <input type="text" name="supervisor" value="" class="form-control" id="inputSupervisor" placeholder="Supervisor" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputKebersihan" class="col-sm-2 control-label">Kebersihan</label>
                        <div class="col-sm-10">
                          <input type="text" name="kebersihan" value="" class="form-control" id="inputKebersihan" placeholder="Kebersihan" >
                        </div>
                      </div>
                                 


                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="right">
                          <button type="reset" class="btn btn-danger" onclick="history.back()">Batal</button>

                          <input type="hidden" value="" name="id_ibadah_cek" />
                          <!-- <button type="submit" name="save" class="btn btn-primary" >Simpan</button> -->                         
                          <a  class="btn btn-primary item_save" id="btnIbadah" value="Simpan"> Simpan</a>

                        </div>
                      </div>

                    </form>
                    </div>

                <!-- /.tab-pane -->
                 
              </div><!-- /.nav-tabs-custom -->
          </div><!-- /.row -->
        </section>

  <div class="row container-fluid">
      <section class="content">
        <!-- Default box -->
        <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Konten</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                            <i class="fa fa-minus"></i></button>
                            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button> -->
                        </div>
                </div>
                <!-- /.box-body -->            
                <div class="box-body">
                <table class="table" id= "records_table">
                 
                      <tr>
                        <th>Tanggal - Sesi</th>
                        <th>Pelayan Firman</th>
                        <th>Singer - WL</th>
                        <th>Pemusik</th>
                        <th>Action</th>
                      </tr>
                    
                     
                  </table>
                </div>            
                <!-- /.box-body -->
                
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        </section>
  </div>

