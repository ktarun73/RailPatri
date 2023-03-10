$(document).ready(function(){
    $(".loader").html(function(index,oldHtml){
        var spilit = oldHtml.split("");
        var text = "";
        spilit.forEach(function(currentItem,currentIndex){
            var content = "";
            for(var i=0;i<4;i++){
                content+="<span class='side side-"+(i+1)+"'>"+currentItem+"</span>";
            }
            text+="<span class='block'>"+content+"</span>";
        });
        return text;
    });
});