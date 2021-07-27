  <!-- Modal -->
<div class="modal fade" id="confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content" style="background-color: rgb(49, 49, 49);">
        <div class="modal-header" style="border-color: rgb(49, 49, 49)">
          <h5 class="modal-title" id="staticBackdropLabel">Confirmation Alert</h5>
          <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close" id="btn1"></button>
        </div>
        <div class="modal-body">
            Are you sure?
          <div>
            <small id="message" class="text-danger"></small>
          </div>
        {{-- <input type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" hidden>
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
        </div> --}}
        <div class="modal-footer" style="border-color: rgb(49, 49, 49)">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn2">Back</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div> 
    </div>
</div>
  <!--End Modal -->