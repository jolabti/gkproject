<section class="content-header" id="inputPageDoaTungu">
 
      <ol class="breadcrumb">
        <li><a><i class="fa fa-calendar"></i>Jadwal Kegiatan</a></li>
        <li class="active">Doa Tungku</i>
          <!-- <li class="active">Ubah Data</i> -->
      </ol>
    </section>


<section class="content">
          <!-- Info boxes -->
          <div class="row">
             <div class="col-sm-12">

          <div class="box box-primary">
             <div class="box-header with-border">
             <h3 class="box-title">Doa Tungku</h3>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="inputTanggal" class="col-sm-2 control-label">Tanggal</label>
                        <div  class="col-sm-4">
                        <div class="input-group">
                           <input type="date" name="tanggal" id="inputDateIbadah"  class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required>
                           <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                        </div><!-- /.input group -->
                      </div>
                     </div>
                  
               

                      <div class="form-group">
                        <label for="inputJam" class="col-sm-2 control-label">Jam</label>
                        <div class="col-sm-10">
                          <input type="time" name="jam" class="form-control" id="inputJam" placeholder="Jam" required>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="inputPemimpinDoa" class="col-sm-2 control-label">Pemimpin Doa</label>
                        <div class="col-sm-10">
                          <input type="text" name="pemimpin_doa"  class="form-control" id="inputPemimpinDoa" placeholder="Pemimpin Doa" required>
                        </div>
                      </div>

                                 


                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="right">
                          <button type="reset" class="btn btn-danger" onclick="history.back()">Batal</button>

                          <input type="hidden" value="" name="id_doa_cek" />
                          <a href="#" class="btn btn-primary" id="btnDotungku">Simpan</a>                          


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
                    <table class="table" id= "records_table_doatungku">
                    
                        <tr>
                          <th>Tanggal - Sesi</th>
                          <th>Pelayan Firman</th>                           
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