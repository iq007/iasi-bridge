function hideAlerts(){
    $('.alert').hide();
}

function hide(list){
    list.forEach(function(entry){
        $('#'+entry).hide();
        $('#'+entry+'_button').removeClass('active');
    })
}


function show(id){
	$('#'+id).show();
	$('#'+id+'_button').addClass('active');

}

function toggle(id){
	$('#'+id).toggle();
	if($('#'+id).is(":visible")){
		$('#'+id+'_button').addClass('active');
	}
	else{
		$('#'+id+'_button').removeClass('active');
	}
}

function showContest(str) {
 
  if (str.length==0) {
    document.getElementById("br_rezultate_contest").innerHTML="";
    return;
  }

  var strid = str.replace(".","");
  
  
  if($('#'+strid).length > 0){
    toggle(strid);
	return;
  }
  
  //remove other archive views
  $("#br_rezultate_contest").empty();
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	  
      $("#br_rezultate_contest").append( "<div id=" + strid + ">" + xmlhttp.responseText + "</div>");
	  	  
	  show("br_rezultate_contest");
    }
  }
  xmlhttp.open("GET","rezultate_arhiva.php?q="+str,true);
  xmlhttp.send();
}



$(document).ready(function(){

    $('#contact').validator().on('submit', function (e){
        if(e.isDefaultPrevented()){

        }
        else {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "procesare_forma.php?action=cazare", //process to mail
                data: $('#contact').serialize(),
                success: function (msg) {
                    $("#thanks").html(msg);//hide button and show thank you
                    $("#form-content").modal('hide'); //hide popup
                },
                error: function () {
                    alert("failure");
                }
            });
        }
    })

    $('#perechi').validator().on('submit', function (e){
        if(e.isDefaultPrevented()){

        }
        else {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "procesare_forma.php?action=perechi", //process to mail
                data: $('#perechi').serialize(),
                success: function (msg) {
                    $("#thanks").html(msg);//hide button and show thank you
                    $("#form-perechi").modal('hide'); //hide popup
                },
                error: function () {
                    alert("failure");
                }
            });
        }
    })


    $('#echipe').validator().on('submit', function (e){
        if(e.isDefaultPrevented()){

        }
        else {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "procesare_forma.php?action=echipe", //process to mail
                data: $('#echipe').serialize(),
                success: function (msg) {
                    $("#thanks").html(msg);//hide button and show thank you
                    $("#form-echipe").modal('hide'); //hide popup
                },
                error: function () {
                    alert("failure");
                }
            });
        }
    })



    $('.input-daterange').datepicker({
        weekStart: 1,
        startDate: "05/05/2016",
        endDate: "05/08/2016",
        clearBtn: true,
        autoclose: true
    });

});




