<?php require 'inc/head.php';?>
<section class="cookies container-fluid">
    <div class="row">

<h3>Votre commande en cours:</h3>
<ul>
<?php
foreach ($_SESSION as $id => $cookie)
{
    if (substr($id,0,2)==='ID')
    {
    ?>
     <li><?=$cookie?></li>
     <br>
     <?php
    }
}
?>
</ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
