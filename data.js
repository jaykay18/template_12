<html>
<head> 
<script>
function its_empty(string_value) {

  // Check for the empty string and null
  if (string_value == "" || string_value == null) {
  
    // If either, it's empty so return true
    return true
  }
  
  // Otherwise, it's not empty so return false
  return false
}
</script>
<link href="css/master.css" rel="stylesheet" type="text/css">
<body>
<form id="update data" action="confirm.php" method="post">
<fieldset>
<legend>Contingency Liability</legend>
<p><label class="field" for="Name of the Party">Name of the Party: </label><input type="text" name="Party_Name" class="change" /></p>
<p><label class="field" for="Description">Description: </label><input type="text" name="Description" class="change" /></p>
<p><label class="field" for="Year of liability">Year of liability: </label><input type="text" name="Liability_Year" class="change" /></p>
<p><label class="field" for="Forum">Forum: </label><input type="text" name="Forum" class="change" /></p>
<p><label class="field" for="Pending Amount">Pending Amount: </label><input type="text" name="Amount_Pending" class="change" /></p>
<input type="submit" value="Update">
</fieldset>
</form>
</body>
</html> 