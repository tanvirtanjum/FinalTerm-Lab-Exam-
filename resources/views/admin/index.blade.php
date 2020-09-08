<html>
  <head>
    <title> ADMIN HOME </title>
  </head>

  <body>
    <form method="post">
      <table>
        <td>
          <table>
            <tr>
              <td> Full Name: </td>
              <td><input type="text" name="a"> <td>
            </tr>
            <tr>
              <td> Designation: </td>
              <td><input type="text" name="f" placeholder="1/2"> <td>
            </tr>
            <tr>
              <td> Company Name: </td>
              <td><input type="text" name="b"> <td>
            </tr>
            <tr>
              <td> Contact: </td>
              <td><input type="text" name="c"> <td>
            </tr>
            <tr>
              <td> Username: </td>
              <td><input type="text" name="d"> <td>
            </tr>
            <tr>
              <td> Password: </td>
              <td><input type="text" name="e"> <td>
            </tr>
            <tr>
              <td colspan="2" align="middle"><input type="submit" name="add" value="ADD USER"></td>
            </tr>
          </table>
        </td>
        <td>
          <table>
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
