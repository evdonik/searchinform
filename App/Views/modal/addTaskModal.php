<div class="modal fade" id="loadmodal">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add task</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <h4 class="header-title">Adding new task</h4>
                <form action="/">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control"  id="addtitle" placeholder="Enter title" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Priority</label>
                        <select class="form-control" name="priority" id="addpriority">
                            <?php foreach ($priority_list as $priority):?>
                                <option value="<?=$priority['priority_id']?>">
                                    <?=$priority['title']?>
                                </option>
                                <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" value="tags1,tags2" data-role="tagsinput" id="addtags" class="form-control" placeholder="Enter tags">
                    </div>

                    <input type="button" id="submitaddtask" class="btn btn-primary mt-4 pr-4 pl-4" value="Submit" />

                </form>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>