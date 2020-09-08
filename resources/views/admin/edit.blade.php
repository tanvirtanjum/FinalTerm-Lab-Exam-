<html>
  <head>
    <title> EDIT </title>
  </head>

  <body>
    <form method="post">
        <table>
          <tr>
            <td> Full Name: </td>
            <td><input type="text" name="a" value="{{$info[0]->ename}}"> <td>
          </tr>
          <tr>
            <td> Designation: </td>
            <td><input type="text" name="f" placeholder="1/2"  value="{{$info[0]->ename}}"> <td>
          </tr>
          <tr>
            <td> Company Name: </td>
            <td><input type="text" name="b"  value="{{$info[0]->cname}}"> <td>
          </tr>
          <tr>
            <td> Contact: </td>
            <td><input type="text" name="c"  value="{{$info[0]->num}}"> <td>
          </tr>
          <tr>
            <td> Username: </td>
            <td><input type="text" name="d"  value="{{$info[0]->uname}}"> <td>
          </tr>
          <tr>
            <td> Password: </td>
            <td><input type="text" name="e"  value="{{$info[0]->pass}}"> <td>
          </tr>
          <tr>
            <td colspan="2" align="middle"><input type="submit" name="add" value="PROCEED"></td>
          </tr>
        </table>
    </form>
  </body>

</html>
