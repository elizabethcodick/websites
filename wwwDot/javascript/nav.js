







/*function google_search()
{
    window.location = "http://www.google.com/search?search=site:http://serenity.ist.rit.edu/~iste240t03/" + encodeURIComponent(document.getElementById("search").value);
}*/


/*
function highlightInElement("search", text){

var elementHtml = document.getElementById("search").innerHTML;
var tags = [];
var tagLocations= [];
var htmlTagRegEx = /<{1}\/{0,1}\w+>{1}/;

//Strip the tags from the elementHtml and keep track of them
var htmlTag;
while(htmlTag = elementHtml.match(htmlTagRegEx)){
    tagLocations[tagLocations.length] = elementHtml.search(htmlTagRegEx);
    tags[tags.length] = htmlTag;
    elementHtml = elementHtml.replace(htmlTag, '');
}

//Search for the text in the stripped html
var textLocation = elementHtml.search(text);
if(textLocation){
    //Add the highlight
    var highlightHTMLStart = '<span class="highlight">';
    var highlightHTMLEnd = '</span>';
    elementHtml = elementHtml.replace(text, highlightHTMLStart + text + highlightHTMLEnd);

    //plug back in the HTML tags
    var textEndLocation = textLocation + text.length;
    for(i=tagLocations.length-1; i>=0; i--){
        var location = tagLocations[i];
        if(location > textEndLocation){
            location += highlightHTMLStart.length + highlightHTMLEnd.length;
        } else if(location > textLocation){
            location += highlightHTMLStart.length;
        }
        elementHtml = elementHtml.substring(0,location) + tags[i] + elementHtml.substring(location);
    }
}

//Update the html of the element
document.getElementById("search").innerHTML = elementHtml;
*/
