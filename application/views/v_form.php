<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
</head>
<body>
  <form method="post">
    <?= $this->session->flashdata('pesan'); ?><br>

    <label>NIS</label><br>
    <input type="text" name="inputNIS"><br>
      <?= form_error('inputNIS'); ?><br>

    <button>Submit</button>
  </form>
</body>
</html>