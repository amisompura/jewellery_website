//
// function showPopularity(val)
// {
// 	//var option1 = option1.val();
//  $.ajax({
//  type: 'post',
//  url: 'kidspopular.php',
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
        url: 'kidslowtohigh.php',

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
        url: 'kidshightolow.php',

        success: function (response) {
            document.getElementById("block2").innerHTML = response;
            //console.log(response);
        }
    });
}





