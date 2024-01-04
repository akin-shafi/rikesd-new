<!DOCTYPE html>
<html>
   <head>
     <title>Custom file upload in CKEditor with PHP</title>
     <!-- CKEditor JS -->
     <script src="ckeditor/ckeditor.js" type="text/javascript" ></script>
   </head>
   <body>

     <!-- Editor -->
     <textarea id='editor'></textarea>

     <!-- Script -->
     <script type="text/javascript">
     CKEDITOR.replace( 'editor', {
        height: 300,
        filebrowserUploadUrl: "ckeditor/ck_upload.php",
        filebrowserImageUploadMethod: "form",

     } );
     </script>
   </body>
</html>