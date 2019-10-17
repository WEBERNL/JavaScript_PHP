/* JAVASCRIPT FOR GOOD RESULTS MINISTRIES WEBSITE */


/* ------------GLOBAL VARIABLES------------ */



/* ------------FUNCTION TO ADJUST NAV AREA DEPENDING ON DEVICE WIDTH------------ */
/* Note that the indexOf method returns -1 if the text "w3-show" doesn't exist within the specified element's class description */
/* Note that since "w3-show" is included (per this function) in the class description AFTER "w3-hide" (as specified per the HTML document itself), it "overrides" the "w3-hide" style */
function navAdjust() {
	
	var navCollapsed = document.getElementById("nav-collapsed");
	
		
	if (navCollapsed.className.indexOf("w3-show") == -1) {		
		navCollapsed.className += " w3-show";
	} else { 		
		navCollapsed.className = navCollapsed.className.replace(" w3-show", "");
	}
}