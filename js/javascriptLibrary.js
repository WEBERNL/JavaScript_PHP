
/* ------------FUNCTION TO STREAMLINE CODE FOR EVENT LISTENERS FOR ANY OBJECT, ANY EVENT------------ */

function eventListener (objectVariable, eventVariable, functionVariable, bubbleVariable) {
	if (objectVariable.addEventListener) {
	objectVariable.addEventListener(eventVariable, functionVariable, bubbleVariable); 
	} else if (objectVariable.attachEvent)  {
	objectVariable.attachEvent("on" + eventVariable, functionVariable);
	}
}

/* Note that the "if" statement evaluates to true and the objectVariable.addEventListener method is processed ONLY IF the objectVariable.addEventListener method exists for the browser being used...
In other words, if(objectVariable.addEventListener) only evaluates to "true" if the objectVariable.addEventListener method exists for the browser being used.  If it doesn't exist, then the
"else if" statement is evaluated. */
/* Note that the bubbleVariable refers to the true or false value required with the addEventListener method...
capturing/bubbling must be investigated further to determine exactly what they are */
