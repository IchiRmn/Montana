<!-- Modal -->
<form action="/regist" method="POST">
  @csrf
  
<div class="modal fade" id="my_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content" style="background-color: rgb(49, 49, 49);">
      <div class="modal-header" style="border-color: rgb(49, 49, 49)">
        <h5 class="modal-title" id="staticBackdropLabel">How many member will join the trip?</h5>
        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          @foreach ($selectMountain as $mount)
          <label class="input-group-text" for="inputGroupSelect01">Choose</label>
          <select class="form-select btn-light" id="member" name="member">
            @for ($i = 1; $i <= $mount->max ; $i++)     
            <option value={{ $i }}>{{ $i }}</option>
            @endfor
          </select>
              
          <input type="text" name="mountainId" id="mountainId" value={{ $mount->id }} hidden>
          @endforeach
        </div>
      </div>    
      <input hidden type="text" name="date" value=""/>
      <div class="modal-footer" style="border-color: rgb(49, 49, 49)">
        <button type="submit" class="btn btn-success">Go!</button>
      </div>
    </div>
  </div>
</div>
  
</form>
<script type="text/javascript">
  $('#my_modal').on('show.bs.modal', function(e) {
      var bookId = $(e.relatedTarget).data('book-id');
      $(e.currentTarget).find('input[name="date"]').val(bookId);
  });
</script>
<!-- endModal -->