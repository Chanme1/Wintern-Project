<html>
<head>
  <?php include 'header.php';?>
  <div class = "create_team_info">
    <br><h2 style = "float= left;"> CREATE A TEAM <div class="info">
      <img class ="info" src="info.png" alt="i" style="width:20px;">
      <span class="infotext">Form alliances and compete together against other teams.
        Chat and code together, and submit a bot as one. Fill the form with your preffered programming and spoken language.</span>
      </div></h2>
  <div class = "createteam" align="center">
    <div class = "form" id="form" align="center">
      <form id= TeamForm name = "teamForm">
        <br/><br/><br/>
        <label>Team Name:</label>
        <input id = "team_name" type = "text" name = "Team_name" placeholder = "Enter Team Name"/><br/><br/><br/>

        <label>Programming Language: </label>
        <select onchange="changeMe(this)" id = "prog_language" name = "prog_language">
          <option value = "C++">C++</option>
          <option value = "Java">Java</option>
          <option value = "C#">C#</option>
          <option value = "PHP">PHP</option>
          <option value = "Javascript">Javascript</option>
          <option value = "Python">Python</option>
          <option selected disabled>Select</option>
        </select><br/><br/><br/><br/>

        <label>Spoken Language:</label>
        <select onchange="changeMe(this)" = "spoken_language" name = "spoken_language">
          <option value = "English">English </option>
          <option value = "Spainish">Spainish</option>
          <option value = "Dutch ">Dutch</option>
          <option value = "French">French</option>
          <option value = "German">German</option>
          <option selected disabled>Select</option>
        </select><br/><br/><br/><br/>
        <button class="form_team" onclick="Validation()">Create Team</button>
      </form>
    </div>
  </div>
  </div>

  <link rel="stylesheet" type="text/css" href="CSS/create.css">
  <script src="js/create.js"></script>

</head>
<body>
