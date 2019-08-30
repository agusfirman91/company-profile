<html>
<head>
	<title>File Upload System Script - CodeIgniter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 
     <!-- Optional theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
     <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br/>
    <?php echo $error; ?>
    <div class="container">
        <div class="col-sm-4 col-md-offset-4">
        <h4>Upload dengan Codeigniter dan Ajax</h4>
            <form class="form-horizontal" id="submit">
                <div class="form-group">
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
                <div class="form-group">
                    <input type="file" name="file">
                </div>
 
                <div class="form-group">
                    <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                </div>
            </form>   
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
 
        $('#submit').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>cms/upload/do_upload',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Berhasil.");
                   }
                 });
            });
         
 
    });
     
</script>
</html>