<?php
require("../config/conn.php");

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $query = $conn->query("DELETE FROM pontos WHERE ID_P = $id");
}
?>
