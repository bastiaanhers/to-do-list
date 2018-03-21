    
    
    <a href="/toDoList/lists/create" class="w3-bar-item w3-button">create list</a>
</div>
<div class="w3-container">
<h2><?= $title ?></h2>
<?php
    foreach($lists as $list){
        echo '<a href="/toDoList/lists/view/'.$list['id'].'" class="w3-button ">'.$list['naam'].'</a><br>';
    };
?>
</div>