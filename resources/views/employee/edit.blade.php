<html>
  <head>
    <title> EDIT </title>
    <script type="text/javascript" src="{{ URL::to('js/validate.js') }}"></script>
  </head>

  <body>
    <form method="post">
        <table>
          <tr>
            <td colspan="3" align="middle"><button><a href="{{route('employee.index')}}">BACK</a></button>
          </tr>
          <tr>
            <td> Company Name: </td>
            <td><input type="text" name="a" id="a" value="{{$info[0]->name}}"> <td>
            <td> <span id='at'> </span> </td>
          </tr>
          <tr>
            <td> Job Title: </td>
            <td><input type="text" name="b" id="b"  value="{{$info[0]->title}}"> <td>
            <td> <span id='bt'> </span> </td>
          </tr>
          <tr>
            <td> Job Location: </td>
            <td><input type="text" name="c" id="c"  value="{{$info[0]->location}}"> <td>
            <td> <span id='ct'> </span> </td>
          </tr>
          <tr>
            <td> Salary: </td>
            <td><input type="text" name="d" id="d"  value="{{$info[0]->salary}}"> <td>
            <td> <span id='dt'> </span> </td>
          </tr>
          <tr>
            <td colspan="2" align="middle"><input type="submit" name="add" value="PROCEED" onclick="return employee()"></td>
          </tr>
          <tr>
            <td colspan="3" align="middle"><button><a href="{{route('logout.execute')}}">LOGOUT</a></button>
          </tr>
        </table>
    </form>
  </body>

</html>
