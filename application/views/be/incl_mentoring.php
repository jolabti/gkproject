<section class="content-header">
 
      <ol class="breadcrumb">
        
        <li><a><i class="fa fa-calendar"></i>Jadwal Kegiatan</a></li>
        <li class="active">Mentoring</i>
          <!-- <li class="active">Ubah Data</i> -->
      </ol>
</section>


<section class="content">
          <!-- Info boxes -->
          <div class="row">
             <div class="col-sm-12">

          <div class="box box-primary">
             <div class="box-header with-border">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="inputTanggal" class="col-sm-2 control-label">Tanggal</label>
                        <div  class="col-sm-4">
                        <div class="input-group">
                           <input type="date" name="tanggal" value="" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required>
                           <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                        </div><!-- /.input group -->
                      </div>
                     </div>
                  
               

                      <div class="form-group">
                        <label for="inputJam" class="col-sm-2 control-label">Jam</label>
                        <div class="col-sm-10">
                          <input type="text" name="jam" value="" class="form-control" id="inputJam" placeholder="Jam" required>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="inputPembicara" class="col-sm-2 control-label"> Pembicara</label>
                        <div class="col-sm-10">
                          <input type="text" name="pembicara" value="" class="form-control" id="inputPembicara" placeholder=" pembicara" required>
                        </div>
                      </div>

                                 


                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="right">
                          <button type="reset" class="btn btn-danger" onclick="history.back()">Batal</button>

                          <input type="hidden" value="" name="id_doa_cek" />
                          <button type="submit" name="save" class="btn btn-primary" >Simpan</button>


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
                    Start creating your amazing application!
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