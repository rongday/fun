

// main.js
var client = new ZeroClipboard( document.getElementById("copy-btn") );

client.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  client.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    event.target.style.display = "none";
    //alert("Copied text to clipboard: " + event.data["text/plain"] );
    var alertleft = self.innerWidth/2-110 + "px";
    $(".alert-info").css("left", alertleft);
    $("#get-it").fadeToggle(1000).fadeToggle(1000);
  } );
} );