<!DOCTYPE html>
<html>
<head>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            var y = document.forms["myForm"]["email"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            } else if (y == "") {
                alert("Email must be valid");
                return false;
            }
        }
    </script>
</head>
<body>

<form name="myForm" action="/action_page.php"
      onsubmit="return validateForm()" method="post">
    Name: <input type="text" name="fname">
    Email:<input type="text" name="email">
    <input type="submit" value="Submit">
</form>

</body>
</html>
