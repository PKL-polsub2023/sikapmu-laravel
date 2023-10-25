<html>

<script src="https://code.highcharts.com/highcharts.js"></script>
<div id="bar-chart-container" style="width: 100%; height: 500px;"></div>

<script>
   Highcharts.chart('bar-chart-container', {
    chart: {
        type: 'bar' // Specify the chart type as 'bar'.
    },
    title: {
        text: 'My Bar Chart'
    },
    xAxis: {
        categories: ['Usia 16 - 19 Tahun', 'Usia 20 - 30 tahun', 'Jumlah Pencari Kerja', 'Pasien TB HIV', 'OAT Dengan ARV']
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