<?php
// Include config file
require_once "../config.php";

if(isset($_POST['btn_submit'])){

    $pagename=$_POST['page_name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $author=$_POST['author']; 
    $keywords=$_POST['keywords']; 

    $edit_blog_id=$_POST['edit_blog_id'];

    if(  $edit_blog_id==0){
        $stmt_add= $pdo->prepare("INSERT INTO blog_details set page_name=:pn,title=:tl,description=:desc,author=:at,keywords=:kw");
    }
    else{
        $stmt_add= $pdo->prepare("update blog_details set  page_name=:pn,title=:tl,description=:desc,author=:at ,keywords=:kw where id=:bid");
        $stmt_add->bindParam(":bid",   $edit_blog_id);
        
    }

   $stmt_add->bindParam(":pn",   $pagename);
   $stmt_add->bindParam(":tl",    $title);
   $stmt_add->bindParam(":desc",    $description);
   $stmt_add->bindParam(":at",     $author); 
   $stmt_add->bindParam(":kw",   $keywords); 
   $stmt_add->execute();


}


if(isset($_GET['del_id'])){

    $del_id=$_GET['del_id'];

    $stmt_del= $pdo->prepare("delete from blog_details where id=:delid");

    $stmt_del->bindParam(":delid",$del_id);

    $stmt_del->execute();

}

if(isset($_GET['edit_id'])){

    $edit_id=$_GET['edit_id'];

    $stmt_sel= $pdo->prepare("select * from blog_details where id=:editid");

    $stmt_sel->bindParam(":editid",$edit_id);

    $stmt_sel->execute();


    $edit_blog_detail=    $stmt_sel->fetch(PDO::FETCH_ASSOC);


}


$stmt_blogs=$pdo->prepare("select * from blog_details");
$stmt_blogs->execute();

$all_blogs=$stmt_blogs->fetchAll(PDO::FETCH_ASSOC);

 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 70%;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Blog Detail</h2> 
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="hidden" name="edit_blog_id"  value="<?php if(isset($edit_blog_detail)){ echo   $edit_blog_detail['id']; }else{ echo 0;}  ?>"  />
                                            <div class="form-group">
                            <label>Page Name</label>
                            <input type="text" name="page_name" class="form-control"  value="<?php  if(isset($edit_blog_detail)){ echo $edit_blog_detail['page_name'] ; } ?>"  required> 
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"   value="<?php  if(isset($edit_blog_detail)){ echo $edit_blog_detail['title'] ; } ?>"  required> 
                        </div>

                        <div class="form-group">
                            <label>Description</label> 
                            <textarea class="form-control"  name="description"   required ><?php  if(isset($edit_blog_detail)){ echo $edit_blog_detail['description'] ; } ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Author</label> 
                            <textarea class="form-control"  name="author"   required ><?php  if(isset($edit_blog_detail)){ echo $edit_blog_detail['author'] ; } ?></textarea>
                        </div> 

                        
                        <div class="form-group">
                            <label>Keywords</label> 
                            <textarea class="form-control"  name="keywords"   required ><?php  if(isset($edit_blog_detail)){ echo $edit_blog_detail['keywords'] ; } ?></textarea>
                        </div> 
 
                        <input type="submit" name="btn_submit" class="btn btn-primary" value="Submit">
                        <a href="blogdetail.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>

                  
                </div>

                <table class="table table-bordered table-striped" style="margin-top:50px;">
                        <thead><th style="width:150px;">Page Name</th><th  style="width:300px;">Title</th><th   style="width:300px;">Description</th><th   style="width:300px;">Author</th><th>Edit/Delete</th></thead>

                        <tbody>
                            <?php

                            foreach($all_blogs as $single_blog){
                                ?>
                                <tr>
                                    <td><?php echo  $single_blog['page_name'];  ?></td>
                                    <td><?php echo  $single_blog['title'];  ?></td>
                                    <td><?php echo  $single_blog['description'];  ?></td>
                                    <td><?php echo  $single_blog['author'];  ?></td>
                                    <td>
                                    <a href="blogdetail.php?edit_id=<?php echo  $single_blog['id'];  ?>" class="mr-3" title="Update Record"  ><span class="fa fa-pencil"></span></a>
                                    <a onclick="return confirm('Are you sure to delete ?')" href="blogdetail.php?del_id=<?php echo  $single_blog['id'];  ?>" title="Delete Record" ><span class="fa fa-trash"></span></a>        
                                </td>
                                </tr>



                                <?php
                        
                               }


                                ?>

                        </tbody>
                    </table>
            </div>        
        </div>
    </div>
</body>
</html>