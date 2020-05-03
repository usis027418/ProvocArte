<?php if(!$_REQUEST["myaction"]=="dounzip"){ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Quick Installer</title>
<style type="text/css">
body, td {
	font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
	color: #4e4e4e;
	background:#fff;
	text-align:center;
}
.wrapper {
	text-align:left;
	background:#f4f6f5;
	padding:0px 0 20px;
	width:700px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin:30px auto;
}
.wrap {
	background:#ea433b;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	padding:5px;
	color:#fff;
}
.submit {
	border-top:1px solid #dbdbdb;
	padding-top:15px;
}
.submit input {
	margin-left:244px;
}
.indent {
	padding:16px 25px;
	border-top:3px solid #dfe1e0;
}
#message span{
	display: block;
}
#message .error{
	color: #f00;
}
#unzip_form.loader{
	background: url('data:image/gif;base64,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') no-repeat;
}
.sect {
	overflow:hidden;
	margin-bottom:10px;
	width:100%;
}
.label {
	width:234px;
	float:left;
	text-align:left;
	margin-right:10px;
	line-height:42px;
	text-indent:100px;
	cursor: pointer;
}
.field {
	width:350px;
	float:left;
}
.field span {
	font-size:10px
}
.css3button {
	cursor:pointer;
	font-family: Arial, Helvetica, sans-serif;
	font-weight:bold;
	font-size: 14px;
	color: #ffffff;
	padding: 10px 20px;
	background: -moz-linear-gradient(  top,  #54cbe9 0%,  #3790cf);
	background: -webkit-gradient(  linear, left top, left bottom,  from(#54cbe9),  to(#3790cf));
	border-radius: 18px;
	-moz-border-radius: 18px;
	-webkit-border-radius: 18px;
	border: 1px solid #ffffff;
	-moz-box-shadow:
 0px 0px 0px rgba(000, 000, 000, 0),  inset 1px 1px 2px rgba(255, 255, 255, 0.6);
	-webkit-box-shadow:
 0px 0px 0px rgba(000, 000, 000, 0),  inset 1px 1px 2px rgba(255, 255, 255, 0.6);
	text-shadow:
 1px 1px 0px rgba(000, 000, 000, 0.4),  0px 1px 0px rgba(255, 255, 255, 0.3);
	background:#54cbe9\9;
	outline: none !important;
}
.css3button[disabled]{
	opacity: .5;
	filter: alpha(opacity=50);
	cursor: not-allowed;
}
.css3input {
	font-size: 14px;
	color: #000000;
	padding: 10px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border: 1px solid #ccc;
	width:307px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	outline: none !important;
}
.p3 {
	padding:7px;
}
a {
	color: #000066;
	text-decoration: none;
}
.form_indent {
	padding-left:210px;
}
.small {
	font:normal 11px Arial, Helvetica, sans-serif
}
h1 {
	background:#ea433b;
	border-bottom:1px solid #be382f;
	-webkit-border-top-left-radius: 5px;
	-moz-border-top-left-radius: 5px;
	border-top-left-radius: 5px;
	-webkit-border-top-right-radius: 5px;
	-moz-border-top-right-radius: 5px;
	border-top-right-radius: 5px;
	text-indent:116px;
	color:#fff;
	font:bold 36px Arial, Helvetica, sans-serif;
	line-height:64px;
	margin:0;
	text-shadow:
 1px 2px 2px rgba(000, 000, 000, 0.4),  1px 2px 2px rgba(000, 000, 000, 0.3);
}
h1 div {
	border-bottom:1px solid #d23d36;
}
h1 div div {
	border-bottom:1px solid #e24137;
	height:64px;
}
</style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wrapper">
    <h1><div><div>Quick Installer</div></div></h1>
    <div class="indent">
        <form name="myform" id="unzip_form" method="post" action="<?php $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data">
            <div class="sect">
                <label for="zipfile" class="label"> Choose your zip file: </label>
                <div class="field">
                    <select name="zipfile" class="css3input" id="zipfile">
                        <option value="" selected>- Please choose -</option>
                        <?php
                        $fdir = opendir('./');
                        while($file=readdir($fdir)){
                            if(!is_file($file)) continue;
                            if(preg_match('/\.zip$/mis',$file)){
                                echo "<option value='$file'>$file</option>\r\n";
                            }
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="sect">
                <label for="todir" class="label"> Unzip to: </label>
                <div class="field">
                    <input name="todir" type="text" id="todir" value="" size="15" class="css3input">
                    <br>
                    <span>(Leave this field blank if you want to unzip into a current directory. Folder should be writable - 755 permissions)</span> </div>
            </div>
            <div class="sect submit">
                <input name="myaction" type="hidden" id="myaction" value="dounzip">
                <input type="submit" id="submit" name="Submit" class="css3button" value="Unzip" disabled>
                <a href="/" id="root" class="css3button">To ROOT</a>
            </div>
        </form>
        <div id="message"></div>
    </div>
</div>
<script>
	$(function(){
		$('#root').attr({href: window.location.href.replace('unzip.php','')})
		$('#zipfile').change(function(){
			if($(this).val().length){
				$('#submit').prop( "disabled", false );
			}
			else {
				$('#submit').prop( "disabled", true );
			}
		})
		$('#unzip_form').submit(function(event){
			value   = $(this).serializeArray();
			console.log(value[1].value);
	        $.ajax({
	            type   : 'POST',
	            data   : value,
	            beforeSend: function(){
	                $("#unzip_form")
	                .addClass("loader")
	            },
	            success: function (response) {
	                	console.log(response)
	                switch(response) {
	                    case 'ok':
	                        $("#unzip_form").
	                        removeClass("loader")
	                        if(!value[1].value.length){
								value[1].value = 'ROOT'
	                        }
	                        $('#message')
	                        .append("<span class='success'>Archive \""+value[0].value+"\" unzipped successfully to the \""+value[1].value+"\" directory</span>")
	                        $('#unzip_form').trigger('reset');
	                        $('#submit').prop( "disabled", true );
	                        break;
	                    default:
	                        $("#unzip_form")
	                        .removeClass("loader")
	                        $('#message')
	                        .append("<span class='error'>Oops... Something wrong. Archive \""+value[0].value+"\" doesn't unzipped.</span>")
	                        break;
	                }
	            }
	        });
			event.preventDefault();
		})
	})
</script>
</body>
</html>

            <?php }

else{

	set_time_limit(0);
	clearstatcache();

	if(!$_POST["todir"]) $_POST["todir"] = ".";

	$zip = new ZipArchive;
     $res = $zip->open($_POST["zipfile"]);
     if ($res === TRUE) {
         $zip->extractTo($_POST["todir"]);
         $zip->close();
         echo 'ok';
     } else {
         echo 'false';
     }
 }
?>