<?php

include("../server/config.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $query = "SELECT `gepek`. * FROM `gepek` WHERE gepek.nev LIKE 
    '%{$input}%' OR gepek.leiras LIKE '%{$input}%';";

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {?>
        
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
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $nev = $row['nev'];
                    $leiras = $row['leiras'];
                    $kaukcio = $row['kaukcio'];
                    $berles = $row['berles'];
                    
                    ?>
                        <tr>
                            <td> <?php echo $nev; ?></td>
                            <td> <?php echo $leiras; ?></td>
                            <td> <?php echo $kaukcio; ?></td>
                            <td> <?php echo $berles; ?></td>
                            <td> <?php echo $kep; ?></td>
                        </tr>

                    <?php
                    
                }
               ?>
            </tbody>
        </table>
        <?php
        
    } else {
        echo"<h4 class='text-danger text-center'>nincs ilyen adat</h4>";
    }
}
?>