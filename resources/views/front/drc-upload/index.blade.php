<form action="{{route('drc-upload')}}" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="drc[]" id="drc-file" multiple="">
<button type="submit">Submit</button>
</form>