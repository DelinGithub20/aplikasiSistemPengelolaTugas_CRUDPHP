<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary text-monospace">Edit Tugas</h1>
        <?php
        include 'db_connection.php';
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];

            $sql = "SELECT * FROM tasks WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                ?>
                <form method="POST" action="update_task.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="title">Judul:</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea name="description" class="form-control" rows="4" required><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="due_date">Tenggat Waktu:</label>
                        <input type="date" name="due_date" class="form-control" value="<?php echo $row['due_date']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-secondary">Batal</a>
                </form>
                <?php
            } else {
                echo "Tugas tidak ditemukan.";
            }
        } else {
            echo "Invalid request.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>