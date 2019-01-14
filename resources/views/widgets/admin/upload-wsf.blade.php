<form method="POST" action="{{ route('upload.wsf') }}"  enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="wsf" class="label-control">File</label>
        <p class="help-block">Upload file the WSF schedule (Format: PDF)</p>
        <input class="form-control" id="wsf" type="file" accept="application/pdf" name="wsf" >
    </div>
    
    <div class="form-group">
        <button type="submit" class="custom-btn" >
            Upload file
        </button>
    </div>

</form>