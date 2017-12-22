<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="page-wrapper">
    <div class="graphs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div><!--/container-->
    </div>
</div>

<script type="text/javascript">
    Highcharts.setOptions({
    lang: {
        months: [
            'Jan', 'Fev', 'Mar', 'Abr',
            'Mai', 'Jun', 'Jul', 'Ago',
            'Set', 'Out', 'Nov', 'Dec'
        ],
        weekdays: [
            'Domingo', 'Segunda', 'Terça', 'Quarta',
            'Quinta', 'Sexta', 'Sabado'
        ]
    }
});
    Highcharts.chart('container', {
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Acessos ao site, ao longo do tempo'
        },
        subtitle: {
            text: document.ontouchstart === undefined ?
                    'Clique e arraste para dar zoom' : 'Pince para dar zoom no mapa'
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'Acessos'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
        },

        series: [{
            type: 'area',
            name: 'Acessos totais',
            data: <?= $data ?>
        }]
    });

</script>
