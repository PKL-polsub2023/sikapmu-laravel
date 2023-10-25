<html>

<script src="https://code.highcharts.com/highcharts.js"></script>
<div id="bar-chart-container" style="width: 100%; height: 400px;"></div>

<script>
   Highcharts.chart('bar-chart-container', {
    chart: {
        type: 'bar' // Specify the chart type as 'bar'.
    },
    title: {
        text: 'My Bar Chart'
    },
    xAxis: {
        categories: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5']
    },
    yAxis: {
        title: {
            text: 'Values'
        }
    },
    series: [{
        name: 'Data Series',
        data: [10, 20, 15, 25, 30]
    }]
});

</script>
</html>