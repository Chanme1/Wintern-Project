<html>
<head>
  <ul class = "navigation">
    <li class = "contentnav"><a href = "#team">Team Members</a></li>
    <li class = "contentnav"><a href = "#games">Games & Logs</a></li>
    <li class = "contentnav"><a href = "#Analysis">Analysis</a></li>
  </ul>
  <h2 class = "Title"> Team Members </h2><hr style = "margin-left: 85px; width: 79%;">
  <table border= '1' width='100%' id='theteam'>
    <tr>
      <th>Member</th>
      <th>Stats</th>
      <th>Rank</th>
    </tr>
    <tr>
      <th>coolaid</th>
      <th>30.7</th>
      <th>Leader</th>
    </tr>
    <tr>
      <th>vitamin0</th>
      <th>25.2</th>
      <th>Member</th>
    </tr>
    <tr>
      <th>v8</th>
      <th>15.8</th>
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

  <button id="myBtn" class="invite">Invite</button>
  <div id="myModal" class="modal">

    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <div id="content"><h2>
          <span class="noneditable">To: </span>
          <input type="text" name="inviteform" placeholder="Input Username or Email"</h2>
        </div>
      </div>
      <div class="modal-body"  contenteditable="true">
        <p>Team Galaxy would like you to join their alliance.</p>
        <div style= "text-align:right;" contenteditable = "false">
          <p> From: Team Galaxy</p>
        </div>
      </div>
      <div class="modal-footer">
      <button id="send" class="submit" align: "right">Send</button>
    </div>
    </div>
  </div>

  <link rel="stylesheet" type="text/css" href="CSS/content.css">
  <link rel="stylesheet" type="text/css" href="CSS/content_nav.css">
  <link rel="stylesheet" type="text/css" href="CSS/invite.css">
  <script src="js/invite.js"></script>
</head>
<body>
