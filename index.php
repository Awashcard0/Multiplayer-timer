<!DOCTYPE html>
<html lang="en">
  <body  onload="onload()">
<head>
<script type="text/javascript"></script>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<?php
//$name = $_SERVER['HTTP_X_REPLIT_USER_NAME'];
//$name = $_COOKIE['userName'];
//$roles = $_SERVER['HTTP_X_REPLIT_USER_ROLES'];
//$id = $_SERVER['HTTP_X_REPLIT_USER_ID'];
//if ($name) {
  //echo 'Hello, '.$name.'!';
//}
//if (!($name)) {
  //echo "<script>window.location.href = 'login.php';</script>"; 
//}


  //if($name == '') {echo "<script>window.location.href = 'login.php';</script>";}

    //if($name == 'null') {echo "<script>window.location.href = 'login.php';</script>";}

?>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Cache-Control" content="no-transform,no-siteapp,no-cache,no-store,must-revalidate,max-age=0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="author" content="Vertex Studio Official" />
    <meta name="robots" content="index,follow" />
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="google" content="notranslate" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,viewport-fit=cover" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format detection" content="telephone=no,email=no,adress=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <title>Bozo network</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/ripple.css" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="favicon.png" />
    <link rel= "apple-touch-startup-image" href= "favicon.png" />
    <script>document.oncontextmenu=function(){return false}</script>
  </head>
  <body>
    <div class="bg" id="hello">
    <script src="js/bg.js"></script>
      <div class="chatBase">
        <div id="msgBox"></div>
        <div id="hide">
          <input value='Type here' onFocus="value = value == defaultValue ? '' : value;" onBlur="value = value == '' ? defaultValue : value;"  id="inputMessage" type="text" autocomplete="off" />
          <span id="sub" class="waves-effect waves-light" onclick="send();">Send</span>
        </div>
      </div>
    </div>
<audio id="myAudio">
  <source src="audio.mp3" type="audio/mpeg">
  
</audio>
    <script>
var x = document.getElementById("myAudio"); 
      
      function autoScroll() {
        msgBox.scrollTop = msgBox.scrollHeight;
        msgBox.style.scrollBehavior = 'smooth';
        x.play();
      }

      function getMessages(result) {
        let scroll = false;
        result = result.split('͘');
        msgs = [];
        for(let line of result) {
          let timestamp = line.slice(0, 13);
          let rest = line.slice(13);
          
          if (timestamp) {
            let hour = new Date(+timestamp).getHours();
            let min = new Date(+timestamp).getMinutes();
            let month = new Date(+timestamp).getMonth();
            let date = new Date(+timestamp).getDate();
            min = min < 10 ? '0' + min : min;
            let time = ++month + "/" + date + "&nbsp;&nbsp;" + hour + ":" + min +"&nbsp;&nbsp;";
            rest = rest.replaceAll('<', '&lt;');
            msgs.push(time + rest);
          }
        }

        if (msgs.toString().split("​").length-1 != msgBox.innerHTML.split("​").length-1) {
          scroll = true;
        }

        msgs2 = [];
        msgs.forEach((msg) => {
          msgs2.push('<div style="border-bottom:1px solid rgba(255,255,255,0.6);padding:10px;font-size:20px" onclick="reply(this.innerText)">' + msg + '</div>')
        });
        msgBox.innerHTML = msgs2.join('');
        if (scroll) autoScroll();
      }
      function reply(all) {
        let x = all.indexOf(' ');
        let y = all.indexOf('：');
        let name = all.slice(x+1,y);
        let z = document.getElementById('inputMessage');
        z.focus();
        if (z.value.slice(0, 12) != 'Replying to ') {
          z.value = 'Replying to @' + name + ': ' + z.value;
        } else {
          z.value = 'Replying to @' + name + ': ' + z.value.slice(z.value.indexOf(':') + 2);
        }
      }

      if ('EventSource' in window) {
        const source = new EventSource('data.php');
        source.onmessage = function(e) {
          getMessages(e.data);
        }
      } else {
        alert("SSE is not supported. Please use another browser. ")
      }

    </script>
    <script>
      var hide = document.getElementById("hide");
      //inputMessage.addEventListener("keyup", function(event) {
			//  if (event.key === 'Enter') {
       //   sub.click();
		 //   }
	    });
      function sendBtn() { 
        let z = document.getElementById('inputMessage');
        hide.style.visibility = 'hidden';
setTimeout(function(){
   hide.style.visibility = 'visible';
  z.focus();
}, 1500);
        sub.style.backgroundColor = '#39ab39';
        sub.childNodes[0].nodeValue = 'Sent!';
        setTimeout(() => {
          sub.style = '';
          sub.childNodes[0].nodeValue = 'Send';
          sub.onclick = function() {
            send();
          }
        }, 1500)
      }
      
      function send() {
        let contentinput = inputMessage.value;
        if(contentinput == 'Type here' || contentinput.trim().length == 0) return;
        if(contentinput.length > 100){
          alert('Your message is too long! ')
          return;
        }
        
        let concat = document.createElement('form');
        concat.action = 'transfer.php';
        concat.method = 'POST';
        concat.target = 'frameName';
        concat.enctype = 'multipart/form-data';
        //localStorage.name = nameinput;
        //iframe
        inputMessage.focus();
        inputMessage.value = '';

        let time = Math.floor(new Date().getTime());
        //let censored = time + ' ' + nameinput + '：' + contentinput;
        concat.innerHTML = '<input style="display: none;" value="' + time + '" name="time">';
        concat.innerHTML += '<input style="display: none;" value="' + contentinput + '" name="msg">'
        document.body.append(concat);
        concat.submit();
        sendBtn();
      }
    </script>
    <script src="js/ripple.js"></script>
    <iframe name="frameName" style="display:none;"></iframe>
    <script>

function start() {
	nice = prompt("What to change tab title too?");
	 if (nice === 'null') {
         document.title = "Chat";
    } else {
        document.title = nice;
		  
    }
	
	}

      function logout() {
        document.cookie = "userName=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        window.location.href = '/login.php';

      }

      function onload() {
     
        hide.style.visibility = 'hidden';
        
      }
    </script>
  </body>
</html>
