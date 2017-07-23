
<head>
<title>Subir archivos al servidor por medio de AJAX, PHP, JQuery.</title>
<!--  ----------------------------------------------INPUT FILE------------------------------------------------------------ -->
<script language="javascript" src="../jquery/jquery-1.7.1.min.js"></script>
<script language="javascript" src="../ajax/AjaxUpload.2.0.min.js"></script>
<script language="javascript">
$(document).ready(function(){
	
	//$("#upload_button").click(function(evento){
	var button = $('#upload_button'), interval;
	var resultados = document.getElementById("resultados");
	var lista = document.getElementById("lista");
	
	//function confirmar(){ 



	new AjaxUpload('#upload_button', {
        action: '../controlador/controlador.php',
		onSubmit : function(file , ext){
		if (! (ext && /^(jpg|png|jpeg|gif|rar|doc|zip|ppt|docx|pptx|txt|html|mp3|wma|xls|xlsx|pdf)$/.test(ext))){
			// extensiones permitidas
			alert('Error, Solo se permiten archivos con extension:\n jpg, png, jpeg, gif, rar, doc, zip, ppt, docx, pptx, txt, html, mp3, wma, xls, xlsx, pdf');		
			return false;
		} else {
			confirmar=confirm("Estas seguro de subir el archivo"); 
		if (confirmar) {
			$("#resultados").css("display", "block");			
				resultados.innerHTML = '<img src="../img/ajax-loader.gif" />';
				this.disable();
		}else{
			alert("Has cancelado subir el archivo : "+file);
			return false;		
		}						
		}		
		},
		onComplete: function(file, response){
			resultados.innerHTML = '';
			resultados.innerHTML = file;			
			this.enable();				
		}	
	});	
	//});
});
</script>
<!--  ---------------------------------------------------------------------------------------------------------- -->
</head>
<body>
	<form method="post" action="" >     
    <center>
    <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif"><b><i>
    Subir archivos al servidor por medio de AJAX, PHP y JQuery.</i></b></font>	    
    <br />
    <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif">Autor: codigoweblibre.comli.com</font>
    <br /><br />   
    <input type="button"  id="upload_button" value="Adjuntar Archivo" /> 
    <div id="upload_button" align="center"><!--Cargar Imagen--></div>
    <div id="resultados"></div><ul id="lista"></ul>
	<div align="center">Para mas tutoriales visita: 
    	<a href="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>" target="_blank"><?php echo $_SERVER['SERVER_NAME']; ?></a> y suscribete para recibir a tu email los ultimos tutoriales y ejemplos.<br /><br />
        Nota: Si no te sube archivos, lee el archivo de texto "Leeme Importante", que viene en el .rar que descargaste.
        </div>
        </center>
    </form>              
</body>
</html>