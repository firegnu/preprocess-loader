<!DOCTYPE html>
<html>
<head>
  <!-- @if NODE_ENV!='production' -->
  <title>dev title</title>
  <!-- @endif -->

  <!-- @if NODE_ENV!='development' -->
  <title>prod title</title>
  <!-- @endif -->

</head>
<body>
  <h1><!-- @echo firstOption --></h1>
  <h1><!-- @echo secondOption --></h1>
  <h1><!-- @echo FAKEHOME --></h1>
  <h2><!-- @include include.txt --></h2>
</body>
</html>
