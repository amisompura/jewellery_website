//
//
//
// function showPopularity(val)
// {
// 	//var option1 = option1.val();
//  $.ajax({
//  type: 'post',
//  url: 'womenpopuler.php',
//
//  success: function (response) {
//   document.getElementById("block2").innerHTML=response;
//   //console.log(response);
//  }
//  });
// }

function showlowtohigh(val) {
    //var option1 = option1.val();
    $.ajax({
        type: 'post',
        url: 'womenlowtohigh.php',

        success: function (response) {
            document.getElementById("block2").innerHTML = response;
            //console.log(response);
        }
    });
}

function showhightolow(val) {
    //var option1 = option1.val();
    $.ajax({
        type: 'post',
        url: 'womenhightolow.php',

        success: function (response) {
            document.getElementById("block2").innerHTML = response;
            //console.log(response);
        }
    });
}





