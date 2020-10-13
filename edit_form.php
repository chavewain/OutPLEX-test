<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <form action="edit_agents.php" method="post">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModal">EDIT AGENT <?= $_GET['agent']; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <input type="hidden" name="id" id="formId">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAgent">Name</label>
                <input name="agent" id="editAgent" type="text" class="form-control" id="inputAgent" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputScore">Score</label>
                <input name="score" id="editScore" type="text" class="form-control" id="inputScore" placeholder="Score">
              </div>
            </div>
   
     


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>

  </form>
</div>

<script>
  
  $("#editModal").on('show.bs.modal', function(event){

      var button = $(event.relatedTarget);

      var id = button.data('formid');
      var formAgent = button.data('formagent');
      var formScore = button.data('formscore');

      $('#formId').val(id);
      $('#editAgent').val(formAgent);
      $('#editScore').val(formScore);

    });
</script>