<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Tugas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-md mt-4 pd-4">
        <h1 class="text-center text-primary text-monospace">Sistem Pengelolaan Tugas</h1>
        <a href="add_task.php" class="btn btn-primary">Tambah Tugas Baru</a>
        <table class="table table-primary table-striped table-hover table-bordered mt-3 ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tenggat Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read_tasks.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
</body>
</html>