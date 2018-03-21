<a href="/toDoList/lists/index" class="w3-bar-item w3-button">lists</a>
</div>
<div class="w3-container">
    <?php echo form_open('tasks/create/'.$id); ?>
    
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
        <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name of task" required name="Name">
            </div>
            <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Description" required name="Description">
            </div>
            <div class="w3-half">
                <input class="w3-input w3-border" type="number" placeholder="time in minutes" required name="Time">
            </div>
        </div>
        <button class="w3-button w3-black w3-section" type="submit">SAVE</button>
    </form>
</div>