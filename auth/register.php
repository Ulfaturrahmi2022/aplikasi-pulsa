



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Buat Akun</title>
  </head>
  <body>
    


    <!--panggil file config -->
    <div class="container">
        <div class="row mt-3 justify-content-center">
          <h1 class= "text-center">Form Registerasi</h1>
          <div class="col-md-6">
              <div class="card">
              <div class="card-body">
                <form action="save-register.php" method="post">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control"  placeholder="Masukkan Username Anda! " required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                     <input type="password" name="sandi" class="form-control"  placeholder="Masukkan Password Anda!" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nama Lengkap</label>
                     <input type="text" name="nama_lengkap" class="form-control"  placeholder="Masukkan Nama Anda!" required>
                  </div>
                  <div class="mb-3">
                    <a href="" class="btn btn-danger btn-sm">Batal</a>
                   <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    
                  </div>

                
                </form>
              </div>
            </div>
          </div>
            
        </div>
    </div>

  



        

















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   

  
  </body>
</html>