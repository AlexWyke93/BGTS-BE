<?php
/**
 * PHP version 7.2
 *
 * @category PHP
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Add Event Form</title>
</head>
<body>
<h1>New Artist</h1>
<form id="add" role="form" method="POST" action="add_event.php" enctype="multipart/form-data">
    <label for="eventName">Event Name: </label>
    <input type="text" name="eventName">

    <label for="eventDate">Event Date: </label>
    <input type="date" name="eventDate"
           value="<?php echo date('M js y G:i'); ?>"
           min="<?php echo date('M js y G:i'); ?>">

    <label for="eventDesc">Event Description: </label>
    <textarea type="text" name="eventDesc"></textarea>

    <label for="uploaded_file">Event Image: </label>
    <input type="file" name="uploaded_file">
    <!-- The max file size is within a hidden field.
    This is set to 2MB and will be handed later within
    the PHP script. -->
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />

    <input type="submit" name="submit" value="Add Event">
</form>
</body>
</html>
