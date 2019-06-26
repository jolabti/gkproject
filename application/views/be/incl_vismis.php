<section class="content">

                <!-- Default box -->
                <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Visi & Misi</h3>
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
                                <section class="content">
                                    <!-- Info boxes -->
                                    <div class="row">
                                        <div class="col-sm-12">

                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                            
                                                <div class="form-group">
                                                    <label for="inputJudul" class="col-sm-2 control-label">Tuliskan Visi / Misi</label>
                                                    <div class="col-sm-10">
                                                    <textarea type="text" name="inputorProfilSection"   id="inputorProfilSection" class="form-control with-border" cols="100"  rows="10"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10" align="right">
                                                    <button type="reset" class="btn btn-danger" onclick="history.back()">Batal</button>

                                                    <input type="hidden" value="" name="id_tim_pelayanan_cek" />

                                                    <a name="save"  class="btn btn-primary"  id="btnVisMis">Perbaharui</a>
                                                     


                                                    </div>
                                                </div>

                                                </form>
                                                </div>

                                            <!-- /.tab-pane -->
                                            
                                        </div><!-- /.nav-tabs-custom -->
                                    </div><!-- /.row -->
                                </section>
                        </div>            
                        <!-- /.box-body -->
                        
                        <div class="box-footer">
                            <?php 
                                
                                echo date('l, F jS, Y', strtotime(date('y-m-d')));
                            
                            ?>
                        </div>
                        <!-- /.box-footer-->
                </div>
                <!-- /.box -->
        </section>
        
        <section class="content">

                <!-- Default box -->
                <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Data Visi & Misi</h3>
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
        <!-- /.content -->