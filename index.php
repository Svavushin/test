<?php

include 'php/test_.php'

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>TEST</title>
  <link href="/css/styles.css" rel="stylesheet">


</head>

<body>
  <div class="block">

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