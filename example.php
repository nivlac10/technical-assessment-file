<!DOCTYPE html>
<html lang="en">
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<head>
<meta charset="utf-8">
<title>jQuery AJAX Submit Form</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
        var actionUrl = $(this).attr("action");
 
        $.post(actionUrl, formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
    });
});
</script>
</head>
<body>
    <form action="process-form.php">
        <p>
            <label>First Name:</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>Last Name:</label>
            <input type="text" name="lname">
        </p>
      
        <p>
            <label>Age:</label>
            <input name="age"></input>
        </p>
        <input type="submit" value="submit">
    </form>
    <div id="result"></div>
</body>
</html>