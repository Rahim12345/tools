<div class="modal fade" id="blogAdd" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blogModalLabel">New blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titleEn" class="col-form-label">TitleEn:</label>
                        <input type="text" class="form-control" id="titleEn" name="titleEn">
                    </div>

                    <div class="form-group">
                        <label for="titleAz" class="col-form-label">TitleAz:</label>
                        <input type="text" class="form-control" id="titleAz" name="titleAz">
                    </div>

                    <div class="form-group">
                        <label for="blogEn" class="col-form-label">BlogEn:</label>
                        <textarea class="form-control" id="blogEn" name="blogEn"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="blogAz" class="col-form-label">BlogAz:</label>
                        <textarea class="form-control" id="blogAz" name="blogAz"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
