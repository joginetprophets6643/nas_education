<script type="text/javascript">
	<?php if($grade==3){?>
	      // c3-average-graph bar graph
    Highcharts.chart("c3-average-graph", {
        chart: {
          type: "column",
          // height: "350",
          // width: "215",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          categories: ["EVS", "Language", "Mathematics"],
          crosshair: true,
          labels: {
            style: {
              fontSize:'15px'
            }
          },
          
        },
        yAxis: {
          max: 100,
          title: false,
          labels: {
            enabled: false,
          },
          tickWidth: 0,
          gridLineWidth: 0,
        },
        legend: {
          enabled: false,
          // align: 'right',
          // verticalAlign: 'middle',
          // layout: 'vertical',
          // itemMarginBottom: 20
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            pointWidth: 50,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "State Average",
            colorByPoint: true,
            data: [
              {
                name: "EVS",
                y: <?php echo (int)$dataArr['evs']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Language",
                y: <?php echo (int)$dataArr['language']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['state']; ?>,
                color: "#527698",
              },
            ],
          },
          {
            name: "National Average",
            colorByPoint: true,
            data: [
              {
                name: "EVS",
                y: <?php echo (int)$dataArr['evs']['cards']['national']; ?>,
                color: "#A3536F",
              },
              {
                name: "Language",
                y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
                color: "#A3536F",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
                color: "#A3536F",
              },
            ],
          },
        ],
      });

      // c5-average-graph bar graph
	<?php } if($grade==5){?>
    Highcharts.chart("c5-average-graph", {
        chart: {
          type: "column",
          // height: "350",
          // width: "215",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          categories: ["EVS", "Language", "Mathematics"],
          crosshair: true,
          labels: {
            style: {
              fontSize:'15px'
            }
          },
        },
        yAxis: {
          max: 100,
          title: false,
          labels: {
            enabled: false,
          },
          tickWidth: 0,
          gridLineWidth: 0,
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            pointWidth: 50,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "State Average",
            colorByPoint: true,
            data: [
              {
                name: "EVS",
                y: <?php echo (int)$dataArr['evs']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Language",
                y: <?php echo (int)$dataArr['language']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['state']; ?>,
                color: "#527698",
              },
            ],
          },
          {
            name: "National Average",
            colorByPoint: true,
            data: [
              {
                name: "EVS",
                y: <?php echo (int)$dataArr['evs']['cards']['national']; ?>,
                color: "#E9769F",
              },
              {
                name: "Language",
                y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
                color: "#E9769F",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
                color: "#E9769F",
              },
            ],
          },
        ],
      });

      // c8-average-graph bar graph
	<?php } if($grade==8){?>
    Highcharts.chart("c8-average-graph", {
        chart: {
          type: "column",
          // height: "350",
          // width: "250",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          categories: ["Language", "Mathematics", "Science", "Social Science"],
          crosshair: true,
          labels: {
            style: {
              fontSize:'15px'
            }
          },
        },
        yAxis: {
          max: 100,
          title: false,
          labels: {
            enabled: false,
          },
          tickWidth: 0,
          gridLineWidth: 0,
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            pointWidth: 35,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "State Average",
            colorByPoint: true,
            data: [
              {
                name: "Language",
                y: <?php echo (int)$dataArr['language']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Science",
                y: <?php echo (int)$dataArr['sci']['cards']['state']; ?>,
                color: "#527698",
              },
              {
                name: "Social Science",
                y: <?php echo (int)$dataArr['sst']['cards']['state']; ?>,
                color: "#527698",
              },
            ],
          },
          {
            name: "National Average",
            colorByPoint: true,
            data: [
              {
                name: "Language",
                y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
                color: "#75A9D9",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
                color: "#75A9D9",
              },
              {
                name: "Science",
                y: <?php echo (int)$dataArr['sci']['cards']['national']; ?>,
                color: "#75A9D9",
              },
              {
                name: "Social Science",
                y: <?php echo (int)$dataArr['sst']['cards']['national']; ?>,
                color: "#75A9D9",
              },
            ],
          },
        ],
      });

      // c10-average-graph bar graph
	<?php } if($grade==10){?>
    Highcharts.chart("c10-average-graph", {
        chart: {
          type: "column",
          // height: "350",
          // width: "300",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          categories: [
            "MIL",
            "English",
            "Mathematics",
            "Science",
            "Social Sc.",
          ],
          crosshair: true,
          labels: {
            style: {
              fontSize:'15px'
            }
          },
        },
        yAxis: {
          max: 100,
          title: false,
          labels: {
            enabled: false,
          },
          tickWidth: 0,
          gridLineWidth: 0,
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            pointWidth: 28,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "State Average",
            colorByPoint: true,
            data: [
              {
                name: "MIL",
                y: <?php echo (int)$dataArr['mil']['cards']['state']; ?>,
                color: "#764673",
              },
              {
                name: "English",
                y: <?php echo (int)$dataArr['eng']['cards']['state']; ?>,
                color: "#764673",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['state']; ?>,
                color: "#764673",
              },
              {
                name: "Science",
                y: <?php echo (int)$dataArr['sci']['cards']['state']; ?>,
                color: "#764673",
              },
              {
                name: "Social Science",
                y: <?php echo (int)$dataArr['sst']['cards']['state']; ?>,
                color: "#764673",
              },
            ],
          },
          {
            name: "National Average",
            colorByPoint: true,
            data: [
              {
                name: "MIL",
                y: <?php echo (int)$dataArr['mil']['cards']['national']; ?>,
                color: "#C574BF",
              },
              {
                name: "English",
                y: <?php echo (int)$dataArr['eng']['cards']['national']; ?>,
                color: "#C574BF",
              },
              {
                name: "Mathematics",
                y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
                color: "#C574BF",
              },
              {
                name: "Science",
                y: <?php echo (int)$dataArr['sci']['cards']['national']; ?>,
                color: "#C574BF",
              },
              {
                name: "Social Science",
                y: <?php echo (int)$dataArr['sst']['cards']['national']; ?>,
                color: "#C574BF",
              },
            ],
          },
        ],
      });
	<?php }?>
</script>