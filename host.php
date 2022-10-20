<title>Host</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/ripple.css" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="favicon.png" />
    <link rel= "apple-touch-startup-image" href= "favicon.png" />
<p id="time">Time</p>
<button onclick="ok()">Start</button>
</div>
<script>
  var time = prompt("How long in sec")
  var x = document.getElementById("time");
  
  function ok() {
    alert("Hi")
    //time = prompt("How long in sec")
    setTimeout(function(){
    //let contentinput = inputMessage.value;
        
        let concat = document.createElement('form');
        concat.action = 'transfer.php';
        concat.method = 'POST';
        concat.target = 'frameName';
        concat.enctype = 'multipart/form-data';
        //localStorage.name = nameinput;
        //iframe
        //inputMessage.focus();
        //inputMessage.value = '';

        concat.innerHTML = '<input style="display: none;" value="' + time + '" name="time">';
        concat.innerHTML += '<input style="display: none;" value="' + time + '" name="msg">';
        document.body.append(concat);
        concat.submit();
        x.innerHTML = time
        time = time - 1;
        ok();
      }, 1000);
  }
</script>