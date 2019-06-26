

  var globalBool=false;
  var globalID="";
  var base_url = 'http://localhost/panelgkii/index.php/welcome/';

  $(document).ready(function(){
        
         var base_media = 'http://localhost/panelgkii/assets/gluster/';
         
      
         uploadajax(base_url,"");          

         if($("#inputProfileSejarah").length){
                console.log("ipf detected");
                webLoadContent(base_url,"mysejarah");
         }

         if($("#inputorProfilSection").length){

                webLoadContent(base_url,"myvisimisi");
         }
         if($("#inputor5Gerakan").length){

                webLoadContent(base_url,"mygerakan");
         }
        
         if($("#inputDateIbadah").length){

                webLoadContent(base_url,"ibadah");
         }

         if($("#inputPageDoaTungu").length){

                webLoadContent(base_url,"doatungku");
         }
        
         if($("#inputPageDoaPuasa").length){

                webLoadContent(base_url,"dopus");
         }
         
         if($("#inputPageDoaSemalaman").length){

                 webLoadContent(base_url,"dosemalam");
         }
         
         if($("#inputPageDoaRantai").length){

                 webLoadContent(base_url,"doarantai");
         }
         
         if($("#inputPageDoaKeliling").length){

                 webLoadContent(base_url,"doakeliling");
         }

 
         $('body').on('click','.item_edit',function(){
                    // alert("Apakah ingin mengubah data ? ");
                    //alert();
                    globalBool=true;
                    var idGet = $(this).attr('id');



                    globalID = idGet;
                    
                    
                    if($("#inputPageIbadah").length){
                       
                        webEditContent(base_url,"ibadah",idGet);

                    }

                    else if($("#inputPageDoaTungu").length){
                    
                        webEditContent(base_url,"doatungku",idGet);
                    }
                    
                    else if($("#inputPageDoaPuasa").length){
                    
                        webEditContent(base_url,"doapuasa",idGet);
                    }
                    
                    else if($("#inputPageDoaSemalaman").length){
                    
                        webEditContent(base_url,"dosemalam",idGet);
                    }
                    
                    else if($("#inputPageDoaRantai").length){
                    
                        webEditContent(base_url,"doarantai",idGet);
                    }
                    
                    else if($("#inputPageDoaKeliling").length){
                    
                        webEditContent(base_url,"doakeliling",idGet);
                    }

                    uploadajax(base_url,idGet);
        }); 


        webSiePel(); // function handling sie pelayanan

      
         

  }); //end of document



 function webSiePel(){


    $('body').on('click','#btnSubmit',function(){

        
        if($("#inputIsi").val() == ""){

            webToast("error", "Data Input masih ada yang belum terisi");

        }

        else{
            if($("#modalPerkauanID").length){

                webInsertSiePel("perkauan");
                

            }
            
            if($("#modalPerkariaID").length){

                    webInsertSiePel("perkaria");
                    

            }
            
            if($("#modalTataIbadahID").length){

                    webInsertSiePel("tata-ibadah");
                    

            }
            
            if($("#modalPemudaID").length){

                    webInsertSiePel("pemuda");
                    

            }
            
            if($("#modalMisiID").length){

                    webInsertSiePel("misi");               

            }

            if($("#modalDoaID").length){

                    webInsertSiePel("doa");               

            }

            if($("#modalKonselingID").length){

                    webInsertSiePel("konseling");               

            }
            
            if($("#modalAnakRemajaID").length){

                    webInsertSiePel("anak-remaja");               

            }
        }

        




    });

 }


 function webInsertSiePel($paramflag=""){

            $.ajax({
                type: "POST",
                url: base_url + "addsipel/"+$paramflag,
                data: {paramIsi: $("#inputIsi").val()},
                dataType: "json",
                cache:false,
                success:
                    function(data){
                        //alert(data);  //as a debugging message.
                    // webToast("success", "Updated");
                        webToast("success", "Data berhasil ditambahkan");
                        console.log(data);
                        location.reload(true);
                    }
            ,
            error: function(e){
                    webToast("error", data.message);
            }
            });// you have missed this bracket

 }

 function webEditContent(base_url, paramget="", paramId=""){


            var name="";
          
            $.ajax({
                type: 'GET',
                url: base_url+"loader/"+paramget+'/'+paramId,
                // data: { get_param: 'value' },
                cache:false,
                success: function (data) {

                 
                     switch(paramget){

                        case "ibadah":
                            var obj = "";
                            obj = JSON.parse(data);                     
                            console.log("paramresponse", obj);
                                        //$("#inputNamaSesi").val();
                            $("#inputDateIbadah").val(obj.tanggal);
                            $("#inputPelayanFirman").val(obj.pelayan_firman);
                            $("#inputWl").val(obj.singer);
                            $("#inputPemusik").val(obj.pemusik);
                            $("#inputDoaSyafaat").val(obj.doa_syafaat);
                            $("#inputKolektan").val(obj.kolektan);
                            $("#inputPenerimaTamu").val(obj.penerima_tamu);
                            $("#inputLCD").val(obj.lcd);
                            $("#inputSupervisor").val(obj.supervisor);
                            $("#inputKebersihan").val(obj.kebersihan);
                            $("#inputPob").val(obj.pob);      
                            
                            
                        
                            if($("#btnIbadah").length){
                                $("#btnIbadah").html("Update");
                                $('#btnIbadah').attr("id", "dvDemoNew");
                                globalID = paramId;


                                console.log("trace_globeid"+" "+ globalID );
                            // $("#btnIbadah").prop('id', 'btnUpdate'); //versions newer than 1.6
                            }
                                         
                        break;

                        case "doatungku":
                            var obj = "";
                            obj = JSON.parse(data);                     
                            console.log("paramresponse", obj);
                            $("#inputDateIbadah").val(obj.tanggal);
                            $("#inputPemimpinDoa").val(obj.pelayan_firman);
                            $("#inputJam").val(obj.jam);
                        
                            
                            //btnDotungku

                            if($("#btnDotungku").length){
                            
                                $("#btnDotungku").html("Update");
                            
                                globalID = paramId;


                                console.log("trace_globeid"+" "+ globalID );
                            // $("#btnIbadah").prop('id', 'btnUpdate'); //versions newer than 1.6

                            }          
                        break;
                        
                        
                        case "doapuasa":
                            var obj = "";
                            obj = JSON.parse(data);                     
                            console.log("paramresponse", obj);
                            console.log("paramurl ==> ", base_url+"loader/"+paramget+'/'+paramId);
                           
                            $("#inputDateIbadah").val(obj.tanggal);
                            $("#inputJam").val(obj.jam);
                            $("#inputPelayanFirman").val(obj.pelayan_firman);
                            $("#inputPemimpinDoa").val(obj.pelayan_firman);
                            $("#inputPemusik").val(obj.pemusik);
                             
                             
                             
                            
                            
                            //btnDotungku

                            if($("#btnDopus").length){
                            
                                $("#btnDopus").html("Update");
                            
                                globalID = paramId;


                                console.log("trace_globeid"+" "+ globalID );
                            // $("#btnIbadah").prop('id', 'btnUpdate'); //versions newer than 1.6

                            }          
                        break;
                        
                        
                        case "dosemalam":
                            var obj = "";
                            obj = JSON.parse(data);                     
                            console.log("paramresponse", obj);
                            console.log("paramurl ==> ", base_url+"loader/"+paramget+'/'+paramId);
                           
                            $("#inputDateIbadah").val(obj.tanggal);
                            $("#inputJam").val(obj.jam);
                            $("#inputPelayanFirman").val(obj.pelayan_firman);
                            $("#inputPemimpinDoa").val(obj.pelayan_firman);
                            $("#inputPemusik").val(obj.pemusik);
                             
                             
                             
                            
                            
                            //btnDotungku

                            if($("#btnDosemalam").length){
                            
                                $("#btnDosemalam").html("Update");
                            
                                globalID = paramId;


                                console.log("trace_globeid"+" "+ globalID );
                            // $("#btnIbadah").prop('id', 'btnUpdate'); //versions newer than 1.6

                            }          
                        break;
                        
                        case "doarantai":
                            var obj = "";
                            obj = JSON.parse(data);                     
                            console.log("paramresponse", obj);
                            console.log("paramurl ==> ", base_url+"loader/"+paramget+'/'+paramId);
                           
                            $("#inputDateIbadah").val(obj.tanggal);
                            $("#inputJam").val(obj.jam);                     
                            $("#inputPemimpinDoa").val(obj.doa_syafaat);
                        
                             
                             
                            
                            
                            //btnDotungku

                            if($("#btnDorantai").length){
                            
                                $("#btnDorantai").html("Update");
                            
                                globalID = paramId;


                                console.log("trace_globeid"+" "+ globalID );
                            // $("#btnIbadah").prop('id', 'btnUpdate'); //versions newer than 1.6

                            }          
                        break;
                        
                        case "doakeliling":
                            
                            var obj = "";
                            obj = JSON.parse(data);                     
                            console.log("paramresponse", obj);
                            console.log("paramurl ==> ", base_url+"loader/"+paramget+'/'+paramId);
                           
                            $("#inputDateIbadah").val(obj.tanggal);
                            $("#inputJam").val(obj.jam);                     
                            $("#inputPengemudi").val(obj.pengemudi);                    
                            
                            //btnDotungku

                            if($("#btnDoling").length){                            
                                $("#btnDoling").html("Update");                            
                                globalID = paramId;
                                console.log("trace_globeid"+" "+ globalID );
                            // $("#btnIbadah").prop('id', 'btnUpdate'); //versions newer than 1.6

                            }          
                        break;

                     }


                    

                     
                
                     


                }
                
            
            }) ;

  }





 function webLoadContent(base_url, paramget=""){
         console.log("paramget" +"===>" + paramget);
         var base_media = 'http://localhost/panelgkii/assets/gluster/';
         var globArr = "";
         var name="";
            $.ajax({
                type: 'GET',
                url: base_url+"loader/"+paramget,
                // data: { get_param: 'value' },
                cache:false,
                success: function (data) {
                    names = data;
                    console.log("wlc ===> "+names);

                    if(paramget=="mysejarah"){
                        var obj = JSON.parse(names);
                        console.log("mymymymy ====>" + obj.isi);
                        console.log("mymymymy ====>" + obj.isi);
                        document.getElementById("inputProfileSejarah").value = obj.isi;

                        if(obj.isi.length>0){

                            document.getElementById("id_sejarah_thumnail").src = base_media+ obj.file_path;
                            document.getElementById("id_sejarah_thumnail").width = 500;
                            document.getElementById("id_sejarah_thumnail").height = 300;


                        }
                        else{

                            document.getElementById("plotimage").remove;
                        }
                    }
                    else if(paramget=="myvisimisi"){
                        var obj = JSON.parse(names);
                        console.log("mymymymy ====>" + obj.isi);
                        document.getElementById("inputorProfilSection").value = obj.isi;
                    }

                    else if(paramget=="mygerakan"){
                        var obj = JSON.parse(names);
                        console.log("mymymymy ====>" + obj.isi);
                        document.getElementById("inputor5Gerakan").value = obj.isi;
                    }

                    else if (paramget=="ibadah"){
                        var trHTML = '';
                        var obj = JSON.parse(names);
                        console.log("paramlenparam==>" + obj.length);

                      
                        $.each(obj, function (i, item) {
                            
                            
                            trHTML += '<tr>'
                                     +
                                     '<td>'
                                     +
                                     item.tanggal +"   "+ " [ "+item.gkii_sesi_desc +" ]" 
                                     + '</td>'
                                     
                                     +
                                     '<td>'
                                     +
                                     item.pelayan_firman  
                                     + '</td>'


                                     +
                                     '<td>'
                                     +
                                     item.singer   
                                     + '</td>'
                                     
                                     
                                     +
                                     '<td>'
                                     +
                                     item.pemusik 
                                     + '</td>'
                                     
                                     
                                     +
                                     '<td>'
                                     +

                                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+item.id_ibadah+'"  >Edit</a>'+' '
                                     +
                                     '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data-row_code="'+item.id_ibadah+'">Hapus</a>'                                     
                                      
                                     + '</td>'
                                     



                                     +
                                     '</tr>';
                                         
                       
                        });
                        $('#records_table').append(trHTML);
                        
                    }
                    
                    
                    else if (paramget=="dosemalam"){


                            console.log("mydosemalam");

                            var trHTML = '';
                            var obj = JSON.parse(names);   
                      
                        $.each(obj, function (i, item) {
                            
                            
                            trHTML += '<tr>'
                                     +
                                     '<td>'
                                     +
                                     item.tanggal   
                                     + '</td>'
                                     
                                     +
                                     '<td>'
                                     +
                                     item.pelayan_firman  
                                     + '</td>'


                                     +
                                      
                                     
                                    
                                     '<td>'
                                     +

                                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+item.id_ibadah+'"  >Edit</a>'+' '
                                     +
                                     '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data-row_code="'+item.id_ibadah+'">Hapus</a>'                                     
                                      
                                     + '</td>'
                                     



                                     +
                                     '</tr>';
                                         
                       
                        });
                        $('#records_table_doasemalaman').append(trHTML);
                        
                    }
                    
                    
                    else if (paramget=="doarantai"){


                            console.log("doarantai-----");

                            var trHTML = '';
                            var obj = JSON.parse(names);   
                      
                        $.each(obj, function (i, item) {
                            
                            
                            trHTML += '<tr>'
                                     +
                                     '<td>'
                                     +
                                     item.tanggal   
                                     + '</td>'
                                     
                                     +
                                     '<td>'
                                     +
                                     item.doa_syafaat  
                                     + '</td>'


                                     +
                                      
                                     
                                    
                                     '<td>'
                                     +

                                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+item.id_ibadah+'"  >Edit</a>'+' '
                                     +
                                     '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data-row_code="'+item.id_ibadah+'">Hapus</a>'                                     
                                      
                                     + '</td>'
                                     



                                     +
                                     '</tr>';
                                         
                       
                        });
                        $('#records_table_doarantai').append(trHTML);

                        paramget="";
                        
                    }
                    
                    
                    else if (paramget=="doakeliling"){


                            console.log("doakelilingggsss-----");

                            var trHTML = '';
                            var obj = JSON.parse(names);   
                      
                        $.each(obj, function (i, item) {
                            
                            
                            trHTML += '<tr>'
                                     +
                                     '<td>'
                                     +
                                     item.tanggal   
                                     + '</td>'
                                     
                                     +
                                     '<td>'
                                     +
                                     item.pengemudi 
                                     + '</td>'


                                     +
                                      
                                     
                                    
                                     '<td>'
                                     +

                                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+item.id_ibadah+'"  >Edit</a>'+' '
                                     +
                                     '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data-row_code="'+item.id_ibadah+'">Hapus</a>'                                     
                                      
                                     + '</td>'
                                     



                                     +
                                     '</tr>';
                                         
                       
                        });
                        $('#records_table_doakeliling').append(trHTML);
                        
                    }


                    else if (paramget=="doatungku"){
                        var trHTML = '';
                        var obj = JSON.parse(names);
                        console.log("paramlenparam==>" + obj.length);


                        $.each(obj, function (i, item) {
                            
                            
                            trHTML += '<tr>'
                                     +
                                     '<td>'
                                     +
                                     item.tanggal  
                                     + '</td>'
                                     
                                     +
                                     '<td>'
                                     +
                                     item.pelayan_firman  
                                     + '</td>'                                 
                                     +
                                     '<td>'
                                     +

                                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+item.id_ibadah+'"  >Edit</a>'+' '
                                     +
                                     '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data-row_code="'+item.id_ibadah+'">Hapus</a>'                                     
                                      
                                     + '</td>'
                                     



                                     +
                                     '</tr>';
                                         
                       
                        });
                        $('#records_table_doatungku').append(trHTML);
                    
                    
                    }
                    
                    
                    else if (paramget=="dopus"){
                        var trHTML = '';
                        var obj = JSON.parse(names);
                        console.log("paramdopus==>" + obj.length);


                        $.each(obj, function (i, item) {
                            
                            
                            trHTML += '<tr>'
                                     +
                                     '<td>'
                                     +
                                     item.tanggal  
                                     + '</td>'
                                     
                                     +
                                     '<td>'
                                     +
                                     item.pelayan_firman  
                                     + '</td>'                                 
                                     +
                                     '<td>'
                                     +

                                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+item.id_ibadah+'"  >Edit</a>'+' '
                                     +
                                     '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data-row_code="'+item.id_ibadah+'">Hapus</a>'                                     
                                      
                                     + '</td>'
                                     



                                     +
                                     '</tr>';
                                         
                       
                        });
                        $('#records_table_dopus').append(trHTML);
                    
                    
                    }                            
                    
                    //$('#cand').html(data);
                }
            });
        
    }

 




 function webToast(typeMessage, message){

    Swal.fire({
        title: message,
        type: typeMessage,
        confirmButtonText: 'OK'

      },
      function(isConfirmed){

        if(isConfirmed){
           
            
                location.reload(); // then reload the page.(3)
          

        }
        
      });


    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'center',
    //     showConfirmButton: false,
    //     timer: 3000
    //   });
      
    //   Toast.fire({
    //     type: typeMessage,
    //     title: message
    //   });


    //   text: 'Do you want to continue',
 }

 function uploadajax(base_url,globalID){

        //var inputSejarah =  CKEDITOR.instances['inputProfilSejarah'].getData();
        console.log(base_url+$("#inputProfilSejarah").val());
        console.log("trace globalID inside"+" "+globalID);
        $("#btnSaveSejarah").click(function()
        {


                if($("#inputProfilSejarah").val()==""){

                    webToast("error", "Input Profile Sejarah Kosong");
                }

                
                else{


                    if(document.getElementById("image_file").files.length == 0){

                        $.ajax({
                            type: "POST",
                            url: base_url + "updateprofile/sejarah",
                            data: {txtupdated: $("#inputProfileSejarah").val()},
                            dataType: "json",
                            cache:false,
                            success:
                                function(data){
                                    //alert(data);  //as a debugging message.
                                   // webToast("success", "Updated");
                                    webToast("success", data.message);
                                    console.log(data);
                                    location.reload(true);
                                }
                           ,
                           error: function(e){
                                   webToast("error", data.message);
                           }
                         });// you have missed this bracket
                    }
                    else if(document.getElementById("image_file").files.length > 0){
                        //https://www.roytuts.com/ajax-file-upload-using-codeigniter-jquery/
                         console.log("image file not null.......");

                         var formData = new FormData($('#upload_form')[0]);

                         formData.append('image_file', $('#image_file')[0].files[0]);

                         formData.append('txtupdated', $('#inputProfileSejarah').val());

                         console.log("formdata..........."+formData);
 

                            $.ajax({
                                url: base_url+'updateprofile/sejarah',
                                type:"post",
                                // data:new FormData(this),
                                data:formData,
                                processData:false,
                                contentType:false,
                                cache:false,
                                async:false,
                                      beforeSend: function() {
                                        // $('.modal .ajax_data').prepend('<img src="' +
                                        //     base_url +
                                        //     '"asset/images/ajax-loader.gif" />');
                                        // //$(".modal .ajax_data").html("<pre>Hold on...</pre>");
                                        // $(".modal").modal("show");
                                      webToast("warning","Upload in progress");
                                },
                                success: function(msg) {
                                    // $(".modal .ajax_data").html("<pre>" + msg +
                                    //     "</pre>");
                                    // $('#close').hide();
                                    webToast("success","Upload suceed");
                                    location.reload(true);
                                },
                                error: function(err) {
                                    // $(".modal .ajax_data").html(
                                    //     "<pre>Sorry! Couldn't process your request.</pre>"
                                    // ); //
                                    // $('#done').hide();
                                    webToast("error","Upload Failed");
                                }

                            });
                    }


                 
                }

        });

        $("#btnVisMis").click(function()
        {


                if($("#inputorProfilSection").val()==""){

                    webToast("error", "Input Visi & Misi Kosong");
                }

                else{

                    $.ajax({
                        type: "POST",
                        url: base_url + "updateprofile/visi_misi",
                        data: {txtupdated: $("#inputorProfilSection").val()},
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                console.log(data);
                            }
                       ,
                       error: function(e){
                               webToast("error", data.message);
                       }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });

        $("#btnGerakkan").click(function()
        {


                if($("#inputor5Gerakan").val()==""){

                    webToast("error", "Form Gerakkan Belum Terisi ...");
                }

                else{

                    $.ajax({
                        type: "POST",
                        url: base_url + "updateprofile/gerakan",
                        data: {txtupdated: $("#inputor5Gerakan").val()},
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                console.log(data);
                            }
                       ,
                       error: function(e){
                               webToast("error", data.message);
                       }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });


        $("#btnIbadah").click(function()
        {
                var barbar = "anju";

                console.log("trace_Globalbool", globalBool);
              
                if($("#inputDateIbadah").val()==""){

                    webToast("error", "Form Ibadah Belum Terisi ...");
                }
                
                else if(globalBool==true){

                    console.log("trace_hit"+"  "+"====> Global Bool TRUE");                   

                    console.log("update daftar ibadah success");

                    $.ajax({
                        type: "POST",
                        url: base_url + "updateJakeg/ibadah/"+globalID,
                        data: {
                                // paramSesiID: $("#inputDateIbadah").val(),
                                 
                                paramSesiID: $("#inputNamaSesi").val(),
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPelayanFirman").val(),
                                paramSinger: $("#inputWl").val(),
                                paramPemusik: $("#inputPemusik").val(),
                                paramDoaSyafaat: $("#inputDoaSyafaat").val(),
                                paramKolektan: $("#inputKolektan").val(),
                                paramPenerimaTamu: $("#inputPenerimaTamu").val(),
                                paramLcd: $("#inputLCD").val(),
                                paramSupervisor: $("#inputSupervisor").val(),
                                paramKebersihan: $("#inputKebersihan").val(),
                                paramPob: $("#inputPob").val()
                                // paramJudul: $("#inputDateIbadah").val(),
                                // paramTempat: $("#inputDateIbadah").val()

                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                //webLoadContent(base_url,"ibadah")

                                location.reload(); 
                     
                                console.log(data);
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket

                    //$("input[type=text]").val("");
                }
                 
                
                else if(globalBool==false) {

                    console.log("trace_hit"+"  "+"====> Global Bool FALSE");

                    $.ajax({
                        type: "POST",
                        url: base_url + "addjakeg/ibadah",
                        data: {
                                // paramSesiID: $("#inputDateIbadah").val(),
                                 
                                paramSesiID: $("#inputNamaSesi").val(),
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPelayanFirman").val(),
                                paramSinger: $("#inputWl").val(),
                                paramPemusik: $("#inputPemusik").val(),
                                paramDoaSyafaat: $("#inputDoaSyafaat").val(),
                                paramKolektan: $("#inputKolektan").val(),
                                paramPenerimaTamu: $("#inputPenerimaTamu").val(),
                                paramLcd: $("#inputLCD").val(),
                                paramSupervisor: $("#inputSupervisor").val(),
                                paramKebersihan: $("#inputKebersihan").val(),
                                paramPob: $("#inputPob").val()
                                // paramJudul: $("#inputDateIbadah").val(),
                                // paramTempat: $("#inputDateIbadah").val()

                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                //webLoadContent(base_url,"ibadah")
                                console.log(data);
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("simpan daftar ibadah success");
                }

        });
        
        $("#btnDotungku").click(function()
        {


                if($("#inputDateIbadah").val()==""){

                    webToast("error", "Form Ibadah Belum Terisi ...");
                }

                else if(globalBool==false){

                    $.ajax({
                        type: "POST",
                        url: base_url + "addjakeg/doatungku",
                        data: {                         
                                paramSesiID: 'sesi_4',
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPemimpinDoa").val(),
                                paramJam: $("#inputJam").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);

                                location.reload();
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }
                
                else if(globalBool==true){

                    $.ajax({
                        type: "POST",
                        url: base_url + "updateJakeg/doatungku/"+globalID,
                        data: {                         
                                paramSesiID: 'sesi_4',
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPemimpinDoa").val(),
                                paramJam: $("#inputJam").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);
                                location.reload();
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });
        
        $("#btnDopus").click(function()
        {


                if($("#inputDateIbadah").val()==""){

                    webToast("error", "Form Ibadah Belum Terisi ...");
                }

                else if(globalBool==false){

                    $.ajax({
                        type: "POST",
                        url: base_url + "addjakeg/dopus",
                        data: {                         
                                paramSesiID: 'sesi_5',
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPelayanFirman").val(),
                                paramJam: $("#inputJam").val(),                              
                                paramPemusik: $("#inputPemusik").val(),                               
                                paramPemimpinDoa: $("#inputPemimpinDoa").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }
                
                
                else if(globalBool==true){

                    $.ajax({
                        type: "POST",
                        url: base_url + "updateJakeg/dopus/"+globalID,
                        data: {                         
                                paramSesiID: 'sesi_5',
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPelayanFirman").val(),
                                paramJam: $("#inputJam").val(),                              
                                paramPemusik: $("#inputPemusik").val(),                               
                                paramPemimpinDoa: $("#inputPemimpinDoa").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });
        
        $("#btnDosemalam").click(function()
        {


                if($("#inputDateIbadah").val()==""){

                    webToast("error", "Form Ibadah Belum Terisi ...");
                }

                else{

                    $.ajax({
                        type: "POST",
                        url: base_url + "addjakeg/dosemalam",
                        data: {                         
                                paramSesiID: 'sesi_6',
                                paramTanggal: $("#inputDateIbadah").val(),
                                paramPelayanFirman: $("#inputPelayanFirman").val(),
                                paramJam: $("#inputJam").val(),                              
                                paramPemusik: $("#inputPemusik").val(),                               
                                paramPemimpinDoa: $("#inputPemimpinDoa").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });
        
        
        $("#btnDorantai").click(function()
        {


                if($("#inputDateIbadah").val()==""){

                    webToast("error", "Form Ibadah Belum Terisi ...");
                }

                else{

                    $.ajax({
                        type: "POST",
                        url: base_url + "addjakeg/dorantai",
                        data: {                         
                                paramSesiID: 'sesi_7',
                                paramTanggal: $("#inputDateIbadah").val(),                                
                                paramJam: $("#inputJam").val(),                                                      
                                paramPemimpinDoa: $("#inputPemimpinDoa").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });
        
        $("#btnDoling").click(function()
        {

                if($("#inputDateIbadah").val()==""){

                    webToast("error", "Form Ibadah Belum Terisi ...");
                }

                else
                {
                    $.ajax({
                        type: "POST",
                        url: base_url + "addjakeg/doling",
                        data: {                         
                                paramSesiID: 'sesi_8',
                                paramTanggal: $("#inputDateIbadah").val(),                                
                                paramJam: $("#inputJam").val(),                                                      
                                paramPengemudi: $("#inputPengemudi").val()                               
                           
                              },
                        dataType: "json",
                        cache:false,
                        success:
                            function(data){
                                //alert(data);  //as a debugging message.
                               // webToast("success", "Updated");
                                webToast("success", data.message);
                                $("input[type=text]").val("");
                                console.log(data);
                              
                            }
                       ,
                       error:
                            function(e){
                               webToast("error", data.message);
                            }
                     });// you have missed this bracket


                    console.log("btn save sejarah clicked");
                }

        });
       //  webToast("success","Access Granted");
}



 /*
 success: function (response) {
        var trHTML = '';
        $.each(response, function (i, item) {
            trHTML += '<tr><td>' + item.rank + '</td><td>' + item.content + '</td><td>' + item.UID + '</td></tr>';
        });
        $('#records_table').append(trHTML);
    }
 */ 


