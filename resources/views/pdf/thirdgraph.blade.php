<script type="text/javascript">
	      // Location CHart
	// Performance by gender (Math Graph)
	<?php if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    Highcharts.chart("rc3-mathBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 200,
          type: "column",
          margin: [40, 0, 60, 40],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#A3536F",
            data: [<?php echo (int)$dataLocationArr['math']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['math']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['math']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#E9769F",
            data: [<?php echo (int)$dataLocationArr['math']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['math']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['math']['location']['national']['urban']; ?>],
          },
        ],
      }); 
    // Performance by gender (Language Graph)
    <?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8){?>
    Highcharts.chart("rc3-languageBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 170,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#527698",
            data: [<?php echo (int)$dataLocationArr['language']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['language']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['language']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#75A9D9",
            data: [<?php echo (int)$dataLocationArr['language']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['language']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['language']['location']['national']['urban']; ?>],
          },
        ],
      });

      // Reportcard-mathBarGraph2
	// Performance by gender (EVS Graph)   
	<?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5){?>   
    Highcharts.chart("rc3-evsBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 170,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#8D8A43",
            data: [<?php echo (int)$dataLocationArr['evs']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['evs']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['evs']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#CAC55F",
            data: [<?php echo (int)$dataLocationArr['evs']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['evs']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['evs']['location']['national']['urban']; ?>],
          },
        ],
      }); 
	// Performance by gender (Science Graph)  
	<?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>  
    Highcharts.chart("rc3-scienceBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 170,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#A3536F",
            data: [<?php echo (int)$dataLocationArr['sci']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['sci']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['sci']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#E9769F",
            data: [<?php echo (int)$dataLocationArr['sci']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['sci']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['sci']['location']['national']['urban']; ?>],
          },
        ],
      });
	// Performance by gender (Social Science Graph)
	<?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    Highcharts.chart("rc3-socialscienceBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 170,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#A3536F",
            data: [<?php echo (int)$dataLocationArr['sst']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['sst']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['sst']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#E9769F",
            data: [<?php echo (int)$dataLocationArr['sst']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['sst']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['sst']['location']['national']['urban']; ?>],
          },
        ],
      });
    // Performance by gender (MIL Graph)
    <?php } if($districtParticipation->grade==10){?>
    Highcharts.chart("rc3-milBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 170,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#A3536F",
            data: [<?php echo (int)$dataLocationArr['mil']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['mil']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['mil']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#E9769F",
            data: [<?php echo (int)$dataLocationArr['mil']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['mil']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['mil']['location']['national']['urban']; ?>],
          },
        ],
      });
    // Performance by gender (English Graph)
    <?php } if($districtParticipation->grade==10){?>
    Highcharts.chart("rc3-englishBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 300,
          width: 170,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointWidth: 5,
            pointPadding: 0,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#A3536F",
            data: [<?php echo (int)$dataLocationArr['eng']['location']['district']['rural']; ?>, <?php echo (int)$dataLocationArr['eng']['location']['state']['rural']; ?>, <?php echo (int)$dataLocationArr['eng']['location']['national']['rural']; ?>],
          },
          {
            name: "Urban",
            color: "#E9769F",
            data: [<?php echo (int)$dataLocationArr['eng']['location']['district']['urban']; ?>, <?php echo (int)$dataLocationArr['eng']['location']['state']['urban']; ?>, <?php echo (int)$dataLocationArr['eng']['location']['national']['urban']; ?>],
          },
        ],
      });
    <?php }?>

</script>