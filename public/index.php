<?php 
include '../src/bootstrap.php';
include 'includes/header.php';
$mtcars = $cms->mtcars()->getAll();
var_dump($mtcars['stats']['mpg']['mean']);
?>
<h1>MT Cars</h1>
<table id="mainTable">
	<caption>
		Statistics for cars from <?= date('Y') - 1981 ?> years ago:
	</caption>
	<thead>
		<tr>
			<th>Make/Model</th>
			<th>MPG</th>
			<th>Cylnders</th>
			<th>Disp</th>
			<th>Horsepower</th>
			<th>Rear Axle</th>
			<th>Weight (1000 lbs)</th>
			<th>Quarter Sec</th>
			<th>Engine Shape</th>
			<th>Transmission</th>
			<th># Forward Gears</th>
			<th># Carbs</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($mtcars['data'] as $mtcar){ ?>
			<tr>
				<th><?= $mtcar['makemodel'] ?></th>
				<td><?= $mtcar['mpg'] ?></td>
				<td><?= $mtcar['cyl'] ?></td>
				<td><?= $mtcar['disp'] ?></td>
				<td><?= $mtcar['hp'] ?></td>
				<td><?= $mtcar['drat'] ?></td>
				<td><?= $mtcar['wt'] ?></td>
				<td><?= $mtcar['qsec'] ?></td>
				<td><?= $mtcar['vs'] ?></td>
				<td><?= $mtcar['am'] ?></td>
				<td><?= $mtcar['gear'] ?></td>
				<td><?= $mtcar['carb'] ?></td>
			<tr>
		<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<th>Mean</th>
			<td><?= $mtcars['stats']['mpg']['mean'] ?></td>
			<td></td>
			<td><?= $mtcars['stats']['disp']['mean'] ?></td>
			<td><?= $mtcars['stats']['hp']['mean'] ?></td>
			<td><?= $mtcars['stats']['drat']['mean'] ?></td>
			<td><?= $mtcars['stats']['wt']['mean'] ?></td>
			<td><?= $mtcars['stats']['qsec']['mean'] ?></td>
			<td></td>
			<td></td>
			<td><?= $mtcars['stats']['gear']['mean'] ?></td>
			<td><?= $mtcars['stats']['carb']['mean'] ?></td>
			
		</tr>
		<tr>
			<th>Median</th>
			<td><?= $mtcars['stats']['mpg']['median'] ?></td>
			<td></td>
			<td><?= $mtcars['stats']['disp']['median'] ?></td>
			<td><?= $mtcars['stats']['hp']['median'] ?></td>
			<td><?= round($mtcars['stats']['drat']['median'], 2) ?></td>
			<td><?= $mtcars['stats']['wt']['median'] ?></td>
			<td><?= $mtcars['stats']['qsec']['median'] ?></td>
			<td></td>
			<td></td>
			<td><?= $mtcars['stats']['gear']['median'] ?></td>
			<td><?= $mtcars['stats']['carb']['median'] ?></td>
			
		</tr>
	</tfoot>
</table>
<div id="mtcarsDescription">
	<p>The data was extracted from the 1974 _Motor Trend_ US magazine,
     and comprises fuel consumption and 10 aspects of automobile design
     and performance for 32 automobiles (1973-74 models).</p>
</div>
<div id="mtcarsNotes">
	<p>Henderson and Velleman (1981) comment in a footnote to Table 1:
     ‘Hocking [original transcriber]'s noncrucial coding of the Mazda's
     rotary engine as a straight six-cylinder engine and the Porsche's
     flat engine as a V engine, as well as the inclusion of the diesel
     Mercedes 240D, have been retained to enable direct comparisons to
     be made with previous analyses.’</p>
</div>
<div id="mtcarsSource">
	<p>Henderson and Velleman (1981), Building multiple regression models
     interactively.  _Biometrics_, *37*, 391-411.</p>
</div>
<?php include 'includes/footer.php'; ?>

