<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">



<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </head>
    <body>

        <div class="chart-container" style="position: relative; height:500px; width:400px;">
            <canvas id="myChart" width="40px" height="40px">
            </canvas>
        </div>
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', 
            data: { 
                labels: [<xsl:for-each select="datas/month"> '<xsl:value-of select="monthName/text()"/>',</xsl:for-each>],
                datasets: [{
                    label: 'Month',

                    data: [<xsl:for-each select="datas/month"> '<xsl:value-of select="salesAmount/text()"/>',</xsl:for-each>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                        
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
    </body>
</html>



</xsl:template>
</xsl:stylesheet>