<h1 class="h2" id="title">Home</h1> 
<hr/>
<ul class="list-unstyled list-group">
    <?php
    $ths = '';
    foreach ($menu as $key => $value) :
        $ths .= "<li class='list-group-item'><b>" . ucfirst($key) . ":</b> {$value}</li>";
    endforeach;
    echo $ths;
    ?>
</ul>