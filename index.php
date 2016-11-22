<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ithaca Applefest</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script src="js/script.js"></script>
  </head>
  <body>
    <div class="title">
      <h1>Ithaca Applefest</h1>
    </div>
    <?php include "includes/header.php";?>
    <div class="container">
        <img id =apple_pic src ="images/apple_fest1.jpg" alt="gallery of apple_fest" >
        <!--apple_fest1 taken from https://www.instagram.com/p/BLCHzKyjTd9/?tagged=applefest-->
        <!--apple_fest2 taken from https://c1.staticflickr.com/9/8073/8381840938_4f6e3a90b3_b.jpg-->
        <!--apple_fest3 taken from http://frank.notfrank.com/images/Photos/AppleFest2012/DSC_3275.jpg-->
        <!--apple_fest3 taken from https://i.ytimg.com/vi/L8dSbuQkY48/maxresdefault.jpg-->
    <a class="prev" onclick="pic_rotate(-1)">&#10094;</a>
    <a class="next" onclick="pic_rotate(1)">&#10095;</a>
    </div>
    <footer>
      ITHACA APPLE FEST
    </footer>
  </body>
</html>
