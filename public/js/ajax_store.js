"use strict";

(function() {
    $.get("/json/inventory.json").done(function(data){
        console.log(data);

        data.forEach(function(data){
            var contentString="";
            contentString +="<tr>";
                contentString +="<td>" + data.title + "</td>";
                contentString +="<td>" + data.quantity + "</td>";
                contentString +="<td>" + data.price + "</td>";
                contentString +="<td>" + data.categories.join(", ") + "</td>";
             contentString +="</tr>";   
            $('#insertProducts').append(contentString);
        });
       

       

    }); 
  
 
   
})();



