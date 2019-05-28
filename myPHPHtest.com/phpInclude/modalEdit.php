<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="exampleModalLabel">Change user</h3>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="form-group">
                        <label for="modalFirstName" class="control-label">First Name:</label>
                        <input type="text" required class="form-control" id="modalFirstName">
                    </div>
                    <div class="form-group">
                        <label for="modalLastName" class="control-label">Last Name:</label>
                        <input type="text" required class="form-control" id="modalLastName">
                    </div>
                    <div class="form-group">
                        <label for="modalPassword" class="control-label">Password:</label>
                        <input type="text" required class="form-control" id="modalPassword">
                    </div>
                    <div class="form-group">
                        <label for="modalAbout" class="control-label">About:</label>
                        <textarea class="form-control txtArea" id="modalAbout"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modalDesign">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
