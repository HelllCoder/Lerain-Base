var oldField = document.querySelector("input#oldField");
var newField = document.querySelector("input#newField");
var oldNumberSystemField = document.querySelector("input#oldNumberSystemField");
var newNumberSystemField = document.querySelector("input#newNumberSystemField");
var convertButton = document.querySelector("button#convertButton");
var errorMessage = document.querySelector("p#errorMessage");



var _convert = function(oldF, newF, oldNSF, newNSF, button, message)
{
    if (button.innerHTML === "Convert")
    {
        try
        {
            oldF.disabled = true;
			oldNSF.disabled = true;
			newNSF.disabled = true;
            button.innerHTML = "Clear";
			
			// Number systems
			var oldSystem = parseInt(oldNSF.value);
			if(!validInSystem(oldF.value, oldSystem)) throw "This num cannot be in this system"
			var newSystem = parseInt(newNSF.value);
			console.log("Old System: " + oldSystem);
			console.log("New System: " + newSystem);

			// Old number
			var oldNumber = parseInt(oldF.value, oldSystem);
			var newNumber = oldNumber.toString(newSystem);

			console.log("Old Number: " + oldNumber);
			console.log("New Number: " + newNumber);

			if (newNumber.toString() === "NaN") throw "Not a Number";
			newF.value = newNumber;

/*
			var oldValue = parseInt(oldF.value, convertToken ? 10 : 2);
			var numberSystem = parseInt(third.value);
			var newValue = parseInt(oldValue).toString(numberSystem);
            second.value = newValue; // Conversion to string will help
			if (second.value == "NaN") throw "Bad number given";
*/
        }
        catch(exc)
        {
            message.innerHTML = "Fields has been filled with invalid values.";
        }
    }
    else
    {
        clearingFields(oldF, newF, oldNSF, newNSF, button, message);
    }
}

function validInSystem(numberStr, numberSystem)
{
    for (digit in numberStr)
	{
	   if(parseInt(numberStr[digit]) >= numberSystem) return false;
	}
	return true;
}

function clearingFields(oldF, newF, oldNSF, newNSF, button, message)
{
        oldF.disabled = false;
		oldNSF.disabled = false;
		newNSF.disabled = false;
        button.innerHTML = "Convert";
        message.innerHTML = "";
        oldF.value = "";
		newF.value = "";
        oldNSF.value = "";
		newNSF.value = "";
}

function convert()
{
_convert(oldField, newField, oldNumberSystemField, newNumberSystemField, convertButton,
         errorMessage);
}

convertButton.addEventListener("click", convert, false);



