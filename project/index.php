<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel='stylesheet' href="assets/css/index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <title>File Explorer</title>
</head>
<body>
    <?php include('./assets/views/nav.php')?>
  <main>
    <?php 
    include 'assets/views/directorypanel.php'; 
    include './assets/views/file-panel.php';
    include './assets/views/file-view.php';
    include './assets/views/modal-create-dir.php';
    include './assets/views/modal-upload-file.php';
    include './assets/views/modal-delete.php';
    include './assets/views/modal-move-dir.php';
    include './assets/views/modal-move-file.php';
    include './assets/views/modal-rename.php';
    include 'assets/helpers/getDir.php'; 
    ?>
    
  </main>
  <script type="text/javascript" src="assets/scripts/events.js"></script>
  <script type="text/javascript" src="assets/scripts/openModal.js"></script>
  <script type="text/javascript" src="assets/scripts/updateButtons.js"></script>
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>
</html>