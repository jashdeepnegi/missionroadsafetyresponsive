// Data gathered from http://populationpyramid.net/germany/2015/

// Age categories
var categories = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar',
    'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh',
    'Jammu & Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh',
    'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland',
    'Odisha', 'Punjab ','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttarakhand','Uttar Pradesh','West Bengal','Andaman & Nicobar Islands','Chandigarh','Dadra & Nagar Haveli','Daman & Diu','Delhi','Lakshadweep','Puducherry','India'
];

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Total Accidents per 1 Lac Population, 2007vs 2017'
    },
    
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        }
    }, { // mirror axis on right side
        opposite: true,
        reversed: false,
        categories: categories,
        linkedTo: 0,
        labels: {
            step: 1
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value) ;
            }
        }
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + ', State/UTs: ' + this.point.category + '</b><br/>' +
                'Total no. of accidents per 1 lac population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
        }
    },

    series: [{
        name: '2007',
        data: [
            -54.5,-20.3,-14.9,-8.4,-52.9,-254.3,-60.5,-51.3,-45.5,-49,-17.9,-81.7,-117.7,-61.7,-69.8,-20.7,-12,-8,-11.1,-20.8,-19.8,-37.6,-25.6,-89.8,-23.1,-16.3,-11.5,-13.4,-42.9,-51.5,-45.5,-32.8,-52,-3,-164.8,-42.4
        ]
    }, {
        name: '2017',
        data: [
            28.9,18.2,21.9,8.4,51.8,193.6,30.0,40.4,43.5,44.8,15.3,67.6,107.2,67.6,29.5,22.1,24.1,6.3,22.1,25.4,21.4,29.9,30.0,94.0,13.0,14.9,17.5,12.3,33.6,18.4,15.3,23.0,30.5,1.2,97.7,36.2
        ]
    }]
});

Highcharts.chart('container1', {

  title: {
    text: 'Total Number of accidents, 1994 to 2017'
  },

  

  yAxis: {
    title: {
      text: 'Counts'
    }
  },
  

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },
      pointStart: 1994
    }
  },

  series: [{
    name: 'Total no. of Accidents',
    data: [325864,351999,371204,373671,385018,386456,391449,405637,407497,406726,429910,439255,460920,479216,484704,486384,499628,497686,490383,486476,489400,501423,480652,464910]
  }, {
    name: 'Population (in data point x 2)',
    data: [904000/2,924359/2,941579/2,959792/2,978081/2,996130/2,1014825/2,1028610/2,1045547/2,1062388/2,1079117/2,1095722/2,1112186/2,1128521/2,1144734/2,1160813/2,1176742/2,1210193/2,1208116/2,1223581/2,1238887/2,1254019/2,1268961/2,1283601/2]
  }, {
    name: 'Total number of registered Vehicles',
    data: [27660,30295,33786,37332,41368,44875,48857,54991,58924,67007,72718,81502,89618,96707,105353,114951,127746,141866,159491,181508,190704,210023,230031,null]
  }, {
    name: 'Total Road Length (in data point x 10) ',
    data: [289095.0,297503.5,320251.5,329878.8,322835.6,329665.0,331607.8,337352.0,342660.3,352865.4,362150.7,380915.6,388065.1,401640.1,410959.2,447151.0,458243.9,467683.8,486539.4,523192.2,540248.6,547214.4,560329.3]
  },],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'bottom',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
