<?php

include 'php/test_.php';
include 'php/test_1.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>TEST</title>
  <link href="/css/styles.css" rel="stylesheet">
  <script defer src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script defer src="/js/js_test.js"></script>
 

</head>

<body>
  <div class="block" id="jopa">

    <div>
      111111
    </div>

    <div>
      111111
    </div>

    <div>
      111111
    </div>

    <div>
      111111
    </div>

    <div>
      111111
    </div>

  </div>

  <div class="block-ul">
    <ul>

      <?

      foreach ($_FILES as $k => $v) {
        echo "<li>" . $v['name'] . "</li>";
      }
      ?>

    </ul>
  </div>

  </div>

  <div class="block-form">
    <form action="" style="display: block;" method="POST" enctype="multipart/form-data">

      <input name="num" type="text" placeholder="num"> <br>

      <input name="string" type="text" placeholder="string"> <br>

      <input name="file1" type="file" placeholder="file"> <br>


      <input name="submit" type="submit">



    </form>
  </div>


</body>

</html>