<html>
  <head>
    <title> ADMIN HOME </title>
    <script type="text/javascript" src="{{ URL::to('js/validate.js') }}"></script>
  </head>

  <body>
    <form method="post">
      <table>
        <td>
          <table>
            <tr>
              <td> Full Name: </td>
              <td><input type="text" name="a" id='a'> <td>
              <td> <span id='at'> </span> </td>
            </tr>
            <tr>
              <td> Designation: </td>
              <td><input type="text" name="f" placeholder="1/2" id='f'> <td>
              <td> <span id='ft'> </span> </td>
            </tr>
            <tr>
              <td> Company Name: </td>
              <td><input type="text" name="b" id='b'> <td>
              <td> <span id='bt'> </span> </td>
            </tr>
            <tr>
              <td> Contact: </td>
              <td><input type="text" name="c" id='c'> <td>
              <td> <span id='ct'> </span> </td>
            </tr>
            <tr>
              <td> Username: </td>
              <td><input type="text" name="d" id='d'> <td>
              <td> <span id='dt'> </span> </td>
            </tr>
            <tr>
              <td> Password: </td>
              <td><input type="text" name="e" id='e'> <td>
              <td> <span id='et'> </span> </td>
            </tr>
            <tr>
              <td colspan="3" align="middle"><input type="submit" name="add" value="ADD USER" onclick='return admin()'></td>
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
              <td> EMPLOYEE NAME </td>
              <td> COMPANY NAME </td>
              <td> CONTACT </td>
              <td> USERNAME </td>
              <td> PASSWORD </td>
              <td> ACTION </td>
            </thead>
            <tbody>
              @for($i=0; $i != count($info); $i++)
          		<tr>
          			<td>{{$info[$i]->id}}</td>
          			<td>{{$info[$i]->ename}}</td>
                <td>{{$info[$i]->cname}}</td>
          			<td>{{$info[$i]->num}}</td>
                <td>{{$info[$i]->uname}}</td>
          			<td>{{$info[$i]->pass}}</td>
          			<td>
          				<a href="{{route('admin.edit', [$info[$i]->id])}}">Edit</a> |
          				<a href="{{route('admin.delete', [$info[$i]->id])}}">Delete</a>
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
