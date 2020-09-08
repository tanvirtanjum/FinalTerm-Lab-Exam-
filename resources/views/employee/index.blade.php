<html>
  <head>
    <title> EMPLOYEE HOME </title>
    <script type="text/javascript" src="{{ URL::to('js/validate.js') }}"></script>
  </head>

  <body>
    <form method="post">
      <table>
        <td>
          <table>
            <tr>
              <td> Company Name: </td>
              <td><input type="text" name="a" id="a"> <td>
              <td><span id='at'> </span></td>
            </tr>

            <tr>
              <td> Job Title: </td>
              <td><input type="text" name="b" id="b"> <td>
              <td><span id='bt'> </span></td>
            </tr>
            <tr>
              <td> Job Location: </td>
              <td><input type="text" name="c" id="c"> <td>
              <td><span id='ct'> </span></td>
            </tr>
            <tr>
              <td> Salary: </td>
              <td><input type="text" name="d" id="d"> <td>
              <td><span id='dt'> </span></td>
            </tr>
            <tr>
              <td colspan="3" align="middle"><input type="submit" name="add" value="ADD JOB" onclick="return employee()"></td>
            </tr>
            <tr>
              <td colspan="3" align="middle"><button><a href="{{route('logout.execute')}}">LOGOUT</a></button>
            </tr>
          </table>
        </td>
        <td>
          <table border="2">
            <thead>
              <td> SL </td>
              <td> COMPANY NAME </td>
              <td> JOB TITLE </td>
              <td> JOB LOCATION </td>
              <td> SALARY </td>
              <td> ACTION </td>
            </thead>
            <tbody>
              @for($i=0; $i != count($info); $i++)
          		<tr>
          			<td>{{$info[$i]->id}}</td>
          			<td>{{$info[$i]->name}}</td>
                <td>{{$info[$i]->title}}</td>
          			<td>{{$info[$i]->location}}</td>
                <td>{{$info[$i]->salary}}</td>
          			<td>
          				<a href="{{route('employee.edit', [$info[$i]->id])}}">Edit</a> |
          				<a href="{{route('employee.delete', [$info[$i]->id])}}">Delete</a>
          			</td>
          		</tr>
          	  @endfor
            </tbody>
          </table>
        </td>
      </table>
    </form>
  </body>

</html>
