<title>Host - Multiplayer timer</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/ripple.css" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="favicon.png" />
    <link rel= "apple-touch-startup-image" href= "favicon.png" />
<p id="time" style="font-size: 40px;">Time</p>
<button onclick="ok()" style="font-size: 40px;">Start</button>
<button onclick="min()">Add 1 min</button>
<button onclick="fivemin()">Add 5 min</button>
<button onclick="tenmin()">Add 10 min</button>
<button onclick="coustm()" id="hide">Add custom</button>
<iframe name="fNam"></iframe>
</div>
<script>
  var time = 0
  var x = document.getElementById("time");
  var hide = document.getElementById("hide");
  
  function ok() {
    //alert("Hi")
    //time = prompt("How long in sec")
    setTimeout(function(){
    //let contentinput = inputMessage.value;
        
        let concat = document.createElement('form');
        concat.action = 'transfer.php';
        concat.method = 'POST';
        concat.target = 'fNam';
        concat.enctype = 'multipart/form-data';
        //localStorage.name = nameinput;
        //iframe
        //inputMessage.focus();
        //inputMessage.value = '';

        let t = Math.floor(new Date().getTime());
        concat.innerHTML = '<input style="display: none;" value="' + t + '" name="time">';
        concat.innerHTML += '<input style="display: none;" value="' + time + '" name="msg">';
        document.body.append(concat);
        concat.submit();
        
        x.innerHTML = time
        document.title = time + " - Host - Multiplayer timer";
        time = time - 1;
        ok();
      }, 1000);
  }

  function min() {
    time = time + 60
    x.innerHTML = time
    hide.style.visibility = 'hidden';
  }

  function coustm() {
    time = prompt("How long in sec")
    x.innerHTML = time
    hide.style.visibility = 'hidden';
  }

  function fivemin() {
    time = time + 300
    x.innerHTML = time
    hide.style.visibility = 'hidden';
  }

  function tenmin() {
    time = time + 600
    x.innerHTML = time
    hide.style.visibility = 'hidden';
  }
</script>
<style>
.hi {
  font-size: 40px;
}
</style>