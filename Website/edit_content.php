<html>
<head>
  <ul class = "navigation" style="margin-left: 200px;">
    <li class = "contentnav"><a href = "edit.php">Edit Profile</a></li>
    <li class = "contentnav"><a href = "edit_content_team.php">Edit Team Members</a></li>
  </ul>
  <h2 class = "Title"> Edit Profile</h2><hr style = "margin-left: 85px; width: 79%;">
  <div class = "createteam" align="center">
    <div class = "form" id="form" align="center">
      <form id= TeamForm name = "teamForm">
        <br/><br/><br/>
        <label>Team Name:</label>
        <input id = "team_name" type = "text" name = "Team_name" placeholder = "Enter Team Name"/><br/><br/><br/>

        <label>Programming Language: </label>
        <select onchange="changeMe(this)" id = "prog_language" name = "prog_language">
          <option value selected= "C++">C++</option>
          <option value = "Java">Java</option>
          <option value = "C#">C#</option>
          <option value = "PHP">PHP</option>
          <option value = "Javascript">Javascript</option>
          <option value = "Python">Python</option>
          <option disabled>Select</option>
        </select><br/><br/><br/><br/>

        <label>Spoken Language:</label>
        <select onchange="changeMe(this)" = "spoken_language" name = "spoken_language">
          <option value selected = "English">English </option>
          <option value = "Spainish">Spainish</option>
          <option value = "Dutch ">Dutch</option>
          <option value = "French">French</option>
          <option value = "German">German</option>
          <option disabled>Select</option>
        </select><br/><br/><br/><br/>
        <button class="form_team" onclick="Validation()">Save</button>
      </form>
    </div>
  </div>
  </div>
  <link rel="stylesheet" type="text/css" href="CSS/content.css">
  <link rel="stylesheet" type="text/css" href="CSS/content_nav.css">
  <link rel="stylesheet" type="text/css" href="CSS/edit.css">
  <script src="js/create.js"></script>
</head>
<body>
