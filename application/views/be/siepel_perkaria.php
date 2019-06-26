<section class="content-header">
    <h1>Sie Pelayanan</h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-users"></i> Sie Pelayanan</a></li>
        <li class="active">Perkaria</i>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Sie Pelayanan Perkaria</h3>
            </div>
            <div class="box-body">
                
                <div class="col-sm-2">
                  <div class="form-group">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i>  Tambah Data</button>

                   <br>
                  </div>
                </div><br><br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>            
                <tr>
                  <th>No.Id</th>
                  <th>Isi</th>
                 
                  <th>Aksi</th> 
                </tr>
                </thead>
                <tbody>


            <tr>
                <td>21</td>
                <td><p><em>Kegiatan belajar kini tidak hanya dilakukan di dalam kelas.&nbsp;</em>Proses pembelajaran kini bisa dilakukan secara&nbsp;<em>online.&nbsp;</em>Sejumlah situs menyediakan program pembelajaran&nbsp;<em>online,&nbsp;</em>mulai dari yang berbayar hingga ada yang gratis. Kebebasan memilih mata pelajaran, serta kegiatan belajar yang bisa dilakukan kapan pun adalah kelebihan dari sistem pembelajaran&nbsp;<em>online&nbsp;</em>ini.&nbsp;<em>Kini, kegiatan belajar pun bisa dilakukan secara&nbsp;</em>online.</p>
</td>
               
             
              <td>
                <a href="seksi_pelayanan_tambah_perkaria.php?id_seksi_pelayanan=21" class="btn btn-info"><i class="fa fa-edit"></i>Ubah</a>
                <a href="seksi_pelayanan_perkaria_hapus.php?id_seksi_pelayanan=21" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-delete"></i>Hapus</a>
                
              </td>

            </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</section>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalPerkariaID">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Perkaria</h3>
            <hr>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form >                
              <div class="form-group">
                <label for="message-text" class="col-form-label">Isi:</label>
                <textarea type="text" name="inputProfileSejarah"   id="inputIsi" class="form-control with-border" cols="100"  rows="10"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" id="btnSubmit">Submit</button>
          </div>


    </div>
  </div>
</div>