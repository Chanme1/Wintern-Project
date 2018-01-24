var team = document.getElementsByName("Team_name");
var teamForm = document.getElementsByName("teamForm");
function Validation() { "use strict"; if (document.form.teamForm.Team_name.value===null)
{
  return false;
}
else
{
  return true;
}
new Validation();
}

window.onload = function Check()
{
var input_team_name = document.getElementById("team_name");
input_team_name.required = "true";
input_team_name.pattern = "[a-zA-Z0-9]+";
input_team_name.title = "Please enter a team name";
};

function changeMe(sel){
sel.style.color = "#000";
}

function changeMe(sel){
sel.style.color = "#000";
};
