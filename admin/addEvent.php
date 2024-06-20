<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';


$name = $details = $region = $locationn = $time = $imageOne = $imageTwo = $imageThree = '';
$update = false;

if (isset($_GET['edit'])) {
    $update = true;
    $event_id = $_GET['edit'];
    $select = "SELECT * FROM `event` WHERE event_id=$event_id";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);
    $name = $row['name'];
    $details = $row['details'];
    $region = $row['region'];
    $locationn = $row['location'];
    $time = $row['time'];
    $imageOne = $row['imageOne'];
    $imageTwo = $row['imageTwo'];
    $imageThree = $row['imageThree'];
}

if (isset($_POST['update'])) {
    $event_id = $_GET['edit'];
    $name = $_POST['name'];
    $details = $_POST['details'];
    $region = $_POST['region'];
    $locationn = $_POST['locationn'];
    $time = $_POST['time'];

    // Handle image upload if a new file is provided for each image
    if (!empty($_FILES['imageOne']['name'])) {
        $imageOne = $_FILES['imageOne']['name'];
        $imagetmp = $_FILES['imageOne']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmp, $location . $imageOne);
    } else {
        $imageOne = $row['imageOne'];  // Keep the existing image if no new file is uploaded
    }

    if (!empty($_FILES['imageTwo']['name'])) {
        $imageTwo = $_FILES['imageTwo']['name'];
        $imagetmpp = $_FILES['imageTwo']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmpp, $location . $imageTwo);
    } else {
        $imageTwo = $row['imageTwo'];  // Keep the existing image if no new file is uploaded
    }

    if (!empty($_FILES['imageThree']['name'])) {
        $imageThree = $_FILES['imageThree']['name'];
        $imagetmppp = $_FILES['imageThree']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmppp, $location . $imageThree);
    } else {
        $imageThree = $row['imageThree'];  // Keep the existing image if no new file is uploaded
    }

    $update = "UPDATE `event` SET name='$name', details='$details', region='$region', location='$locationn', time='$time', imageOne='$imageOne', imageTwo='$imageTwo', imageThree='$imageThree' WHERE event_id=$event_id";
    $i = mysqli_query($conn, $update);

    header("location: /grad.proj/admin/listEvent.php");
}

//======== create Part ========
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $region = $_POST['region'];
    $locationn = $_POST['locationn'];
    $time = $_POST['time'];

    $imageOne = $_FILES['imageOne']['name'];
    $imagetmp = $_FILES['imageOne']['tmp_name'];
    $imageTwo = $_FILES['imageTwo']['name'];
    $imagetmpp = $_FILES['imageTwo']['tmp_name'];
    $imageThree = $_FILES['imageThree']['name'];
    $imagetmppp = $_FILES['imageThree']['tmp_name'];
    $location = "upload/";

    move_uploaded_file($imagetmp, $location . $imageOne);
    move_uploaded_file($imagetmpp, $location . $imageTwo);
    move_uploaded_file($imagetmppp, $location . $imageThree);

    $insert = "INSERT INTO `event` VALUES (NULL, '$name', '$details', '$region', '$locationn', '$time', '$imageOne', '$imageTwo', '$imageThree')";
    $i = mysqli_query($conn, $insert);
    header('location:/grad.proj/admin/listEvent.php');
}

?>

<div class="col-4" style="margin: 0 auto; width: fit-content;">
    <h1 style="text-align: center; color:#0e6800;"><?php echo $update ? 'Edit Event' : 'Add Event'; ?></h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="">Event Title</label>
        <input type="text" placeholder="Title" value="<?php echo $name ?>" name="name" required>

        <label for="">Event Details</label>
        <textarea placeholder="Event details" name="details" required style="height: 150px; width:385px"><?php echo $details ?></textarea>

        <label for="">Event Region</label>
        <input type="text" placeholder="Region" value="<?php echo $region ?>" name="region" required>

        <label for="">Event Location</label>
        <textarea type="text" placeholder="location" name="locationn" required style="height: 150px; width:385px"><?php echo $locationn ?></textarea>

        <label for="">Event Time</label>
        <input type="date" placeholder="Event Date" value="<?php echo $time ?>" name="time" required>

        <label for="exampleInputEmail1">Event Images</label> <br>
        <?php if ($update): ?>
            <?php if (!empty($imageOne)): ?>
                <img src="upload/<?php echo $imageOne; ?>" alt="Current Image One" style="max-width: 100%; height: auto;"><br>
            <?php endif; ?>
            <input type="file" name="imageOne" class="custom-file__input">

            <?php if (!empty($imageTwo)): ?>
                <img src="upload/<?php echo $imageTwo; ?>" alt="Current Image Two" style="max-width: 100%; height: auto;"><br>
            <?php endif; ?>
            <input type="file" name="imageTwo" class="custom-file__input">

            <?php if (!empty($imageThree)): ?>
                <img src="upload/<?php echo $imageThree; ?>" alt="Current Image Three" style="max-width: 100%; height: auto;"><br>
            <?php endif; ?>
            <input type="file" name="imageThree" class="custom-file__input">
        <?php else: ?>
            <input type="file" name="imageOne" class="custom-file__input" required>
            <input type="file" name="imageTwo" class="custom-file__input" required>
            <input type="file" name="imageThree" class="custom-file__input" required>
        <?php endif; ?>

        <button type="submit" class="btn" name="<?php echo $update ? 'update' : 'send'; ?>"><?php echo $update ? 'Update' : 'Add'; ?></button>
    </form>
</div>

<?php
include '../shared/footer.php';
?>
