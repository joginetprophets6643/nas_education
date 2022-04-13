<form action="{{route('final-upload')}}" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="final[]" id="drc-file" multiple="">
<button type="submit">Submit</button>
</form>