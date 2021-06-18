$(document).ready(function()
{
  $("#navStore").css("color", "#c83349")
  $("#navStore").click(function()
  {
    hideAll();
    $("#store").css("display", "block")
    $("#navStore").css("color", "#c83349")
  })

  $("#navUser").click(function()
  {
    hideAll()
    $("#user").css("display", "flex")
    $("#navUser").css("color", "#c83349")
  })
})

function hideAll()
{
  $("#navStore").css("color", "#f9d5e5")
  $("#navUser").css("color", "#f9d5e5")
  $("#store").css("display", "none")
  $("#user").css("display", "none")
}
