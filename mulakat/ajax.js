//form tags to omit in NS6+:  ! Protect Sherlock Medya
var omitformtags=["input", "textarea", "select"] 
omitformtags=omitformtags.join("|") 
function disableselect(e){ 
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1) 
return false 
} 
function reEnable(){ 
return true 
} 
if (typeof document.onselectstart!="undefined") 
document.onselectstart=new Function ("return false") 
else{ 
document.onmousedown=disableselect 
document.onmouseup=reEnable 
} 

    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
	
	
$(document).ready(function () {
$("#katipForm").submit(function( event ) {

	/* Ajax Request */
	var idanswer;
    
	idanswer = $( "input:checked" ).val();
	
	var questionid = document.getElementById("soruidjs").value;
	
	var request = $.ajax({
	  url: "next.php",
	  type: "POST",
	  data: {idanswer : idanswer, questionid : questionid},
	  dataType: "json"
	});

	request.done(function(msg) {
	  if(msg == '1') {
		 $('#p3').css('background-color', '#00a70d');
	  } else {
		$('#p3').css('background-color', '#a70000');
	  }
	});

	request.fail(function(jqXHR, textStatus) {
	  alert( "Request failed: " + textStatus );
	});
	
  event.preventDefault();
});

    $('#btn3').click(function() {

	    if($('input.test').filter(':checked').length == 1){
        $('input.test:not(:checked)').attr('disabled', 'disabled');
		}
        else{
        $('input.test').removeAttr('disabled');
		}	

	$('html, body').animate({scrollTop:$(document).height()}, 'slow');

      checked = $("input[type=checkbox]:checked").length;
      if(!checked) {
        alert("Lütfen bir cevap seçiniz.");
        return false;
      }
	  else{
   $("#btn3").fadeOut(0);
   $("#p3").fadeIn(3000);
   $("#p4").fadeIn(0);
	  }
	  
    });

	    $('#p4').click(function() {
      checked = $("input[type=checkbox]:checked").length;
      if(!checked) {
        alert("SEÇENEĞİ BOŞ BIRAKMAYIN");
        return false;
      }
	  else{
	  }
    });
	
    $('#btntk').click(function() {
		document.cookie = "dogru=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
		document.cookie = "yanlis=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
		window.location = "https://www.katipler.name.tr/mulakat/?soru=1";
	});

});
