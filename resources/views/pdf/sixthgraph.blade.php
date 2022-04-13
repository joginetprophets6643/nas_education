<script>
      // Donut Chart
      Highcharts.chart("dc3-managementPieGraph{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "pie",
          height: 400,
          width: 400,
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
        legend: {
            itemStyle: {
                // color: 'white',
                // fontWeight: 'bold',
                fontSize: '18px'
            }
        },
        plotOptions: {
          pie: {
            size:'70%',
            height: '70%',
            innerSize: 80,
            depth: 45,
            allowPointSelect: true,
            cursor: "pointer",
            dataLabels: {
              enabled: true,
              style: {
                fontWeight: 900,
                fontSize: '20px',
              },
              format: "{point.percentage:.0f} %",
              distance: 5,
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
                color: "#0d5d84",
              },
              {
                name: "Govt. Aided",
                y: {{($districtParticipation->govt_aided_school!=0)?round($districtParticipation->govt_aided_school):0}},
                z: 100,
                color: "#0077c7",
              },
              {
                name: "Private",
                y: {{($districtParticipation->private_school!=0)?round($districtParticipation->private_school):0}},
                z: 100,
                color: "#10b3e4",
              },
              {
                name: "Central Govt.",
                y: {{($districtParticipation->central_govt_school!=0)?round($districtParticipation->central_govt_school):0}},
                z: 100,
                color: "#9fe2f7",
              },
            ],
          },
        ],
      });
    </script>