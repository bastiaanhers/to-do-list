<a href="/toDoList/tasks/create" class="w3-bar-item w3-button">create task</a>
</div>
<div class="w3-container">
    <?php $lista = $list[0];?>
    <H2> task list </h2><br><h3><?= $lista['naam']?></h3>
    <?php echo form_open('/lists/delete/'.$listID); ?>
        <input type="submit" value="delete" class="w3-button w3-red">
    </from>
    <a href="<?= '/toDoList/lists/edit/'.$listID ?>" class="w3-button w3-teal">edit name</a>
    <a href="<?= '/toDoList/tasks/create/'.$listID ?>" class="w3-button w3-blue">create task</a>
</div>