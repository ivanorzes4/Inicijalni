<?php
$godina = 2026;
?>

<p>&copy; <?php echo $godina; ?> Sva prava pridržana.</p>

<?php
$paket1 = "Osnovni paket - 99 €";
$paket2 = "Procjena sigurnosti - 199 €";
$paket3 = "Enterprise - po dogovoru €";
?>
<html>
    <table>
        <tr>
            <td><?php echo $paket1; ?></td>
        </tr>
        <tr>
            <td><?php echo $paket2; ?></td>
        </tr>
        <tr>
            <td><?php echo $paket3; ?></td>
        </tr>
    </table>
</html>