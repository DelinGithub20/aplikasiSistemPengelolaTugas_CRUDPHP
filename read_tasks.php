<?php

include 'db_connection.php';

$sql = "SELECT * FROM tasks ORDER BY due_date";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $counter . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['due_date'] . "</td>";
            echo "<td>
                    <a href='edit_task.php?id=" . $row['id'] . "' class='btn btn-sm btn-info'>Edit</a>
                    <a href='delete_task.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus tugas ini?\")'>Hapus</a>
                  </td>";
            echo "</tr>";
            $counter++;
        }
    }else{
        echo "<tr><td colspan='5'>Belum ada tugas</td></tr>";
    }

$conn->close(); //tutup koneksi


?>