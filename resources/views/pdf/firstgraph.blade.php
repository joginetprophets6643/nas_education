    <script>
      // Create the language bar graph
      <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8){?>
      Highcharts.chart("language{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['language']['cards']['district']; ?>,
                color: "#527698",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['language']['cards']['state']; ?>,
                color: "#6997C3",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
                color: "#91B9E1",
              },
            ],
          },
        ],
      });
      <?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
      // Create the maths bar graph
      Highcharts.chart("maths{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['math']['cards']['district']; ?>,
                color: "#A3536F",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['math']['cards']['state']; ?>,
                color: "#D26A8E",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
                color: "#ED91B1",
              },
            ],
          },
        ],
      });
      <?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5){?>
      // Create the evs bar graph
      Highcharts.chart("evs{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['evs']['cards']['district']; ?>,
                color: "#8D8A43",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['evs']['cards']['state']; ?>,
                color: "#B6B156",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['evs']['cards']['national']; ?>,
                color: "#D5D17F",
              },
            ],
          },
        ],
      });
      <?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
      /// Create the Science bar graph
      Highcharts.chart("science{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['sci']['cards']['district']; ?>,
                color: "#527698",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['sci']['cards']['state']; ?>,
                color: "#6997C3",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['sci']['cards']['national']; ?>,
                color: "#91B9E1",
              },
            ],
          },
        ],
      });
      <?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
        // Create the SocialScience bar graph
      Highcharts.chart("socialscience{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['sst']['cards']['district']; ?>,
                color: "#527698",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['sst']['cards']['state']; ?>,
                color: "#6997C3",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['sst']['cards']['national']; ?>,
                color: "#91B9E1",
              },
            ],
          },
        ],
      });
      <?php } if($districtParticipation->grade==10){?>
      // Create the Mil bar graph
      Highcharts.chart("mil{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['mil']['cards']['district']; ?>,
                color: "#527698",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['mil']['cards']['state']; ?>,
                color: "#6997C3",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['mil']['cards']['national']; ?>,
                color: "#91B9E1",
              },
            ],
          },
        ],
      });
      <?php } if($districtParticipation->grade==10){?>
        // Create the english bar graph
      Highcharts.chart("english{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "column",
          height: "250",
          width: "120",
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
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 10,
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
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: <?php echo (int)$dataArr['language']['cards']['district']; ?>,
                color: "#527698",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['language']['cards']['state']; ?>,
                color: "#6997C3",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
                color: "#91B9E1",
              },
            ],
          },
        ],
      });
      <?php }?>

</script>