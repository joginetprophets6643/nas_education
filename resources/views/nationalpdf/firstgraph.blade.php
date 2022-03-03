<script>
    // nc3-ap-lang-graph bar graph
<?php if($avgPerformance->grade==3 || $avgPerformance->grade==5 ||$avgPerformance->grade==8){?>    
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-language', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}',
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "Language",
            y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
            color: "#75A9D9"
            }
        ]
        }
    ],
    
    });

    // nc3-ap-math-graph bar graph
<?php } if($avgPerformance->grade==3 || $avgPerformance->grade==5 || $avgPerformance->grade==8 ||$avgPerformance->grade==10){?>
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-math', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}'
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "Math",
            y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
            color: "#E9769F"
            }
        ]
        }
    ],
    
    });

    // nc3-ap-evs-graph bar graph
<?php } if($avgPerformance->grade==3 || $avgPerformance->grade==5){?>
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-evs', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}'
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "Evs",
            y: <?php echo (int)$dataArr['evs']['cards']['national']; ?>,
            color: "#CAC55F"
            }
        ]
        }
    ],
    
    });

    // nc5-ap-lang-graph bar graph
<?php } if($avgPerformance->grade==8 ||$avgPerformance->grade==10){?>
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-sci', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}'
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "Science",
            y: <?php echo (int)$dataArr['sci']['cards']['national']; ?>,
            color: "#3CACAE"
            }
        ]
        }
    ],
    
    });

    // nc8-ap-socialsci-graph bar graph
<?php } if($avgPerformance->grade==8 ||$avgPerformance->grade==10){?>
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-socialsci', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}'
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "Social Science",
            y: <?php echo (int)$dataArr['sst']['cards']['national']; ?>,
            color: "#72B562"
            }
        ]
        }
    ],
    
    });

    
    // nc10-ap-lang-graph bar graph
<?php } if($avgPerformance->grade==10){?>
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-mil', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}'
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "MIL",
            y: <?php echo (int)$dataArr['mil']['cards']['national']; ?>,
            color: "#EB6C69"
            }
        ]
        }
    ],
    
    });
<?php } if($avgPerformance->grade==10){?>
Highcharts.chart('nc{{isset($avgPerformance->grade)?$avgPerformance->grade:'0'}}-ap-english', {
    chart: {
        type: 'column',
        width: 120,
        height: 180
    },
    title: {
        text: ''
    },
    
    accessibility: {
        announceNewData: {
        enabled: true
        }
    },
    xAxis: {
        type: 'category',
        labels: {
            enabled: false
        },
    },
    yAxis: {
        title: {
          enabled: false
        },
        labels: {
            enabled: false
        },
        tickWidth: 0,
        gridLineWidth: 0,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 50,
            pointWidth: 50,
        },
        series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y}'
        }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
        name: "National",
        colorByPoint: true,
        data: [
            {
            name: "English",
            y: <?php echo (int)$dataArr['eng']['cards']['national']; ?>,
            color: "#C574BF"
            }
        ]
        }
    ],
    
    });

    // nc10-ap-mil-graph bar graph
<?php }?>
//  Comments

</script>