

//Grabbing the Location of the current page being accessed and storing it into a variable
var urlLocation = location.href;

//Splitting the url on each forward slash
let resultsArray = urlLocation.split('/');
//console.log(resultsArray);


//finding out the length of the resultsArray
let lengthOfArray = resultsArray.length;
//console.log(lengthOfArray);

//Using the length of the results array minus one to get the last item in the array no matter what the length is.
var returnPageName = resultsArray[lengthOfArray-1];
//console.log(returnPageName);

//getting a list of the navigation LI items
let getListOfNavListElements = document.querySelectorAll("ul#primaryNav li a");
//console.log(getListOfNavListElements);


//Looping through the list of Navigation Elements to get the href attributes for each one
for (let i=0; i<getListOfNavListElements.length; i++) {
    let pageUrls = (getListOfNavListElements[i].getAttribute("href"));
    console.log(pageUrls);

    //searches list of anchor tags and if the anchor href matches the current page the user is on, it adds a class of current-menu-item to the li element
    if (returnPageName == pageUrls) {
        getListOfNavListElements[i].parentNode.className = "current-menu-item";
    }

}

//get length of the list of Anchor Elements in the Primary Navigation
let getLengthOfAnchorElementsList = getListOfNavListElements.length;
console.log(getLengthOfAnchorElementsList);