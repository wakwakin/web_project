document.getElementById("search").addEventListener("keyup", function()
{
  for (var i = 0; i < document.getElementsByClassName("product").length; i++)
  {
    if (!document.getElementsByClassName("product")[i].getAttribute("name").toLowerCase().includes(document.getElementById("search").value.toLowerCase()))
    {
      document.getElementsByClassName("product")[i].style.display = "none"
    }
    else
    {
      document.getElementsByClassName("product")[i].style.display = "flex";
    }
  }
})
