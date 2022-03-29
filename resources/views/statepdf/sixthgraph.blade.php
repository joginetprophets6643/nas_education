    <script>
      // Donut Chart
      Highcharts.chart("dc3-managementPieGraph{{isset($stateParticipationFinal->grade)?$stateParticipationFinal->grade:'0'}}", {
        chart: {
          type: "pie",
          height: 300,
          width: 250,
        },
        title: {
          text: "",
        },
        tooltip: {
          headerFormat: "",
          pointFormat:
            '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            "{point.y}%",
        },
        plotOptions: {
          pie: {
            innerSize: 80,
            depth: 45,
            allowPointSelect: true,
            cursor: "pointer",
            dataLabels: {
              enabled: true,
              format: "{point.percentage} %",
              distance: -50,
              filter: {
                property: "percentage",
                operator: ">",
                value: 4,
              },
            },
            showInLegend: true,
          },
        },
        series: [
          {
            minPointSize: 10,
            innerSize: "40%",
            zMin: 0,
            name: "Management",
            data: [
              {
                name: "Central Govt.",
                y: {{(isset($stateParticipationFinal)>0 && ($stateParticipationFinal->central_govt_school!=0))?round($stateParticipationFinal->central_govt_school):0}},
                z: 100,
                color: "#75A9D9",
              },
              {
                name: "Govt.",
                y: {{(isset($stateParticipationFinal)>0 && ($stateParticipationFinal->govt_school!=0))?round($stateParticipationFinal->govt_school):0}},
                z: 100,
                color: "#E9769F",
              },
              {
                name: "Govt. Aided",
                y: {{(isset($stateParticipationFinal)>0 && ($stateParticipationFinal->govt_aided_school!=0))?round($stateParticipationFinal->govt_aided_school):0}},
                z: 100,
                color: "#CAC55F",
              },
              {
                name: "Private",
                y: {{(isset($stateParticipationFinal)>0 && ($stateParticipationFinal->private_school!=0))?round($stateParticipationFinal->private_school):0}},
                z: 100,
                color: "#4CAF50",
              },
            ],
          },
        ],
      });
    </script>