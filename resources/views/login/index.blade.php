<html>
  <head>
    <title> LOGIN </title>
  </head>

  <body>
    <form method="post">
      <table>
        <tr>
          <td> Username: </td>
          <td><input type="text" name="a" required> <td>
        </tr>
        <tr>
          <td> Password: </td>
          <td><input type="password" name="b" required> <td>
        </tr>
        <tr>
          <td colspan="2" align="middle">{{session('_alert')}}</td>
        </tr>
        <tr>
          <td colspan="2" align="middle"><input type="submit" name="login" value="LOGIN"></td>
        </tr>
      </table>
    </form>
  </body>

</html>
