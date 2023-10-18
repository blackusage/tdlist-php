<!-- Form for creating new record -->
<form method="post">
  <div class="mb-3">
    <label for="todoFormName" class="form-label"></label>
    <input required type="text" class="form-control" name="todoFormName" id="todoFormName">
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="todoFormIsImportant">Important</label>
    <input class="form-check-input" type="checkbox" role="switch" name="todoFormIsImportant" id="todoFormIsImportant">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
