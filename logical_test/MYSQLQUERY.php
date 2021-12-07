<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "techtest");

// Check connection
if ($mysqli === false) {
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Attempt select query execution
$sql = "SELECT mhs_nama,nilai FROM tb_mahasiswa, tb_mahasiswa_nilai,tb_matakuliah 
WHERE tb_matakuliah.mk_id=2 AND tb_mahasiswa_nilai.nilai = (SELECT MAX(nilai) FROM tb_mahasiswa_nilai WHERE mk_id=2)";
if ($result = $mysqli->query($sql)) {
  if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>mhs_nama</th>";
    echo "<th>mhs_nilai</th>";
    echo "</tr>";
    while ($row = $result->fetch_array()) {
      echo "<tr>";
      echo "<td>" . $row['mhs_nama'] . "</td>";
      echo "<td>" . $row['nilai'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    // Free result set
    $result->free();
  } else {
    echo "No records matching your query were found.";
  }
} else {
  echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
