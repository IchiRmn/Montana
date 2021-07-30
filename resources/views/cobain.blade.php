<!DOCTYPE html>
<html>

<head>
	<!-- Import bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"crossorigin="anonymous">

	<!-- Import jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"crossorigin="anonymous">
	</script>
</head>
{{-- 
<body>
    <a href="#my_modal" data-toggle="modal" data-book-id="my_id_value">Open Modal</a>

    <div class="modal" id="my_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Modal header</h4>
          </div>
          <div class="modal-body">
            <p>some content</p>
            <input type="text" name="bookId" value=""/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

	<script type="text/javascript">
$('#my_modal').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
});
	</script> --}}
  {{-- <div>{{ $member }}</div>
  @foreach ($regist as $regist)

      <div>{{ $regist->member_name; }}</div><br>
  @endforeach --}}
  <div>{{ $registId }}</div>
@foreach ($member as $member)
   <div>{{ $member }}</div> 
@endforeach
  {{-- @foreach ($regist as $regist)
      {{ $regist->member_name; }}
  @endforeach --}}
</body>

</html>
