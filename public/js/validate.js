function admin()
{
  var a = document.getElementById('a').value;
  var b = document.getElementById('b').value;
  var c = document.getElementById('c').value;
  var d = document.getElementById('d').value;
  var e = document.getElementById('e').value;
  var f = document.getElementById('f').value;

  var err = false;

  if(a.length < 1)
  {
    err = true;
    document.getElementById("at").innerHTML = '&#10033';
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("at").innerHTML = '';
  }
  if(b.length < 1)
  {
    err = true;
    document.getElementById("bt").innerHTML = '&#10033';
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("bt").innerHTML = '';
  }
  if(c.length < 1)
  {
    err = true;
    document.getElementById("ct").innerHTML = '&#10033';
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("ct").innerHTML = "";
  }
  if(d.length < 1)
  {
    err = true;
    document.getElementById("dt").innerHTML = "&#10033";
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("dt").innerHTML = "";
  }

  if(e.length < 1)
  {
    err = true;
    document.getElementById("et").innerHTML = "&#10033";
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("et").innerHTML = "";
  }

  if(f.length < 1)
  {
    err = true;
    document.getElementById("ft").innerHTML = "&#10033";
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("ft").innerHTML = "";
  }

  if(!err)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function employee()
{
  var a = document.getElementById('a').value;
  var b = document.getElementById('b').value;
  var c = document.getElementById('c').value;
  var d = document.getElementById('d').value;

  var err = false;

  if(a.length < 1)
  {
    err = true;
    document.getElementById("at").innerHTML = '&#10033';
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("at").innerHTML = '';
  }
  if(b.length < 1)
  {
    err = true;
    document.getElementById("bt").innerHTML = '&#10033';
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("bt").innerHTML = '';
  }
  if(c.length < 1)
  {
    err = true;
    document.getElementById("ct").innerHTML = '&#10033';
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("ct").innerHTML = "";
  }
  if(d.length < 1)
  {
    err = true;
    document.getElementById("dt").innerHTML = "&#10033";
    //document.getElementById("at").innerHTML ="*";
  }
  else
  {
    //err = false;
    document.getElementById("dt").innerHTML = "";
  }

  if(!err)
  {
    return true;
  }
  else
  {
    return false;
  }
}
