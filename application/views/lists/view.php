<a href="/toDoList/tasks/create" class="w3-bar-item w3-button">create task</a>
</div>
<div class="w3-container">
    <?php $lista = $list[0];?>
    <H2> task list </h2><br><h3><?= $lista['naam']?></h3>
    <div class="w3-card-2">
        <table class="w3-table w3-striped">
            <tr class="w3-grey">
                <th>Task Name</th>
                <th>Discription</th>
                <th>Time In Minutes</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($tasks as $task) {
            echo '<tr><th>'.$task['naam'].'</th>';
            echo '<th>'.$task['uitleg'].'</th>';
            echo '<th>'.$task['duur'].'</th>';
            echo '<th>';
            if($task['status'] == 0){
                echo "Pending";
                echo '</th>';
                echo '<th>';
                echo '<a href="/toDoList/tasks/changeStatus/'.$task['id'].'"class="w3-button w3-blue ">Change status</a>';
            }else{ 
                echo"Finished";
                echo '</th>';
                echo '<th>';
            };
            echo '</th>';
            echo '<th>'.form_open('/tasks/delete/'.$task['id']);
            echo '<a href="/toDoList/tasks/edit/'.$task['id'].'"class="w3-button w3-teal">edit task</a>';
            echo '<input type="submit" value="delete" class="w3-button w3-red">';
            }?>
       
        </table>
    </div>
    <?php echo form_open('/lists/delete/'.$listID); ?>
        <input type="submit" value="delete" class="w3-button w3-red">
     
    <a href="<?= '/toDoList/lists/edit/'.$listID ?>" class="w3-button w3-teal">edit name</a>
    <a href="<?= '/toDoList/tasks/create/'.$listID ?>" class="w3-button w3-blue">create task</a>
        </form>
</div> 