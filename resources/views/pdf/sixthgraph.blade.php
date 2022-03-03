<script>
      // Donut Chart
      Highcharts.chart("dc3-managementPieGraph{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "pie",
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
            innerSize: 100,
            depth: 45,
            allowPointSelect: true,
            cursor: "pointer",
            dataLabels: {
              enabled: true,
              format: "{point.percentage:.0f} %",
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
                name: "Govt.",
                y: {{($districtParticipation->govt_school!=0)?round($districtParticipation->govt_school):0}},
                z: 100,
                color: "#75A9D9",
              },
              {
                name: "Govt. Aided",
                y: {{($districtParticipation->govt_aided_school!=0)?round($districtParticipation->govt_aided_school):0}},
                z: 100,
                color: "#E9769F",
              },
              {
                name: "Private",
                y: {{($districtParticipation->private_school!=0)?round($districtParticipation->private_school):0}},
                z: 100,
                color: "#CAC55F",
              },
              {
                name: "Central Govt.",
                y: {{($districtParticipation->central_govt_school!=0)?round($districtParticipation->central_govt_school):0}},
                z: 100,
                color: "#4CAF50",
              },
            ],
          },
        ],
      });
    </script>