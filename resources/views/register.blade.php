<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Register</title>
  </head>
  <body>
    <div>
      <h3>Sign Up Form</h3><br>

      <form action="/welcome" method="post">
        @csrf
        <label for="first_name">First name:</label><br><br>
            <input type="text" name="first_name" value=""><br>
        <label for="last_name">Last name:</label><br><br>
            <input type="text" name="last_name" value=""><br><br>

          <label for="">Gender:</label><br><br>
            <input type="radio" name="gender" value="0">Male<br>
            <input type="radio" name="gender" value="1">Female<br>
            <input type="radio" name="gender" value="2">Other<br><br>

          <label for="">Nasionality:</label><br><br>
            <select class="" name="">
              <option value="indonesia">indonesia</option>
              <option value="singapour">Singapour</option>
              <option value="malaysia">Malaysia</option>
              <option value="australia">Australia</option>
            </select>
<br><br>
          <label for="">Language Spoken:</label><br><br>
            <input type="checkbox" name="ind" value="">Bahasa Indonesia <br>
            <input type="checkbox" name="eng" value="">English <br>
            <input type="checkbox" name="oth" value="">Other <br><br>

          <label for="">Bio:</label><br>
            <textarea name="name" rows="8" cols="20"></textarea>
<br><br>
            <input type="submit" name="" value="Sign Up">
        </form>
    </div>

  </body>
</html>
