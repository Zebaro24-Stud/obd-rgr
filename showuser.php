<?php include("includes/header.php");
session_start();
?>
    <div id="welcome" style="width: 90%;">
        <h1><span>Інформація про користивача:</span></h1>
        <?php

        $query = mysqli_query($conn, " SELECT * FROM clients WHERE client_id='".$_SESSION["session_id"]."';");
        $message = mysqli_error($conn);

        echo "<table><tr><th>Id</th><th>Ім'я</th><th>Пошта </th><th>Номер телефону </th><th>Пароль </th></tr>";
        foreach ($query as $row) {
            echo "<tr>";
            echo "<td>" . $row["client_id"] . " </td>";
            echo "<td>" . $row["name"] . " </td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["number"] . " </td>";
            echo "<td>" . $row["password"] . " </td>";
            echo "</tr>";
        }
        echo "</table>";

        $message = md5("password1")

        ?>
        <p></p>
    </div>

<?php
if (!empty($message)) {
    echo "<p class='error'>" . "MESSAGE: " . $message . "</p>";
}
?>
<?php include("includes/footer.php"); ?>