/**
 * Created by Asus on 11/17/2016.
 */

var base_url    =   "";

$(document).ready(function(){
    base_url = $("#jsBaseUrl").val();
});

function imageUnavailable(purpose,uniqueId,name){
    var imageUrl="";
    switch(purpose){
        case "image":
            imageUrl ="https://www.metmuseum.org/content/img/placeholders/NoImageAvailableIcon.png";
            break;
        default:
    }

    $("#"+uniqueId).css("background-image","url("+imageUrl+")");
}