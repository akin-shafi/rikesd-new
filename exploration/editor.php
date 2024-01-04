<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <div class="sample">
         <h2>Image upload example.</h2>
         <form>
            <textarea id="edit" class="selector" name="content"></textarea>
         </form>
      </div>
      <script>

            new FroalaEditor('.selector', {
             // Set the image upload URL.
             imageUploadURL: 'upload_image.php'
           })
      </script>
   </body>
</html>