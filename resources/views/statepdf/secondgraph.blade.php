<script type="text/javascript">
  // range
  <?php if ($grade2 == 3) { ?>
    Highcharts.chart("c3-range-graph", {
      chart: {
        type: "bar",
        height: 153,
      },
      title: {
        text: "",
      },
      xAxis: {
        // categories: ["EVS", "Language", "Mathematics"],
        labels: {
          enabled: false,
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: "",
        },
        labels: {
          enabled: false,
        }
      },
      legend: {
        enabled: false,
      },
      plotOptions: {
        series: {
          stacking: "normal",
          dataLabels: {
            enabled: true
          }
        },
      },
      series: [{
          name: "Above 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['advanced']; ?>,
              color: "#E5E2AF",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['advanced']; ?>,
              color: "#BAD4EC",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['advanced']; ?>,
              color: "#F4BBCF",
            },
          ],
        },
        {
          name: "51% - 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['proficient']; ?>,
              color: "#DAD68F",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['proficient']; ?>,
              color: "#9EC2E4",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['proficient']; ?>,
              color: "#F09FBB",
            },
          ],
        },
        {
          name: "30% - 50%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['basic']; ?>,
              color: "#CFCB6F",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['basic']; ?>,
              color: "#83B1DD",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['basic']; ?>,
              color: "#EB84A8",
            },
          ],
        },
        {
          name: "Below 30%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['below_basic']; ?>,
              color: "#B6B156",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['below_basic']; ?>,
              color: "#6997C3",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['below_basic']; ?>,
              color: "#D26A8E",
            },
          ],
        },
      ],

    });
    // class 5
  <?php }
  if ($grade2 == 5) { ?>
    Highcharts.chart("c5-range-graph", {
      chart: {
        type: "bar",
        height: 153,
      },
      title: {
        text: "",
      },
      xAxis: {
        // categories: ["EVS", "Language", "Mathematics"],
        labels: {
          enabled: false,
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: "",
        },
        labels: {
          enabled: false,
        }
      },
      legend: {
        enabled: false,
      },
      plotOptions: {
        series: {
          stacking: "normal",
          dataLabels: {
            enabled: true
          }
        },
      },
      series: [{
          name: "Above 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['advanced']; ?>,
              color: "#E5E2AF",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['advanced']; ?>,
              color: "#BAD4EC",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['advanced']; ?>,
              color: "#F4BBCF",
            },
          ],
        },
        {
          name: "51% - 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['proficient']; ?>,
              color: "#DAD68F",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['proficient']; ?>,
              color: "#9EC2E4",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['proficient']; ?>,
              color: "#F09FBB",
            },
          ],
        },
        {
          name: "30% - 50%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['basic']; ?>,
              color: "#CFCB6F",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['basic']; ?>,
              color: "#83B1DD",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['basic']; ?>,
              color: "#EB84A8",
            },
          ],
        },
        {
          name: "Below 30%",
          data: [{
              y: <?php echo (int)$dataArrRange2['evs']['performance_level']['state']['below_basic']; ?>,
              color: "#B6B156",
            },
            {
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['below_basic']; ?>,
              color: "#6997C3",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['below_basic']; ?>,
              color: "#D26A8E",
            },
          ],
        },
      ],

    });
  <?php }
  if ($grade2 == 8) { ?>
    Highcharts.chart("c8-range-graph", {
      chart: {
        type: "bar",
        height: 180,
      },
      title: {
        text: "",
      },
      xAxis: {
        // categories: ["Language", "Mathematics", "Science", "Social Science"],
        labels: {
          enabled: false,
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: "",
        },
        labels: {
          enabled: false,
        }
      },
      legend: {
        enabled: false,
      },
      plotOptions: {
        series: {
          stacking: "normal",
          dataLabels: {
            enabled: true
          }
        },
      },
      series: [{
          name: "Above 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['advanced']; ?>,
              color: "#BAD4EC",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['advanced']; ?>,
              color: "#F4BBCF",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['advanced']; ?>,
              color: "#B1DEDF",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['advanced']; ?>,
              color: "#C7E1C0",
            },
          ],
        },
        {
          name: "51% - 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['proficient']; ?>,
              color: "#9EC2E4",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['proficient']; ?>,
              color: "#F09FBB",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['proficient']; ?>,
              color: "#8ACDCE",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['proficient']; ?>,
              color: "#ABD3A1",
            },
          ],
        },
        {
          name: "30% - 50%",
          data: [{
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['basic']; ?>,
              color: "#83B1DD",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['basic']; ?>,
              color: "#EB84A8",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['basic']; ?>,
              color: "#63BDBE",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['basic']; ?>,
              color: "#8FC481",
            },
          ],
        },
        {
          name: "Below 30%",
          data: [{
              y: <?php echo (int)$dataArrRange2['language']['performance_level']['state']['below_basic']; ?>,
              color: "#6997C3",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['below_basic']; ?>,
              color: "#D26A8E",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['below_basic']; ?>,
              color: "#369B9D",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['below_basic']; ?>,
              color: "#68A358",
            },
          ],
        },
      ],

    });
  <?php }
  if ($grade2 == 10) { ?>
    Highcharts.chart("c10-range-graph", {
      chart: {
        type: "bar",
        height: 210,
      },
      title: {
        text: "",
      },
      xAxis: {
        // categories: [
        //   "MIL",
        //   "English",
        //   "Mathematics",
        //   "Science",
        //   "Social Science",
        // ],
        labels: {
          enabled: false,
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: "",
        },
      },
      legend: {
        enabled: false,
      },
      plotOptions: {
        series: {
          stacking: "normal",
          dataLabels: {
            enabled: true
          }
        },
      },
      series: [{
          name: "Above 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['mil']['performance_level']['state']['advanced']; ?>,
              color: "#F7C4C3",
            },
            {
              y: <?php echo (int)$dataArrRange2['eng']['performance_level']['state']['advanced']; ?>,
              color: "#E8C7E6",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['advanced']; ?>,
              color: "#F4BBCF",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['advanced']; ?>,
              color: "#B1DEDF",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['advanced']; ?>,
              color: "#C7E1C0",
            },
          ],
        },
        {
          name: "51% - 75%",
          data: [{
              y: <?php echo (int)$dataArrRange2['mil']['performance_level']['state']['proficient']; ?>,
              color: "#F3A6A5",
            },
            {
              y: <?php echo (int)$dataArrRange2['eng']['performance_level']['state']['proficient']; ?>,
              color: "#DCACD9",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['proficient']; ?>,
              color: "#F09FBB",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['proficient']; ?>,
              color: "#8ACDCE",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['proficient']; ?>,
              color: "#ABD3A1",
            },
          ],
        },
        {
          name: "30% - 50%",
          data: [{
              y: <?php echo (int)$dataArrRange2['mil']['performance_level']['state']['basic']; ?>,
              color: "#EF8987",
            },
            {
              y: <?php echo (int)$dataArrRange2['eng']['performance_level']['state']['basic']; ?>,
              color: "#D190CD",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['basic']; ?>,
              color: "#EB84A8",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['basic']; ?>,
              color: "#63BDBE",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['basic']; ?>,
              color: "#8FC481",
            },
          ],
        },
        {
          name: "Below 30%",
          data: [{
              y: <?php echo (int)$dataArrRange2['mil']['performance_level']['state']['below_basic']; ?>,
              color: "#D4605F",
            },
            {
              y: <?php echo (int)$dataArrRange2['eng']['performance_level']['state']['below_basic']; ?>,
              color: "#D4605F",
            },
            {
              y: <?php echo (int)$dataArrRange2['math']['performance_level']['state']['below_basic']; ?>,
              color: "#D26A8E",
            },
            {
              y: <?php echo (int)$dataArrRange2['sci']['performance_level']['state']['below_basic']; ?>,
              color: "#369B9D",
            },
            {
              y: <?php echo (int)$dataArrRange2['sst']['performance_level']['state']['below_basic']; ?>,
              color: "#68A358",
            },
          ],
        },
      ],

    });
  <?php } ?>
</script>