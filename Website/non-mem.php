<html>
<head>
  <div class="container">
    <header>
      <?php include 'header.php';?>
    </header>

    <profile>
      <div class="profile">
        <hr><img src="images/202372_1.jpg" alt="profile" height="230px" width="230px">
        <h1 class ="name"> Team Jerry </h1>
        <p class="information">
          Bots in <lang>Rust</lang>
          <br> Speak <lang>English</lang></br>
        </p><hr>
        <p class ="ranking">
          <img src="images/badge.png" alt="badge" height="25px" width="25px">
          No Rank, Bronze Tier
        </p>
        <p class = "stats">Rank Bots Games</p>
        <h1 style="word-spacing:50px; color: white; margin-top:0;">48.53 42 379</h1><hr>
      </div>
    </profile>

    <content>
      <h2 class = "Title"> Team Members </h2><hr style = "margin-left: 80px; width: 79%;">
      <table border= '1' width='100%' id='theteam'>
        <tr>
          <th>Member</th>
          <th>Stats</th>
          <th>Rank</th>
        </tr>
        <tr>
          <th>Jerry</th>
          <th>35.8</th>
          <th>Leader</th>
        </tr>
        <tr>
          <th>Beth</th>
          <th>30.3</th>
          <th>Member</th>
        </tr>
        <tr>
          <th>Summer</th>
          <th>28.3</th>
          <th>Member</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </table>
    </content>
    </div>

  <button id="myBtn" class="join">Join</button>
  <div id="myModal" class="modal">

    <div class="modal-content" style="border-radius: 5px;">
      <div class="modal-header">
        <span class="close">&times;</span>
        <div id="content"><h2>
          <span class="noneditable">To: Jerry</span>
        </div>
      </div>
      <div class="modal-body"  contenteditable="true">
        <p>I would like to join your alliance.</p>
        <div style= "text-align:right;" contenteditable = "false">
          <p> From: Bob</p>
        </div>
      </div>
      <div class="modal-footer">
      <button id="send" class="submit" align:"right" onclick="x()">Send</button>
    </div>
  </div>
</div>

  <link rel="stylesheet" type="text/css" href="CSS/content.css">
  <link rel="stylesheet" type="text/css" href="CSS/content_nav.css">
  <link rel="stylesheet" type="text/css" href="CSS/invite.css">
  <link rel="stylesheet" type="text/css" href="CSS/profile.css">
  <link rel="stylesheet" type="text/css" href="CSS/user.css">
  <script src="js/invite.js"></script>
</head>
<body>
