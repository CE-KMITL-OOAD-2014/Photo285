  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link href="js/bootstrap.min.js">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>


<form id="identicalForm" class="form-horizontal"
    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

    <div class="form-group">
        <label class="col-sm-3 control-label">Password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="password"
                data-bv-identical="true"
                data-bv-identical-field="confirmPassword"
                data-bv-identical-message="The password and its confirm are not the same" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Retype password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="confirmPassword"
                data-bv-identical="true"
                data-bv-identical-field="password"
                data-bv-identical-message="The password and its confirm are not the same" />
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    $('#identicalForm').bootstrapValidator();
});
</script>

