<!DOCTYPE html>
<html>
<head>
	<title>FooTable</title>
   <link href="FooTable/css/footable.core.css" rel="stylesheet" type="text/css" />
   <link href="FooTable/css/footable.metro.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div><input id="filter" type="text"></div>
<table id="datos" class="footable" data-filter="#filter" data-page-size="5" data-page-navigation=".pagination" >
  <thead>
    <tr>
      <th data-toggle="true">Nombre</th>
      <th data-sort-ignore="true">Apellido</th>
      <th data-hide="phone,tablet">Correo</th>
      <th data-toggle="true">Nombre</th>
      <th data-sort-ignore="true">Apellido</th>
      <th data-hide="phone,tablet">Correo</th>
      <th data-toggle="true">Nombre</th>
      <th data-sort-ignore="true">Apellido</th>
      <th data-hide="phone,tablet">Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
    </tr>
    <tr>
      <td>Gothen Antonio</td>
      <td>544-776655</td>
      <td>Gothen@mysite.com</td>
      <td>Gothen Antonio</td>
      <td>544-776655</td>
      <td>Gothen@mysite.com</td>
      <td>Gothen Antonio</td>
      <td>544-776655</td>
      <td>Gothen@mysite.com</td>
    </tr>
    <tr>
      <td>Felix Alexander</td>
      <td>555-99911</td>
      <td>Felix@crazy.com</td>
    </tr>
    <tr>
      <td>Felix Alexander</td>
      <td>555-99911</td>
      <td>Felix@crazy.com</td>
    </tr>
      <tr>
      <td>Felix Alexander</td>
      <td>555-99911</td>
      <td>Felix@crazy.com</td>
    </tr>
    <tr>
      <td>Felix Alexander</td>
      <td>555-99911</td>
      <td>Felix@crazy.com</td>
    </tr>
    <tr>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
      <td>Aaron David</td>
      <td>555-12345</td>
      <td>Aaron@home.com</td>
    </tr>

   </tbody>
  <tfoot class="hide-if-no-paging">
    <tr>
      <td colspan="9">
        <div class="pagination pagination-centered"></div>
      </td>
    </tr>
  </tfoot>
</table>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <script src="FooTable/js/footable.js" type="text/javascript"></script>
  <script src="FooTable/js/footable.paginate.js" type="text/javascript"></script>
  <script src="FooTable/js/footable.filter.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function () {    
        $('.footable').footable();     
});
</script>
</body>
</html>