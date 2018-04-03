<script type="text/javascript">
    function a(uzip) {
        var numbers = /^[0-9]+$/;
        if (uzip.value.match(numbers)) {
            return true;
        }
        else {
            alert('ZIP code must have numeric characters only');
            uzip.value = "";
        }
    }

    function alp(uzip) {
        var numbers = /^[A-Za-z]+$/;
        if (uzip.value.match(numbers)) {
            return true;
        }
        else {
            uzip.value = "";
            alert('Name has only alphabets ');


        }
    }


    function a1(uzip) {
        var numbers = /^[0-9]+$/;
        if ((uzip.value.length >= 10 && uzip.value.length <= 13) && (uzip.value.match(numbers))) {
            return true;
        }
        else {
            uzip.value = "";
            uzip.focus();
            alert('Contact must have 10 to 13 numeric characters only');

        }
    }


    function em(uemail) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (uemail.value.match(mailformat)) {
            return true;
        }
        else {
            alert("You have entered an invalid email address!");
            uemail.focus();
            return false;

        }
    }


    function ps(passid, mx, my) {
        var passid_len = passid.value.length;
        if (passid_len == 0 || passid_len >= my || passid_len < mx) {
            alert("Password should not be empty / length be between " + mx + " to " + my);
            passid.focus();
            return false;
        }
        return true;
    }


    /*function an(uadd)
    {
    var letters = /^[0-9a-zA-Z]+$/;
    if(uadd.value.match(letters))
    {
    return true;
    }
    else
    {
    alert('Username must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
    }  */

</script>