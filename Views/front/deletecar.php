<?php require 'database.php';
 
  if(!empty($_GET['id'])){ 
    $id=$_REQUEST['id'];
   }
    if(!empty($_POST)){ 
      $id= $_POST['id'];
      $pdo=DatabaseConnect::connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "DELETE  FROM product  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        DatabaseConnect::disconnect();
        header("Location: browseArticle.php");
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
</head>
 
<body>

<br />
<div class="container">
     

<br />
<div class="span10 offset1">

<br />
<div class="row">

<br />
<h3>Delete a product</h3>
<p>

</div>
<p>

                     
<br />
<form class="form-horizontal" action="deletecar.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>">
                      
Are you sure to delete ?

<br />
<div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="browseArticle.php">No</a>
</div>
<p>

                    </form>
<p>
</div>
<p>

                 
</div>
<p>
<!-- /container -->
  </body>
</html>