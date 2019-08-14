<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <!--<?php echo form_open('Product/update') ?>-->
            <?php echo form_open_multipart('Product/update') ?>
            <input type="hidden" name="id_product" value="<?php echo $data_product->id_product ?>" >
           
          
              <div class="form-group">
                <label for="text">Title</label>
                <input type="text" name="title" class="form-control" value ="<?php echo $data_product->title ?>">

              </div>

              <div class="form-group">
                <label for="text">Price</label>
                <input type="text" name="price" class="form-control" value="<?php echo $data_product->price ?>">
              </div>

              <div class="form-group">
                <label for="text">Keterangan</label>
                <input type="text" name="ket" class="form-control" value="<?php echo $data_product->ket ?>">
              </div>

              <div class="form-group">
                <label for="text">gambar</label>
                <input type="file" name="gambar" class="form-control" value="<?php echo $data_product->gambar ?>">
              </div>

              <button type="submit" class="btn btn-md btn-danger">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

    <script src="<?php base_url() ?>assets/outbound/js/jquery-1.11.1.min.js"></script>
    <script src="<?php base_url() ?>assets/outbound/js/min/plugins-min.js"></script>
    <script src="<?php base_url() ?>assets/outbound/js/min/app-min.js"></script>
</body>
</html>