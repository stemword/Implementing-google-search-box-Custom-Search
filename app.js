// Make sure in jsFiddle you have selected option onLoad
// (function() {
//   var cx = '017643444788069204610:4gvhea_mvga'; // Insert your own Custom Search engine ID here
//   var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
//   gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
//       '//www.google.com/cse/cse.js?cx=' + cx;
//   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
// })();
var cseID =  "017016795061551896316:xtyaqy-c908";
var cseApiKey = "AIzaSyDvoete1q73AA-CcfIoZnbuzouslcdM3tw";
var cseResultNum= 10;


jQuery("#search-input").on("keyup", function() {
				jQuery("#search-more").hide();
    			jQuery("#search-prev").hide();
                var searchText = jQuery("#search-input").val().trim();
                if (searchText.length === 0) {
                    jQuery("#search-button").attr("disabled", "disabled");
                } else {
                    jQuery("#search-button").removeAttr("disabled");
                }
            });

jQuery( "#search-input-form" ).submit(function( event ) {
	//alert();
	
  jQuery.getJSON("https://www.googleapis.com/customsearch/v1?key=" + cseApiKey + "&cx=" + cseID + "&q=" + jQuery("#search-input").val() + "&num=" + cseResultNum, function(data) {
		//console.log(data);
                jQuery("#search-result-wrapper").html("");
                jQuery("#search-results").html("");
                jQuery(".search-result-page").html("<p><strong>" + data.queries.request[0].totalResults + "</strong> Results</p>");
                // Need to have the header relative so we can scroll through results
                jQuery("header").css("position", "relative");
                searchResultDisplay(data);
                if (jQuery(".search-result-section:visible").length === 0) {
                    jQuery(".search-result-section").show();
                }
                
            // Get more results when button is clicked
            jQuery("#search-more").click(doSearchMore);
            jQuery("#search-prev").click(doSearchPrev);
            });
  			event.preventDefault();
			return false;
});

function searchResultDisplay(data)
{	
	jQuery("#search-results").html('');
	if (data.error) {
                jQuery("#search-result-wrapper").append("<p>Error: " + data.error.message + "</p>");
            }
    else {
    	
    	// if(data.queries.previousPage[0])
    	// 	alert(data.queries.previousPage[0].startIndex);
    	//alert(data.queries.nextPage[0].startIndex);
    	if (data.queries.hasOwnProperty('nextPage')) {
                     next = data.queries.nextPage[0];
                } else {
                     next = false;
                }
        if (data.queries.hasOwnProperty('previousPage')) {
                     prev = data.queries.previousPage[0];
                } else {
                     prev = false;
                }
        if (next.hasOwnProperty('startIndex')) {
        			jQuery("#search-more").show();
                } else {
                    jQuery("#search-more").hide();
                }
        if (prev.hasOwnProperty('startIndex')) {
        			jQuery("#search-prev").show();
                } else {
                    jQuery("#search-prev").hide();
                }
        jQuery(data.items).each(function(index, item) {
                    jQuery("#search-results").append("<li><div><a href='" + item.link + "' class='search-table'><div class='search-table-cell'><h4>" + item.title + "</h4><p>" + item.htmlSnippet + "<span class='mobile-arrow'></span></p></div><div class='search-table-cell'><i class='icon'></i></div></a></div></li>");
                });
        

    }
}

function doSearchMore()
{
	//console.log(next);
	jQuery.getJSON("https://www.googleapis.com/customsearch/v1?key=" + cseApiKey + "&cx=" + cseID + "&q=" + jQuery("#search-input").val() + "&num=" + cseResultNum + "&start=" + next.startIndex, function(data){ 
		searchResultDisplay(data);
	});
}


function doSearchPrev()
{
	//console.log(next);
	jQuery.getJSON("https://www.googleapis.com/customsearch/v1?key=" + cseApiKey + "&cx=" + cseID + "&q=" + jQuery("#search-input").val() + "&num=" + cseResultNum + "&start=" + prev.startIndex, function(data){ 
		searchResultDisplay(data);
	});
}