<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="add_agents.php" method="post">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD AGENT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAgent">Name@</label>
                <input name="agent" type="text" class="form-control" id="inputAgent" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputScore">Score</label>
                <input name="score" type="text" class="form-control" id="inputScore" placeholder="Score">
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