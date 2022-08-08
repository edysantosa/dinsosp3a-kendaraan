require('./dinsosp3a');
import moment from 'moment';
import 'moment/locale/id' ; // without this line it didn't work
moment.locale('id');


var up = false;
var lastPosition;




$(document).ready(function() {
    currentTime();



  var interval = setInterval(function () {
      var $container = $("html, body");
      var position = $container.scrollTop();
      var height = $container[0].scrollHeight;

      // If we haven't moved, switch direction
      if(position === lastPosition) up = !up;
      lastPosition = position;

      if (up) {
          // Going up
          $container.scrollTop(position - 10);
      } else {
          // Going down
          $container.scrollTop(position + 10);
      }
  }, 500);
});

function currentTime() {
  document.getElementById("clock").innerText = moment().format('LLLL'); 
  var t = setTimeout(function(){ currentTime() }, 6000); 
}

