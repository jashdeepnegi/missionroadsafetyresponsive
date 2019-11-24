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
        text: 'Total Number of Killed Persons per 1 Lac Population, 2007vs 2017'
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
                'Total no. of Killed Persons per 1 lac population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
        }
    },

    series: [{
        name: '2007',
        data: [
            -16.7,-8,-5.4,-3.8,-11.2,-20.4,-12.4,-18.9,-15.1,-8,-7,-15.5,-11.1,-9.8,-10.6,-4.4,-5.1,-5.2,-4.1,-7.6,-12.8,-12.8,-8.9,-18.3,-6.4,-10.6,-6.1,-5.5,-5.7,-14.6,-25.9,-15.8,-12.9,-0,-24.1,-10.1]
    }, {
        name: '2017',
        data: [
            9.1,8.3,8.5,5.3,15.8,16.2,11.5,18.4,16.8,7.4,9.6,16.9,11.5,12.9,10.1,5.2,6.5,5.6,1.7,11.2,15.2,14.1,11.9,23.2,4.2,8.8,9.1,6.1,3.7,5.8,9.8,10.5,7.2,0.0,13.4,11.5]
    }]
});

Highcharts.chart('container1', {

  title: {
    text: 'Total Number of Killed Persons, 1994 to 2017'
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
    name: 'Total no. of Killed Persons',
    data: [64463,70781,74665,76977,79919,81966,78911,80888,84674,85998,92618,94968,105749,114444,119860,125660,134513,142485,138258,137572,139671,146133,150785,147913]
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
