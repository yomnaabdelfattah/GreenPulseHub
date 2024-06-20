<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';

$title = $content = $image = '';
$update = false;

if (isset($_GET['edit'])) {
    $update = true;
    $blog_id = $_GET['edit'];
    $select = "SELECT * FROM `blog` WHERE blog_id=$blog_id";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);
    $title = $row['title'];
    $content = $row['content'];
    $image = $row['image'];
}

if (isset($_POST['update'])) {
    $blog_id = $_GET['edit'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Handle image upload if a new file is provided
    if (!empty($_FILES['image']['name'])) {
        $imagename = $_FILES['image']['name'];
        $imagetype = $_FILES['image']['type'];
        $imagetmp = $_FILES['image']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmp, $location . $imagename);
        $image = $imagename;
    } else {
        $image = $row['image'];  // Keep the existing image if no new file is uploaded
    }

    $update = "UPDATE `blog` SET title='$title', content='$content', image='$image' WHERE blog_id=$blog_id";
    $i = mysqli_query($conn, $update);

    header("location: /grad.proj/admin/listBlog.php");
}

if (isset($_POST['send'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imagename = $_FILES['image']['name'];
    $imagetype = $_FILES['image']['type'];
    $imagetmp = $_FILES['image']['tmp_name'];
    $location = "upload/";
    move_uploaded_file($imagetmp, $location . $imagename);

    $insert = "INSERT INTO `blog` VALUES (NULL, '$title', '$content', '$imagename')";
    $i = mysqli_query($conn, $insert);
    header('location:/grad.proj/admin/listBlog.php');
}
?>

<div class="col-4" style="margin: 0 auto; width: fit-content;">
    <h1 style="text-align: center; color:#0e6800;"><?php echo $update ? 'Edit Blog' : 'Add Blog'; ?></h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="">Blog Title</label>
        <input type="text" placeholder="Title" value="<?php echo $title ?>" name="title" required>

        <label for="">Blog Content</label>
        <textarea placeholder="Content" name="content" required style="height: 150px; width:385px"><?php echo $content ?></textarea>
        
        <label for="exampleInputEmail1">Blog Image</label> <br>
        <?php if ($update && !empty($image)): ?>
            <img src="upload/<?php echo $image; ?>" alt="Current Image" style="max-width: 100%; height: auto;">
            <br><br>
        <?php endif; ?>
        <input type="file" name="image" class="custom-file__input" <?php echo $update ? '' : 'required'; ?>>

        <button type="submit" class="btn" name="<?php echo $update ? 'update' : 'send'; ?>"><?php echo $update ? 'Update' : 'Add'; ?></button>
    </form>
</div>

<?php
include '../shared/footer.php';
?>
