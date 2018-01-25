<html>
	<head>
    <div class="container">
      <header>
        <?php include 'header.php';?>
      </header>

      <profile>
        <div class="profile">
          <hr><img src="images/galaxy.jpg" alt="profile" height="230px" width="230px">
          <h1 class ="name"> Team Galaxy </h1>
          <p class="information">
            Bots in <lang>C++</lang>
            <br> Speak <lang>English</lang></br>
          </p><hr>
          <p class ="ranking">
            <img src="images/badge.png" alt="badge" height="25px" width="25px">
            <b>Rank 2, Diamond Tier</b>
          </p>
          <p class = "stats">Rank Bots Games</p>
          <h1 style="word-spacing:50px; color: white; margin-top:0;">5 175 376</h1><hr>
        </div>
      </profile>

      <content>
        <ul class = "navigation" style="margin-left: 200px;">
          <li class = "contentnav"><a href = "edit.php">Edit Profile</a></li>
          <li class = "contentnav"><a href = "edit_content_team.php">Edit Team Members</a></li>
        </ul>
        <h2 class = "Title"> Edit Team Members</h2><hr style = "margin-left: 85px; width: 79%;">
        <table border= '1' width='100%' id='theteam'>
          <tr>
            <th></th>
            <th>Members</th>
            <th>Rank</th>
          </tr>
          <tr>
            <td><a href = "#Delete"><img height = "25px" width = "25px" src = "images/delete.png"></a>
            <td>chanme1</td>
            <td><select>
              <option value="Leader">Leader</option>
              <option value="Member">Member</option>
            </select></td>
          </tr>
          <tr>
            <td><a href = "#Delete"><img height = "25px" width = "25px" src = "images/delete.png"></a>
            <td>chanme1</td>
            <td><select>
              <option value="Leader">Leader</option>
              <option value="Member" selected="selected">Member</option>
            </select></td>
          </tr>
          <tr>
            <td><a href = "#Delete"><img height = "25px" width = "25px" src = "images/delete.png"></a>
            <td>chanme1</td>
            <td><select>
              <option value="Leader">Leader</option>
              <option value="Member" selected="selected">Member</option>
            </select></td>
          </tr>
          <tr>
            <td><a href = "#Delete"></a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><a href = "#Delete"></a></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </content>
    </div>
		<button class="save" onclick="Validation()">SAVE</button>
    <link rel="stylesheet" type="text/css" href="CSS/user.css">
    <link rel="stylesheet" type="text/css" href="CSS/profile.css">
    <link rel="stylesheet" type="text/css" href="CSS/content.css">
    <link rel="stylesheet" type="text/css" href="CSS/content_nav.css">
  </head>
  <body>
