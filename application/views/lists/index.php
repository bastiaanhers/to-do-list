    
    
    <a href="/toDoList/lists/create" class="w3-bar-item w3-button">create list</a>
</div>

<h2><?= $title ?></h2>
<?php
    foreach($lists as $list){
        echo '<h3>'.$list['naam'].'</h3>';
    };
?>