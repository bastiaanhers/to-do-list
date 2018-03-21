</div>
<div class="w3-container">
<h2><?= $title ?></h2>

<?php 
    echo validation_errors(); 
    $list1 = $list[0];
?>

<?php echo form_open('lists/update/'.$listID); ?>
<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
        <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="<?php echo $list1['naam']?>" required name="Name">
        </div>
    </div>
    <button class="w3-button w3-black w3-section" type="submit">SAVE</button>
</form>
</div>