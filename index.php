
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Chat Room </title>
    
    <script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script>
var username = null, start = 0, url = 'http://localhost/chat2/chat.php';
$(document).ready(function() {
    username = prompt("Enter your name, please");
     $('form').click(function (e) {
      $.post(url, {
        msgbox: $('#msgbox').val(), 
        username: username 
      });
      $('#msgbox').val('');
      return false;
    }) 
  })
  </script>

<style>
body{
    margin:0;
    overflow:hidden;
    font-family: "Arial";
    }
    
    #chatbox{
        height:88vh;
        overflow:hidden;
        margin:10px auto;
        padding: 10px;
        text-align:left;
    
        background-image: url(https://www.solidbackgrounds.com/images/2560x1440/2560x1440-pale-lavender-solid-color-background.jpg);
    
    
    form{
    display: flex;
    
    }
    
    input{
    padding: 10px;
    margin: 10px;
    border: 1px solid;
    border-radius: 5px;
    
    }
    
    #msgbox{
    flex:2;
    
    }
      </style>
  </head>


<body>

 
<div id="wrapper">
<div id="history">

<div id="chatbox">
    <form action="" method="POST">
        <input type="text" id="msgbox" autocomplete="off" autofocus>
    <input type="submit" value="Send">
    
    </form>
</div> 

</div>

</div>

<script>

$(document).ready(function(){
  loadChat();
});


</script>

</body>
</html>
