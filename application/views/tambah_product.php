<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('Product/simpan') ?>

              <div class="form-group">
                <label for="text">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Masukkan Nama produk">
              </div>

              <div class="form-group">
                <label for="text">price</label>
                <input type="text" name="price" class="form-control" placeholder="Masukkan price">
              </div>

              <div class="form-group">
                <label for="text">Keterangan</label>
                <input type="text" name="ket" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">gambar</label>
                <input type="file" name="gambar" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

    <script src="<?php base_url() ?>assets/outbound/js/jquery-1.11.1.min.js"></script>
    <script src="<?php base_url() ?>assets/outbound/js/min/plugins-min.js"></script>
    <script src="<?php base_url() ?>assets/outbound/js/min/app-min.js"></script>
</body>
</html>