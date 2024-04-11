<?php
include("../server/db.php");

if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $query = "SELECT * FROM `gepek` WHERE `nev` LIKE :input OR `leiras` LIKE :input";

    $stmt = $db->prepare($query);
    $stmt->execute(['input' => "%$input%"]);
    $result = $stmt->fetchAll();

    if ($result) {
?>
        <table class="table borded mt-4">
            <thead>
                <tr>
                    <th>Neve</th>
                    <th>Leírás</th>
                    <th>Kaukció (Ft)</th>
                    <th>Bérlés (Ft/nap)</th>
                </tr>
            </thead>
            <tbody>
<?php
        foreach ($result as $row) {
            $nev = $row['nev'];
            $leiras = $row['leiras'];
            $kaukcio = $row['kaukcio'];
            $berles = $row['berles'];
?>
                <tr>
                    <td><?php echo $nev; ?></td>
                    <td><?php echo $leiras; ?></td>
                    <td><?php echo $kaukcio; ?></td>
                    <td><?php echo $berles; ?></td>
                </tr>
<?php
        }
?>
            </tbody>
        </table>
<?php
    } else {
        echo "<h4 class='text-danger text-center'>Nincs ilyen adat</h4>";
    }
}
?>