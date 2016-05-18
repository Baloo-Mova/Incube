/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(".delete_me_formoffer").on("click", function(e) {
    e.preventDefault();
    var person = {
            id: $(this).data('id'),
            candel:$(this).data('candel'),
        }
         
     $.ajax({
        type     :'POST',
        cache    : false,
        url  : '../form-offer-project/delpic',
        dataType: 'json',
        data: person,
        success  : function(response) {  
           var o=JSON.parse(response); 
           $("#"+o.candel).remove();
        }
    }); 
});

$(".delete_me_inpr").on("click", function(e) {
    e.preventDefault();
    var person = {
            id: $(this).data('id'),
            candel:$(this).data('candel'),
        }
         
     $.ajax({
        type     :'POST',
        cache    : false,
        url  : '../form-order-in-pr/delpic',
        dataType: 'json',
        data: person,
        success  : function(response) {  
           var o=JSON.parse(response); 
           $("#"+o.candel).remove();
        }
    }); 
});

$(".show_me").on("click", function(e) {
    e.preventDefault();  
    var a = $("<a>").attr("href", $(this).data('url')).attr("download", $(this).data('url')).appendTo("body");

    a[0].click();
    
    a.remove();
});

