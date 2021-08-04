<!-- boostrap model -->
<div class="modal fade" id="ajax-book-model" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxBookModel"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal" method="POST">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Book Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Name" value="" maxlength="50" required="">
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Book Code</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="code" name="code" placeholder="Enter Book Code" value="" maxlength="50" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Book Author</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="author" name="author" placeholder="Enter author Name" value="" required="">
                </div>
              </div>

              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
<!-- end bootstrap model -->