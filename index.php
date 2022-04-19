<?

$envs = getenv();

?>

<table style="width: 428.93px;">
<thead>
  <tr>
      <th scope="col" style="width: 220px;">KEY</th>
      <th scope="col" style="width: 220px;">VALUE</th>
  </tr>
</thead>
<tbody>

<?
foreach ($envs as $key => $value) {
?>
<tr>
<td style="width: 220px;"><? echo $key ?></td>
<td style="width: 220px;"><? echo $value ?></td>
</tr>
<?
}
?>

</tbody>
</table>

