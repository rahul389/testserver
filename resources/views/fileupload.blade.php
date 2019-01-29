<!doctype html>
<html>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<body>
        <form method="POST" action="{{ route('fileupload') }}" enctype="multipart/form-data">
        {{ csrf_field()}}
                  <fieldset>
                    <legend>Legend</legend>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </fieldset>
        </form>
    </body>
</html>