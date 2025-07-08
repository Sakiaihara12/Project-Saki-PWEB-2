<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=", initial-scale="1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> form subsmission</title>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang di Perpustakaan Shoppe Express</h2>
        <p>silahkan isi buku tamu dibawah ini</p>
        <hr>
  
        <form method="post" action="kunjungan.php">
        <div class="form-group row">
            <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="fullname" placeholder="input namamu" name="fullname" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="masukkan email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" placeholder="masukan email" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="message" class="col-4 col-form-label">keperluan</label> 
            <div class="col-8">
            <textarea id="message" name="message" cols="40" rows="10" class="form-control" required="required"></textarea>
            <span id="keperluanHelpBlock" class="form-text text-muted">tuliskan keperluan mu</span>
            </div>
        </div> 
            <div class="form-group row">
            <div class="offset-4 col-8">
            <input id = "submit" name="submit" type="submit" class="btn btn-primary">
            </div>
        </div>
        </form>

    </div>
</body>
</html>