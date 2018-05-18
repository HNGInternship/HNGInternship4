<?php
   $result = $conn->query("Select * from secret_word LIMIT 1");
   $result = $result->fetch(PDO::FETCH_OBJ);
   $secret_word = $result->secret_word;
   $result2 = $conn->query("Select * from interns_data where username = 'Marvelous'");
   $user = $result2->fetch(PDO::FETCH_OBJ);
?> 
<?php
    try {
        $sql = 'SELECT * FROM secret_word';
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    $secret_word = $data['secret_word'];
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST['user-input'];
        $temp = explode(':', $data);
        $temp2 = preg_replace('/\s+/','', $temp[0]);
        
        if($temp2 === 'train'){
            train($temp[1]);
        }elseif($temp2 === 'aboutbot') {
            aboutbot();
        }elseif($temp2==='help'){
            help();
        }elseif($temp2 === 'version'){
            echo "<div id='result'> <b>Marvelous v 1.0</b></div>";
        }else{
            getAnswer($temp[0]);
        }
    }
  ##About Bot
    function aboutbot() {
        echo "<div id='result'><strong>Holla! I'm Marvelous' bot. How may I be of help? </strong></div>";
    }
   function help(){
   echo "<div id ='result'>Type <b>about</b> to know about me.<br/>Type <b>version</b> to know my version.<br/>To train me,use this format:<b>train:question#answer#password</b> where password is password </div>";
   
   }
  
  ##Train Bot
    function train($input) {
        $input = explode('#', $input);
        $question = trim($input[0]);
        $answer = trim($input[1]);
        $password = trim($input[2]);
        if($password == 'password') {
            $sql = 'SELECT * FROM chatbot WHERE question = "'. $question .'" and answer = "'. $answer .'" LIMIT 1';
            $q = $GLOBALS['conn']->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
            $data = $q->fetch();
            if(empty($data)) {
                $training_data = array(':question' => $question,
                    ':answer' => $answer);
                $sql = 'INSERT INTO chatbot ( question, answer)
              VALUES (
                  :question,
                  :answer
              );';
                try {
                    $q = $GLOBALS['conn']->prepare($sql);
                    if ($q->execute($training_data) == true) {
                        echo "<div id='result'>Thanks for your lessons! </br>
      </div>";
                    };
                } catch (PDOException $e) {
                    throw $e;
                }
            }else{
                echo "<div id='result'>Oops! I think I've been taught this already.</div>";
            }
        }else {
            echo "<div id='result'>Incorrect password. Can you please try again?</br>Try Again!</div>";
        }
    }
    function getAnswer($input) {
        $question = $input;
        $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '"';
        $q = $GLOBALS['conn']->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetchAll();
        if(empty($data)){
            echo "<div id='result'>I'm not sure I understand this yet. </br>I see those words of yours, but I don't understand them yet. Marveloius would like you to train me. 
</br>Can you please teach me by typing train:question#answer#passwor
</br>You fit type <b>help</b> to know more about me.</div>";
        }else {
            $rand_keys = array_rand($data);
            echo "<div id='result'>". $data[$rand_keys]['answer'] ."</div>";
        }
    }
    ?>
<!DOCTYPE HTML>
<html
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/3.3.4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://static.oracle.com/cdn/jet/v4.1.0/default/css/alta/oj-alta-min.css">
    <script type="text/javascript" src="https://static.oracle.com/cdn/jet/v4.1.0/3rdparty/require/require.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
    <title>Marvelous</title>
<style>
  #bodybox {
  margin: auto;
  max-width: 550px;
  font: 15px arial, sans-serif;
  background-color: white;
  border-style: solid;
  border-width: 1px;
  padding-top: 10px;
  padding-bottom: 15px;
  padding-right: 15px;
  padding-left: 15px;
  box-shadow: 3px 3px 3px grey;
  border-radius: 10px;
}
#chatborder {
  border-style: solid;
  background-color: #0000ff;
  border-width: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
  margin-left: 10px;
  margin-right: 25px;
  padding-top: 15px;
  padding-bottom: 20px;
  padding-right: 15px;
  padding-left: 10px;
  border-radius:15px;
}
.chatlog {
   font: 10px arial, sans-serif;
}
#chatbox {
  font: 10px arial, sans-serif;
  height: 15px;
  width: 100%;
}
.chat p.Marvelous{
      float: left;
      font-size: 14px;
      padding: 20px;
      border-radius: 0px 50px 50px 50px;
      background-color: #b0bfff;
     max-width: 250px;
     clear: both;
    display: inline-block;
    margin-bottom: 0px !important;
      margin-top: 2px !important;
    }
.chat {
      position: relative;
      overflow: auto;
      overflow-x: hidden;
      overflow-y:absolute;
      padding: 0 35px 35px;
      border: none;
      margin-bottom: 0px !important;
      margin-top: 2px !important;
      max-height: 300px;
      -webkit-justify-content: flex-end;
      justify-content: flex-end;
     -webkit-flex-direction: column;
      flex-direction: column;
       }
  .chat p.me{
        float: right;
        font-size: 12px;
        padding: 20px;
        border-radius: 20px 0px 20px 20px;
        background-color: #efc940;
        color: black;
        max-width: 250px;
        clear: both;
        margin-bottom: 0px !important;
        margin-top: 2px !important;
        }
  .input {
        padding: 0 35px 35px;
        height: 50px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
  .chat-btn{
          border: none;
          outline: 0;
          display: inline-block;
          color: white;
          background-color: #000;
          text-align: center;
          margin: auto;
          cursor: pointer;
          max-width: 50%;
          font-size: 18px;
        }
.chat-btn:hover, a:hover{
         opacity: 0.5;
        }
.modal-content{
      background-color: #fff;
      }
h5{
  background-color: #ffffff;
  margin-left: 15px;
}     
.img
{
   align : "center";
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: Georgia, 'Times New Roman', Times, serif;
  background: wheat;
}
.title {
  color: grey;
  font-size: 18px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
button:hover, a:hover 
{
  opacity: 0.7;
  }
  h1{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 100%;
    text-align: center;
    color:black;
    font-weight: bold;
}
body
{
  background-image: url("./images/back.jpg");
  text-align:center; font-family: Georgia, 'Times New Roman', Times, serif;
  
}
</style>
</head>
<body>

<div class="card">
<img src="http://res.cloudinary.com/marvelous/image/upload/b_rgb:3b2f2f,c_fill,h_2653,w_2456/a_0/v1524660197/DSC_0772.jpg" alt="Marvelous" style="width:100%">
<h1>Ikechi Marvelous</h1>
  <p class="title">Programmer</p>
  <p>Slack: Marvelous</p>
  
  <p class="title">Full stack Programmer</p>
 
  <div style="margin: 24px 0;">
  <a target="_blank" title="follow me on twitter" href="http://www.twitter.com/MarvelIkechi"><img alt="follow me on twitter" src="http://res.cloudinary.com/marvelous/image/upload/v1525257457/twitter_40x40.png" border=0></a>
  <a target="_blank" title="find us on Facebook" href="https://www.facebook.com/marvelike"><img alt="follow me on facebook" src="http://res.cloudinary.com/marvelous/image/upload/v1525257457/facebook_40x40.png" border=0></a>
  <a target="_blank" title="follow me on LinkedIn" href="https://www.linkedin.com/in/marvelous-ikechi-8000a7155"><img alt="follow me on LinkedIn" src="http://res.cloudinary.com/marvelous/image/upload/v1525257457/linkedin.png" border=0></a>
  <a target="_blank" title="follow me on Git" href="https://www.github.com/marvelike"><img alt="follow me on Git" src="http://res.cloudinary.com/marvelous/image/upload/v1525257457/git.png" border=0></a>
  
 </div>

<p><button>Contact<a href="#"></a></button></p>
</div>
<body>
  <div>
  <div id='bodybox'>
  <div id='chatborder'
    <h1 id="chatlog7" class="chatlog">Hello, I'm Marvelous' bot</h1> </div>
          <button class="btn col-sm-offset-5 chat-btn" data-toggle='modal' data-target='#chatModal'><i class="fa fa-comment-alt">chat</i></button>
          </div>
          <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="chatModalLabel"><b>Marvelous</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body "  > 
                  <div class="chat" id="chat">
                    <p class="Marvelous">Hi! My name na Marvelous.<br>i sabi something well well ask me any question,my madam want you to teach me more about javascript,.</p>
                    <p class="Marvelous">Anything you tell me to do i go do am,Assurance cover you.<br> You fit type Hello make we start from there.</p>
                    <p class="Marvelous">You fit train me by typing "train:question#answer#password" The Password na: <b>password </p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="chat-input">                  <form action="" method="post" id="user-input-form">
                    <div class="input-group">
                      <input type="text" class="form-control" name="user-input" id="user-input" class="user-input" placeholder="Ask me your questions"><span class="input-group-addon"><button class="btn btn-primary" id="send"><i class="fa fa-send"></i></button></span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script>
            var outputArea = $("#chat");
            $("#user-input-form").on("submit", function(e) {
              e.preventDefault();
              var message = $("#user-input").val();
              outputArea.append(`<p class='me'>${message}</p>`);
              $.ajax({
                url: 'profile.php?id=puenehfaith',
                type: 'POST',
                data:  'user-input=' + message,
                success: function(response) {
                  var result = $($.parseHTML(response)).find("#result").text();
                  setTimeout(function() {
                    outputArea.append("<p class='Marvelous'>" + result + "</p>");
                    $('#chat').animate({
                      scrollTop: $('#chat').get(0).scrollHeight
                    }, 1500);
                  }, 250);
                }
              });
              $("#user-input").val("");
            });
          </script> 
        </div> 
    </body>
</html>