<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Edit Artist Form</title>
</head>
<body>
<?php
include 'db_functions.php';

$id = $_GET['artistId'];

if ($id != NULL || $id != 0) {
    try
    {
        $result = Db_query(
            "SELECT * FROM artists WHERE artistId=" . $id . ";"
        );

        $row = mysqli_fetch_row($result);

        $id = $row[0];
        $artistName = $row[1];
        $artistBio = $row[2];
    }
    catch (Exception $e)
    {
        echo "Exception Occurred: " . $e->getMessage();
    }
}
?>

<form role="form" enctype="multipart/form-data" name="edit" method="POST" action="edit_artist.php">
    <input type="hidden" value="<?php echo $id; ?>" name="id" />

    <label for="artistName">Artist Name: </label>
    <input name="artistName" type="text" value="<?php echo $artistName; ?>">

    <label for="artistBio">Artist Bio: </label>
    <textarea name="artistBio"><?php echo $artistBio; ?></textarea>

    <input type="submit" name="submit" value="Edit Artist">
</form>
</body>
</html>