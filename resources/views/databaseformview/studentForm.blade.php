<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">

  <title>Registration Form</title>
</head>
<body>

  <div class="container">

    <ul>
      @if($errors->any())
          @foreach($errors->all() as $message)
              <li>{{$message}}</li>
          @endforeach
      @endif
    </ul>

  <h1>Registration Form</h1>
  <form name="registration" class="registartion-form" method="post">
    @csrf
    <table>
      <tr>
        <td><label for="name">Name:</label></td>
        <td><input type="text" name="name" id="name" placeholder="your full name" value="{{old('name')}}"></td>
      </tr>

      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" name="email" id="email" placeholder="your email"></td>
      </tr>
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" name="password" id="password"></td>
      </tr>
      <tr>
        <td><label for="phoneNumber">Phone Number:</label></td>
        <td><input type="number" name="phoneNumber" id="phoneNumber"></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td>Male: <input type="radio" name="gender" value="male">
          Female: <input type="radio" name="gender" value="female">
          Other: <input type="radio" name="gender" value="other"></td>
      </tr>
      <tr>
        <td><label for="language">language</label></td>
        <td>
          <select name="language" id="language">
            <option value="">Select language</option>
            <option value="English">English</option>
            <option value="Gujarati">Gujarati</option>
            <option value="Hindi">Hindi</option>
            <option value="Sanskrit">Sanskrit</option>
            <option value="Other">Other</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="address">Address:</label></td>
        <td><textarea name="address" id="address" placeholder="Write a Full Address.."></textarea></td>
      </tr>
      <tr>
        <td><label for="zipcode">Pin Code:</label></td>
        <td><input type="number" name="pincode" id="zipcode"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" class="submit" value="Register" /></td>
      </tr>
    </table>
  </form>
    <table>
      <tr>
           <th>ID</th>
           <th>NAME</th>
           <th>Email</th>
           <th>Phonenumber</th>
           <th>Gender</th>
           <th>Language</th>
           <th>Address</th>
           <th>Pincode</th>
      </tr>
      <tr>
         @foreach($data as $dat)
             <tr>
                <td>{{$dat->id}}</td>
                <td>{{$dat->name}}</td>
                <td>{{$dat->email}}</td>
                <td>{{$dat->phonenumber}}</td>
                <td>{{$dat->gender}}</td>
                <td>{{$dat->language}}</td>
                <td>{{$dat->address}}</td>
                <td>{{$dat->pincode}}</td>

            </tr>
         @endforeach
    </tr>
    </table>
</div>


</body>
</html>