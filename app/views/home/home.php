<?php
    $dates=array_column($data, "date");
    $valuesInput=array_column($dataInput, "value");
    $valuesOutput=array_column($dataOutput, "value");

    // input 
    $valuesSumInput = $dataSumInput[0];

    $floatSumInput = $valuesSumInput["SUM(value)"];

    $floatSumInput = floatval($floatSumInput);

  // output

    $valuesSumOutput = $dataSumOutput[0];

    $floatSumOutput = $valuesSumOutput["SUM(value)"];

    $floatSumOutput = floatval($floatSumOutput);
?>
<div class="wrap">
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Entrada', 'Saída', "Junção"],
          ["<?php echo $dates[0]?>",  <?php echo $valuesInput[0]?>,      <?php echo $valuesOutput[0]?>, <?php echo $valuesInput[0] - $valuesOutput[0]?>],
          ["<?php echo $dates[1]?>",  <?php echo $valuesInput[1]?>,      <?php echo $valuesOutput[1]?>, <?php echo $valuesInput[1] - $valuesOutput[1]?>],
          ["<?php echo $dates[2]?>",  <?php echo $valuesInput[2]?>,      <?php echo $valuesOutput[2]?>, <?php echo $valuesInput[2] - $valuesOutput[2]?>],
          ["<?php echo $dates[3]?>",  <?php echo $valuesInput[3]?>,      <?php echo $valuesOutput[3]?>, <?php echo $valuesInput[3] - $valuesOutput[3]?>],
          ["<?php echo $dates[4]?>",  <?php echo $valuesInput[4]?>,      <?php echo $valuesOutput[4]?>, <?php echo $valuesInput[4] - $valuesOutput[4]?>],
          ["<?php echo $dates[5]?>",  <?php echo $valuesInput[5]?>,      <?php echo $valuesOutput[5]?>, <?php echo $valuesInput[5] - $valuesOutput[5]?>]
        ]);

        var options = {
          title : 'Desempenho',
          hAxis: {title: 'Data'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    <h2 style='margin-left: 14vw'>Valor total foi de <?php echo $floatSumInput - $floatSumOutput; ?></h2>
  </body>
</html>
