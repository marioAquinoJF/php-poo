<h1 class="h2" id="title">Cliente: <?= $client->nome; ?></h1> 
<hr/>
<ul class="list-unstyled list-group">
    <?php
    $ths = '';
    foreach ($client->getData() as $key => $value) :
        $ths .= "<li class='list-group-item'><b>" . ucfirst($key) . ":</b> {$value}</li>";
    endforeach;
    echo $ths;
    ?>
</ul>
<a href="index.php?page=clients&order=<?=$_GET['order']?>" class="btn btn-primary">Lista de Clientes</a>