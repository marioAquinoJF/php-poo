<h1 class="h2" id="title" >Lista de Clientes</h1>
<hr/>
<div class="btn btn-default btn-sm <?= ($order === 'asc' ? 'active' : '');?>"><a href='index.php?page=clients&order=asc'>Ordem Ascendente</a></div>
<div class="btn btn-default btn-sm <?= ($order === 'desc' ? 'active' : '');?>"><a href='index.php?page=clients&order=desc'>Ordem Descendente</a></div>
<hr/>
<div class="list-unstyled list-group">
    <?php
    
    $ths = '';
    foreach ($clients as $value) :
        $ths .= "<a class='list-group-item' href='index.php?page=showClient&id={$value->id}&order={$_GET['order']}'><b>ID:</b> $value->id - <b>Nome: </b>{$value->nome}</a>";
    endforeach;
    echo $ths;
    ?>
    
</div>
