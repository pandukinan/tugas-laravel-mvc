<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulir pendaftran</title>
  </head>
  <body>
    <form action="/sapa" method="post">
      @csrf
      <input type="text" name="nama">
      <input type="submit" value="masuk">

    </form>
  </body>
</html>
