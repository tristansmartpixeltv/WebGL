


function onloadPlayCanvas()
{
	
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 return;
}	
	

	 var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	
	// Apply specific code for firefox (exception)
	
	if(isFirefox)
	{
		
		$( "#transformer_iframe" ).mouseover(  function() {
			disableScrollingWithJQuery();
	 });


	$( "#transformer_iframe" ).mouseout(  function() {
		 enableScrollingWithJQuery();
	 });

	}
	else
	{
	// block scrolling on inframe.
	
	$("#transformer_iframe").contents().on('wheel', function(e){
		e.preventDefault();
	});
	
	
	}

	
	
}


function enableScrolling(){
	//document.body.style.overflow = "auto";

}

function disableScrolling(){
	//document.body.style.overflow = "hidden";

}



function disableScrollingWithJQuery(){


var current =  $(document).scrollTop(current);
	
$(document).scroll(function() {
	
	
	
	console.log(current);
	
	if(current < 0){
		current = 0;
	}
	
	$(document).scrollTop(current);
    
	
   
});

	
	
	
}

function enableScrollingWithJQuery(){

$(document).off('scroll');
	
}




// Librairy to detect if using IE

/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function detectIE() {
  var ua = window.navigator.userAgent;

  // Test values; Uncomment to check result …

  // IE 10
  // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';
  
  // IE 11
  // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';
  
  // Edge 12 (Spartan)
  // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';
  
  // Edge 13
  // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

  var msie = ua.indexOf('MSIE ');
  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  }

  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:');
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
  }

  // other browser
  return false;
}

function detectSafari(){
return (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) 
}
