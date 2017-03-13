

// main.js
var client = new ZeroClipboard( document.getElementById("copy-btn") );

client.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  client.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    //event.target.style.display = "none"; //after press #copy-btn disapper
    //alert("Copied text to clipboard: " + event.data["text/plain"] );
    var alertleft = self.innerWidth/2-110 + "px";
    $(".alert-info").css("left", alertleft);
    $("#get-it").fadeToggle(1000).fadeToggle(1000);
  } );
} );

// $('a.choose-btn').click(function() {
//         $('#choose').val($($(this).attr("id")).val());
//         //$('#choose').attr('value', $($(this).attr("id")).val());
//         var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
//         $body.animate({
//             scrollTop: 300
//         }, 600);

// return false;
//     });
    
    
function showAlert(){
    var alertleft = self.innerWidth/2-110 + "px";
    $(".alert-info").css("left", alertleft);
    $("#get-it").fadeToggle(1000).fadeToggle(1000);
}    