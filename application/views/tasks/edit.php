</div>
<div class="w3-container">
<h2><?= $title ?></h2>

<?php 
    echo validation_errors(); 
    print_r($task);
?>

<?php echo form_open('lists/update/'.$taskID); ?>
<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
        <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="<?php echo $task['naam']?>" required naam="Naam">
        </div>
        <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="<?php echo $task['uitleg']?>" required uitleg="Uitleg">
        </div>        
        <div class="w3-half">
            <input class="w3-input w3-border" type="number" placeholder="<?php echo $task['duur']?>" required duur="Duur">
        </div>        
        <div class="w3-half">
            <input class="w3-input w3-border" type="boolean" placeholder="<?php echo $task['status']?>" required status="Status">
        </div>
    </div>
    <button class="w3-button w3-black w3-section" type="submit">SAVE</button>
</form>
</div>