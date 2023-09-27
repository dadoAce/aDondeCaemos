<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <?= $this->vista("_complementos/referencias/referencias"); ?>
</head>
 
<?php $this->vista("_complementos/menus/menu_lateral_admin"); ?>
<body class="page-<?php if (isset($nombre_pagina)){echo $nombre_pagina;}else{echo "default";}?>">
    <main class="bg-l-g-1"> 

        <?php 
        if (isset($contenido)) {
             $this->vista($contenido); 
        }
        ?>
    </main>
</body>

</html>

<?= $this->vista("_complementos/referencias/referencias_footer"); ?>