<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Tugas Baru</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="text-center text-primary text-monospace">Tambah Tugas Baru</h1>
      <form method="POST" action="create_task.php">
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" name="title" class="form-control" required />
        </div>
        <div class="form-group">
          <label for="description">Deskripsi</label>
          <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label for="due_date">Tenggat Waktu</label>
          <input type="date" name="due_date" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </body>
</html>
