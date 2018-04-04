//
// function showPopularity(val)
// {
// 	//var option1 = option1.val();
//  $.ajax({
//  type: 'post',
//  url: 'price.php',
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
        url: 'pricelowtohigh.php',

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
        url: 'pricehightolow.php',

        success: function (response) {
            document.getElementById("block2").innerHTML = response;
            //console.log(response);
        }
    });
}





