<script type="text/javascript">
	// Reportcard-languageBarGraph1
	// Performance by gender (Math Graph)
	<?php if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
	Highcharts.chart("rc3-mathBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
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
	        y: 7,
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
	        name: "Boys",
	        color: "#A3536F",
	        data: [<?php echo (int)$dataGenderArr['math']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['math']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['math']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#E9769F",
	        data: [<?php echo (int)$dataGenderArr['math']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['math']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['math']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });

	  // Reportcard-evsBarGraph1
	// Performance by gender (Language Graph)
	<?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8){?>
	Highcharts.chart("rc3-languageBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
	    chart: {
	      height: 300,
	      type: "column",
	      width: 170,
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
	        y: 7,
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
	        name: "Boys",
	        color: "#527698",
	        data: [<?php echo (int)$dataGenderArr['language']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['language']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['language']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#75A9D9",
	        data: [<?php echo (int)$dataGenderArr['language']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['language']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['language']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });
	// Performance by gender (evs Graph)
	<?php } if($districtParticipation->grade==3 || $districtParticipation->grade==5){?>
	Highcharts.chart("rc3-evsBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
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
	        y: 7,
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
	        name: "Boys",
	        color: "#8D8A43",
	        data: [<?php echo (int)$dataGenderArr['evs']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['evs']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['evs']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#CAC55F",
	        data: [<?php echo (int)$dataGenderArr['evs']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['evs']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['evs']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });
	// Performance by gender (Science Graph)
	<?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
	Highcharts.chart("rc3-scienceBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
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
	        y: 7,
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
	        name: "Boys",
	        color: "#A3536F",
	        data: [<?php echo (int)$dataGenderArr['sci']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['sci']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['sci']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#E9769F",
	        data: [<?php echo (int)$dataGenderArr['sci']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['sci']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['sci']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });
	// Performance by gender (Social Science Graph)
	<?php } if($districtParticipation->grade==8 ||$districtParticipation->grade==10){?>
	Highcharts.chart("rc3-socialscienceBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
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
	        y: 7,
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
	        name: "Boys",
	        color: "#A3536F",
	        data: [<?php echo (int)$dataGenderArr['sst']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['sst']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['sst']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#E9769F",
	        data: [<?php echo (int)$dataGenderArr['sst']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['sst']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['sst']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });


	  // Reportcard-mathBarGraph1
	// Performance by gender (MIL)
	<?php } if($districtParticipation->grade==10){?>
	Highcharts.chart("rc3-milBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
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
	        y: 7,
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
	        name: "Boys",
	        color: "#A3536F",
	        data: [<?php echo (int)$dataGenderArr['mil']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['mil']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['mil']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#E9769F",
	        data: [<?php echo (int)$dataGenderArr['mil']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['mil']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['mil']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });
	// Performance by gender (English Graph)
	<?php } if($districtParticipation->grade==10){?>
	Highcharts.chart("rc3-englishBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
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
	        y: 7,
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
	        name: "Boys",
	        color: "#A3536F",
	        data: [<?php echo (int)$dataGenderArr['eng']['gender']['district']['boys']; ?>, <?php echo (int)$dataGenderArr['eng']['gender']['state']['boys']; ?>, <?php echo (int)$dataGenderArr['eng']['gender']['national']['boys']; ?>],
	      },
	      {
	        name: "Girls",
	        color: "#E9769F",
	        data: [<?php echo (int)$dataGenderArr['eng']['gender']['district']['girls']; ?>, <?php echo (int)$dataGenderArr['eng']['gender']['state']['girls']; ?>, <?php echo (int)$dataGenderArr['eng']['gender']['national']['girls']; ?>],
	      },
	    ],
	  });
	<?php }?>

</script>