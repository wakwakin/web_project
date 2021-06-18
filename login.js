window.onload = initAll
var xhr = false
var usernameArray = new Array()

function initAll()
{
  document.getElementById("username").onblur = searchSuggest
  document.getElementById("loginButton").disabled = true

  if (window.XMLHttpRequest)
  {
    xhr = new XMLHttpRequest()
  }
  else
  {
    if (window.ActiveXObject)
    {
      try
      {
        xhr = new ActiveXObject("Microsoft.XMLHTTP")
      }
      catch (e) {}
    }
  }

  if (xhr)
  {
    xhr.onreadystatechange = setusernameArray;
    xhr.open("GET", "users.xml", true)
    xhr.send(null)
  }
  else
  {
    alert("Couldn't create an XMLHttpRequest")
  }
}

function setusernameArray()
{
  if (xhr.readyState == 4)
  {
    if (xhr.status == 200)
    {
      if (xhr.responseXML)
      {
        var allName = xhr.responseXML.getElementsByTagName("user")
        for (var i = 0; i < allName.length; i++)
        {
          usernameArray[i] = allName[i].getElementsByTagName("username")[0].firstChild.data
        }
      }
    }
    else
    {
      alert("Problem with the request " + xhr.status)
    }
  }
}

function searchSuggest()
{
  var str = document.getElementById("username").value
  document.getElementById("usernameValid").className = "hidden"
  found = 0
  for (var i = 0; i < usernameArray.length; i++)
  {
    var thisName = usernameArray[i]

    if (str.length > 0)
    {
      if (thisName == str)
      {
        document.getElementById("usernameValid").className = "hidden"
        document.getElementById("loginButton").disabled = false
        document.getElementById("registerButton").disabled = true
        found = 1
      }
      else
      {
        document.getElementById("usernameValid").className = "used"
        document.getElementById("loginButton").disabled = true
        document.getElementById("registerButton").disabled = false
      }
    }

    if (found == 1)
    {
      break
    }
  }
}
