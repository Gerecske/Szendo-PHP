<?php
    include("includes/header.php");
    $flag = "";
    $nev=""; $hozzavalo=""; $ar="";
    $error = array("nev" => "", "ar" => "", "feltet" => "");
    if(isset($_POST["btn-submit"])){
        
        if(empty($_POST["nev"])){
            $error["nev"] = "Nem írtál be nevet!!!!";
        }
        else{
            $nev = $_POST["nev"];
        }

        if(empty($_POST["ar"])){
            $error["ar"] = "Nem írtál be árat!!!!";
        }
        else{
            $ar = $_POST["ar"];
        }

        if(empty($_POST["feltet"])){
            $error["feltet"] = "Nem írtál be hozzávalót!!!!";
        }
        else{
            $hozzavalo = $_POST["feltet"];
        }

        if(array_filter($error)){
            $flag = false;
        }
        else{
            Add();
            header("Location: index.php");
        }
    }
?>
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Szendo felvétele</h1>
        <div class="card m-auto" style="width: 20rem;">
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nev" class="form-label">Neve</label>
                        <input type="text" name="nev" class="form-control" placeholder="pl.: Club szendo" 
                        value="<?php echo $nev ?>">
                        <?php if($flag == false) {?>
                            <p> <?php echo $error["nev"]; ?></p>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="ar" class="form-label">Ár</label>
                        <input type="text" name="ar" class="form-control" placeholder="pl.: 2000" 
                        value="<?php echo $ar ?>">
                        <?php if($flag == false) {?>
                            <p> <?php echo $error["ar"]; ?></p>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="feltet" class="form-label">Hozzávalók</label>
                        <input type="text" name="feltet" class="form-control" placeholder="pl.: szalámi, gomba" 
                        value="<?php echo $hozzavalo ?>">
                        <?php if($flag == false) {?>
                            <p> <?php echo $error["feltet"]; ?></p>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="btn-submit" class="btn btn-primary btn-block d-block mx-auto">Felvétel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    include("includes/footer.php");
?>