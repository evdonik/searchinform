<div class="modal fade" id="loadmodal">
    <div class="modal-dialog">
<?php
extract($data);
 ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update task</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">

                    <h4 class="header-title">Update task - <?=$title?></h4>
                    <form action="/">
                        <input hidden name="uuid" value="<?=$uuid?>" id="uuid">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" value="<?=$title?>" class="form-control" required="required" id="addtitle" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Priority</label>
                            <select class="form-control" name="priority" id="addpriority">
                                <?php foreach ($priority_list as $item):?>
                                    <option value="<?=$item['priority_id']?>" <?php if($priority==$item[ 'priority_id']) echo "selected";?>>
                                        <?=$item['title']?>
                                    </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Status</label>
                            <select class="form-control" name="status" id="addstatus">
                                <?php foreach ($status_list as $item):?>
                                    <option value="<?=$item['status_id']?>" <?php if($status==$item[ 'status_id']) echo "selected";?>>
                                        <?=$item['title']?>
                                    </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input type="text" value="<?=$tags?>" data-role="tagsinput" id="addtags" class="form-control" placeholder="Enter tags">
                        </div>

                        <input type="button" id="submitupdatetask" class="btn btn-primary mt-4 pr-4 pl-4" value="Submit" />

                    </form>

                </div>
                <div class="modal-footer">

                </div>
            </div>
    </div>
</div>