<?php
    include("includes/header.php");
    $result = Lekerdez();
?>

<div class="container pb-2">
        <h1 class="text-center display-6 py-3">Szendvicseink</h1>
        <table class="table table-striped">
            <tr>
                <th>Név</th>
                <th>Hosszávalók</th>
                <th>Ár</th>
            </tr>
            <?php while($row=mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <?php echo $row["nev"]; ?>
                    </td>
                    <td>
                        <?php echo $row["hosszavalo"]; ?>
                    </td>
                    <td>
                        <?php echo $row["ar"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
</div>

<?php
    include("includes/footer.php");
?>