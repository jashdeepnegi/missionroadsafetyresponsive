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
        text: 'Total No. of Injured Persons per 1 Lac Population, 2007 vs 2017'
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
                'Total no. of Injured Persons per 1 lac population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
        }
    },

    series: [{
        name: '2007',
        data: [
            -72.8,-41.2,-19.3,-6.5,-50.5,-197.8,-64.3,-43.9,-82.2,-66.1,-14.8,-108.2,-142.3,-66.5,-44.9,-40.2,-14.3,-6.7,-8.8,-28.6,-16.9,-49,-46.3,-108,-38.3,-21.1,-7.7,-15,-77.7,-51.1,-36.9,-34.4,-46.6,-3,-167.2,-45.4]
    }, {
        name: '2017',
        data: [
            30.9,23.8,18.8,5.7,47.9,95.0,26.4,37.1,76.2,59.1,11.5,84.2,119.0,72.9,26.4,39.2,12.6,5.1,15.6,26.2,14.4,29.9,73.4,106.9,18.6,15.2,12.4,10.7,46.7,16.2,13.7,20.3,30.2,1.2,100.5,36.7]
    }]
});

Highcharts.chart('container1', {

  title: {
    text: 'Total Number of Injured Persons, 1994 to 2017'
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
    name: 'Total no. of Injured Persons',
    data: [311500,323200,369502,378361,390674,375051,399265,405216,408711,435122,464521,465282,496481,513340,523193,515458,527512,511394,509667,494893,493474,500279,494624,470975]
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
