<script type="text/javascript">      
// Reportcard-languageBarGraph3
	// Performance by gender (Math Graph)
	<?php if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    Highcharts.chart("rc3-mathBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: {{($districtParticipation->grade==8 || $districtParticipation->grade==10)?'320':'425'}},
          width: 430,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['math']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['math']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['math']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['math']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['math']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['math']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['math']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['math']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['math']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['math']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['math']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['math']['management']['national']['central_govt']; ?>],
          },
        ],
      });      
    <?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8){?>
    // Performance by gender (Language Graph)
    Highcharts.chart("rc3-languageBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: {{($districtParticipation->grade==8)?'320':'425'}},
          width: 460,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
          
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['language']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['language']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['language']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['language']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['language']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['language']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['language']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['language']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['language']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['language']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['language']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['language']['management']['national']['central_govt']; ?>],
          },
        ],
      });
	<?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5){?>  
	// Performance by gender (EVS Graph)
    Highcharts.chart("rc3-evsBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 425,
          width: 460,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['evs']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['evs']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['evs']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['evs']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['evs']['management']['national']['central_govt']; ?>],
          },
        ],
      });      
    <?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    // Performance by gender (Science Graph)
    Highcharts.chart("rc3-scienceBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 320,
          width: 460,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['sci']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['sci']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['sci']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['sci']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['sci']['management']['national']['central_govt']; ?>],
          },
        ],
      });
	<?php } if($districtParticipation->grade==10){?>
	// Performance by gender (MIL Graph)
    Highcharts.chart("rc3-milBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 320,
          width: 460,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['mil']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['mil']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['mil']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['mil']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['mil']['management']['national']['central_govt']; ?>],
          },
        ],
      });          
    <?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    // Performance by gender (Social Science Graph)
    Highcharts.chart("rc3-socialscienceBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 320,
          width: 430,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
          
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['sst']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['sst']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['sst']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['sst']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['sst']['management']['national']['central_govt']; ?>],
          },
        ],
      });
    <?php } if($districtParticipation->grade==10){?>
    // Performance by gender (English Graph)
	Highcharts.chart("rc3-englishBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          height: 320,
          width: 460,
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
	        // rotation: -90,
	        // y: 7,
            style: {
              fontSize: '17px',
              fontWeight: 'bold',
              color: '#000'
            },
          },
        },
        yAxis: {
          max: 100,
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
            pointWidth: 13,
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
            name: "Govt.",
            color: "#0d5d84",
            data: [<?php echo (int)$dataMgtArr['eng']['management']['district']['govt']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['state']['govt']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['national']['govt']; ?>],
          },
          {
            name: "Govt. Aided",
            color: "#0077c7",
            data: [<?php echo (int)$dataMgtArr['eng']['management']['district']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['state']['govt_aided']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['national']['govt_aided']; ?>],
          },
          {
            name: "Private",
            color: "#10b3e4",
            data: [<?php echo (int)$dataMgtArr['eng']['management']['district']['private']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['state']['private']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['national']['private']; ?>],
          },
          {
            name: "Central Govt",
            color: "#9fe2f7",
            data: [<?php echo (int)$dataMgtArr['eng']['management']['district']['central_govt']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['state']['central_govt']; ?>, <?php echo (int)$dataMgtArr['eng']['management']['national']['central_govt']; ?>],
          },
        ],
      });      
	<?php }?>
</script>