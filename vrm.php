<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    </style>
</head>
<body>
<div class="container_fluid">

<form method="post" action="back.php" enctype="multipart/form-data">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> -->
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-3 mb-3">
              <div class="card">
                <div class="card-body">
                
                  <div class="form-group">
    <br><div class="container_fluid">
  
  <div class=" imgUp" >
    <div class="imagePreview"></div>
<label class="btn btn-primary">
										    		Choose	Profile Picture<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="profile">
				</label>
  </div><!-- col-2 -->
 
 <!-- row -->
</div>
    </div>
    <div class="form-group">
    <br><div class="container">
  
  <div class=" imgUp" >
    <div class="imagePreview"></div>
<label class="btn btn-primary">
										    	Choose ID Picture<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="idfile">
				</label>
  </div><!-- col-2 -->
 
 <!-- row -->
</div>
    </div>
                
                </div>
              </div>
        
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter First Name" name="fname">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Last Name" name="lname">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
      <label for="email">Identification Type:</label>
   <select name="type" id="" class="form-control">
   <option value="">...</option>
   <option value="Demo">Demo</option>

   </select>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="form-group">
      <label for="email">ID Number:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter id Number" name="id_number">
    </div>  </div>
    <div class="col-md-4">
    <div class="form-group">
      <label for="email">SS Number:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter SS Number" name="s_num">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">Company Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Company Name" name="c_name">
    </div>
    </div>
  

    <div class="col-md-6">
    <div class="form-group">
      <label for="email">Mobile Number:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter Mobile Number" name="c_number">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
      <label for="email">Address 1:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Address 1" name="adr1">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
      <label for="email">Address 2:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Address 2" name="adr2">
    </div>
    </div>
   
    
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">City:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter City" name="cty">
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">State:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter State" name="ste">
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">Zip Code:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Zip Code" name="zip">
    </div>
   
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">Country:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Country" name="con">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">G-mail E-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Gmail Email" name="g_email">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">G-mail Password:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Gmail Password Name" name="g_pass">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">FB Login:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter FB Login" name="fb_login">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">FB Password:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter FB Password" name="fb_pass">
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">VM ID:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM ID" name="vm_id">
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">VM VPN IP:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM VPN IP" name="vm_ip">
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">VM VPN Login:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM VPN Login" name="vm_log">
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
      <label for="email">VM VPN Password:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM VPN Password" name="vm_pass">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
      <label for="email">VM RDP URL:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM RDP URL" name="rdp_url">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
      <label for="email">VM RDP Login:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM RDP Login" name="rdp_login">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
      <label for="email">VM RDP Password:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter VM RDP Password" name="rdp_pass">
    </div>
    </div>
   
    <div class="col-md-12" align="right">
    <div class="form-group">
      <input type="submit" class="btn btn-primary" style="margin-top:30px;">
    </div>
    </div> 
    </div></div>
                </div>
              </div>

          



            </div>
          </div>
          </form>
        </div>
    </div>   
</body>
</html>
<script>
$(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>