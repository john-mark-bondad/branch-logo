
<script type="text/javascript">

/* Start your Javascript Code Here */


function UploadFile(){
$('#fileupload').upload(URL+"index.php/acctload/upload_api",{uploadname:"fileupload"},function(success){ console.log(success);
var n=JSON.parse(success);
if(n.msg==""){
$('#form_fileid').val(n.fileid);
$("#imgcont").html("<img src='"+URL+""+n.location+"' style='width:30%;'>");



 }else { swal("Error",n.msg,"error");    }
   });  
}


function reset_image(){
$('#form_fileid').val("");
$('#fileupload').val("");
$('#imgcont').html("");
}







</script>
