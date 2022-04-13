<script>
      // Create the language bar graph
      <?php if ($districtParticipation->grade == 3 || $districtParticipation->grade == 5 || $districtParticipation->grade == 8) { ?>
        Highcharts.chart("language{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "550";}elseif($districtParticipation->grade==8){ echo "400";}?>,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'

              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "150";}elseif($districtParticipation->grade==8){ echo "100";}?>,
            },
            series: {
              borderWidth: 0,
              
              dataLabels: {
                enabled: true,
                // align: 'center',
                // format: "{point.y} <br/> ({point.y})",
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['language']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['language']['cards']['se_district'],2); ?>,
                color: "#527698",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['language']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['language']['cards']['se_state'],2); ?>,
                color: "#6997C3",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['language']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['language']['cards']['se_national'],2); ?>,
                color: "#91B9E1",
              },
            ],
          }, ],
        });
      <?php }
      if ($districtParticipation->grade == 3 || $districtParticipation->grade == 5 || $districtParticipation->grade == 8 || $districtParticipation->grade == 10) { ?>
        // Create the maths bar graph
        Highcharts.chart("maths{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "550";}elseif($districtParticipation->grade==8){ echo "400";}elseif($districtParticipation->grade==10){ echo "320";}?>,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'
              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
            
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "150";}elseif($districtParticipation->grade==8){ echo "100";}elseif($districtParticipation->grade==10){ echo "80";}?>,
            },
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['math']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['math']['cards']['se_district'],2); ?>,
                color: "#A3536F",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['math']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['math']['cards']['se_state'],2); ?>,
                color: "#D26A8E",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['math']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['math']['cards']['se_national'],2); ?>,
                color: "#ED91B1",
              },
            ],
          }, ],
        });
      <?php }
      if ($districtParticipation->grade == 3 || $districtParticipation->grade == 5) { ?>
        // Create the evs bar graph
        Highcharts.chart("evs{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: 550,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'
              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: 150,
            },
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['evs']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['evs']['cards']['se_district'],2); ?>,
                color: "#8D8A43",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['evs']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['evs']['cards']['se_state'],2); ?>,
                color: "#B6B156",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['evs']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['evs']['cards']['se_national'],2); ?>,
                color: "#D5D17F",
              },
            ],
          }, ],
        });
      <?php }
      if ($districtParticipation->grade == 8 || $districtParticipation->grade == 10) { ?>
        /// Create the Science bar graph
        Highcharts.chart("science{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: <?php if($districtParticipation->grade==8){ echo "400";}elseif($districtParticipation->grade==10){ echo "320";}?>,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'
              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: <?php if($districtParticipation->grade==8){ echo "100";}elseif($districtParticipation->grade==10){ echo "80";}?>,
            },
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                  textAlign: 'center',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['sci']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['sci']['cards']['se_district'],2); ?>,
                color: "#369b9d",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['sci']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['sci']['cards']['se_state'],2); ?>,
                color: "#63bdbe",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['sci']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['sci']['cards']['se_national'],2); ?>,
                color: "#8acdce",
              },
            ],
          }, ],
        });
      <?php }
      if ($districtParticipation->grade == 8 || $districtParticipation->grade == 10) { ?>
        // Create the SocialScience bar graph
        Highcharts.chart("socialscience{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: <?php if($districtParticipation->grade==8){ echo "400";}elseif($districtParticipation->grade==10){ echo "320";}?>,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'
              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: <?php if($districtParticipation->grade==8){ echo "100";}elseif($districtParticipation->grade==10){ echo "80";}?>,
            },
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['sst']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['sst']['cards']['se_district'],2); ?>,
                color: "#68a358",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['sst']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['sst']['cards']['se_state'],2); ?>,
                color: "#8fc481",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['sst']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['sst']['cards']['se_national'],2); ?>,
                color: "#abd3a1",
              },
            ],
          }, ],
        });
      <?php }
      if ($districtParticipation->grade == 10) { ?>
        // Create the Mil bar graph
        Highcharts.chart("mil{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: 320,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'
              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: 80,
            },
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['mil']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['mil']['cards']['se_district'],2); ?>,
                color: "#d4605f",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['mil']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['mil']['cards']['se_state'],2); ?>,
                color: "#ef8987",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['mil']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['mil']['cards']['se_national'],2); ?>,
                color: "#f3a6a5",
              },
            ],
          }, ],
        });
      <?php }
      if ($districtParticipation->grade == 10) { ?>
        // Create the english bar graph
        Highcharts.chart("english{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
          chart: {
            type: "column",
            height: <?php if($districtParticipation->grade==3 || $districtParticipation->grade==5){ echo "650";}elseif($districtParticipation->grade==8  || $districtParticipation->grade==10){ echo "600";}?>,
            width: 320,
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
            labels: {
              style: {
                fontSize: '20px',
                fontWeight: 'bold'
              }
            }
          },
          yAxis: {
            title: {
              text: "",
            },
            labels: {
              enabled: false,
            },
            max: 100,
            tickWidth: 0,
            gridLineWidth: 0,
          },
          legend: {
            enabled: false,
          },
          plotOptions: {
            column: {
              pointWidth: 80,
            },
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: "<span>&nbsp;{point.y}</span> <br> <span style='font-size: 18px;'>({point.se})</span>",
                style: {
                  fontWeight: 'bold',
                  fontSize: '25px',
                }
              },
            },
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
          },

          series: [{
            name: "Students",
            colorByPoint: true,
            data: [{
                name: "District",
                y: <?php echo (int)$dataArr['eng']['cards']['district']; ?>,
                se: <?php echo round((float)$dataArr['eng']['cards']['se_district'],2); ?>,
                color: "#b168ad",
              },
              {
                name: "State",
                y: <?php echo (int)$dataArr['eng']['cards']['state']; ?>,
                se: <?php echo round((float)$dataArr['eng']['cards']['se_state'],2); ?>,
                color: "#d190cd",
              },
              {
                name: "National",
                y: <?php echo (int)$dataArr['eng']['cards']['national']; ?>,
                se: <?php echo round((float)$dataArr['eng']['cards']['se_national'],2); ?>,
                color: "#dcacd9",
              },
            ],
          }, ],
        });
      <?php } ?>
    </script>