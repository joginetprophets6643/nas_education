<script type="text/javascript">
  /*************** Social CHart ***************/
	// Performance by gender (Math Graph)
	<?php if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
	Highcharts.chart("rc3-mathBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: {{($districtParticipation->grade==8 || $districtParticipation->grade==10)?'320':'425'}},
	      width: 440,
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
	        name: "SC",
	        color: "#A3536F",
	        data: [<?php echo (int)$datasclgrpArr['math']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#D26A8E",
	        data: [<?php echo (int)$datasclgrpArr['math']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#E9769F",
	        data: [<?php echo (int)$datasclgrpArr['math']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#F09FBB",
	        data: [<?php echo (int)$datasclgrpArr['math']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['math']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });
	  // chart 3
	<?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8){?>
    // Performance by gender (Language Graph)
	Highcharts.chart("rc3-languageBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: {{($districtParticipation->grade==8)?'320':'425'}},
	      width: 480,
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
	        name: "SC",
	        color: "#527698",
	        data: [<?php echo (int)$datasclgrpArr['language']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#6997C3",
	        data: [<?php echo (int)$datasclgrpArr['language']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#75A9D9",
	        data: [<?php echo (int)$datasclgrpArr['language']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#9EC2E4",
	        data: [<?php echo (int)$datasclgrpArr['language']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['language']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });

	  // chart 2
	<?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5){?>  
	// Performance by gender (EVS Graph)
	Highcharts.chart("rc3-evsBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: 425,
	      width: 480,
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
	        name: "SC",
	        color: "#8D8A43",
	        data: [<?php echo (int)$datasclgrpArr['evs']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#B6B156",
	        data: [<?php echo (int)$datasclgrpArr['evs']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#CAC55F",
	        data: [<?php echo (int)$datasclgrpArr['evs']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#DAD68F",
	        data: [<?php echo (int)$datasclgrpArr['evs']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['evs']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });	
    <?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    // Performance by gender (Science Graph)
	Highcharts.chart("rc3-scienceBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: 320,
	      width: 480,
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
	        name: "SC",
	        color: "#369b9d",
	        data: [<?php echo (int)$datasclgrpArr['sci']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#63bdbe",
	        data: [<?php echo (int)$datasclgrpArr['sci']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#8acdce",
	        data: [<?php echo (int)$datasclgrpArr['sci']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#b1dedf",
	        data: [<?php echo (int)$datasclgrpArr['sci']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['sci']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });
	  // chart 4
  	<?php } if($districtParticipation->grade==10){?>
	// Performance by gender (MIL Graph)
	Highcharts.chart("rc3-milBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: 320,
	      width: 480,
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
	        name: "SC",
	        color: "#d4605f",
	        data: [<?php echo (int)$datasclgrpArr['mil']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#ef8987",
	        data: [<?php echo (int)$datasclgrpArr['mil']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#f3a6a5",
	        data: [<?php echo (int)$datasclgrpArr['mil']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#f7c4c3",
	        data: [<?php echo (int)$datasclgrpArr['mil']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['mil']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });

	  // chart 5
    <?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
    // Performance by gender (Social Science Graph)
	Highcharts.chart("rc3-socialscienceBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: 320,
	      width: 440,
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
	        name: "SC",
	        color: "#68a358",
	        data: [<?php echo (int)$datasclgrpArr['sst']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#8fc481",
	        data: [<?php echo (int)$datasclgrpArr['sst']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#abd3a1",
	        data: [<?php echo (int)$datasclgrpArr['sst']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#c7e1c0",
	        data: [<?php echo (int)$datasclgrpArr['sst']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['sst']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });
	  // chart 4
	<?php } if($districtParticipation->grade==10){?>
    // Performance by gender (English Graph)
	Highcharts.chart("rc3-englishBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: 320,
	      width: 480,
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
	        name: "SC",
	        color: "#b168ad",
	        data: [<?php echo (int)$datasclgrpArr['eng']['socialgroup']['district']['sc']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['state']['sc']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['national']['sc']; ?>],
	      },
	      {
	        name: "OBC",
	        color: "#d190cd",
	        data: [<?php echo (int)$datasclgrpArr['eng']['socialgroup']['district']['obc']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['state']['obc']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['national']['obc']; ?>],
	      },
	      {
	        name: "ST",
	        color: "#dcacd9",
	        data: [<?php echo (int)$datasclgrpArr['eng']['socialgroup']['district']['st']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['state']['st']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['national']['st']; ?>],
	      },
	      {
	        name: "General",
	        color: "#e8c7e6",
	        data: [<?php echo (int)$datasclgrpArr['eng']['socialgroup']['district']['general']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['state']['general']; ?>, <?php echo (int)$datasclgrpArr['eng']['socialgroup']['national']['general']; ?>],
	      },
	    ],
	  });
	  // chart 4
	<?php }?>
</script>