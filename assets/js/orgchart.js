Highcharts.chart('container', {
    chart: {
        height: 500,
        inverted: true
    },

    title: {
        text: 'Registrar Office Organizational Chart'
    },

    accessibility: {
        point: {
            descriptionFormatter: function (point) {
                var nodeName = point.toNode.name,
                    nodeId = point.toNode.id,
                    nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
                    parentDesc = point.fromNode.id;
                return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
            }
        }
    },

    series: [{
        type: 'organization',
        name: 'REGISTRAR OFFICE',
        keys: ['from', 'to'],
        data: [
            ['CEO', 'CTO'],
            ['CEO', 'CPO'],
            ['CEO', 'CSO'],
            ['CEO', 'HR'],
            ['CEO', 'CZO'],
        ],
        levels: [{
            level: 0,
            color: 'black',
            dataLabels: {
                color: 'black'
            },
            height: 25
        }, {
            level: 1,
            color: 'black',
            dataLabels: {
                color: 'black'
            },
            height: 25
        }, {
            level: 2,
            color: 'black'
        }, {
            level: 4,
            color: 'black'
        }],
        nodes: [{
        }, {
            id: 'CEO',
            title: 'URS President',
            name: 'DR. Nancy T. Pascual',
            color: '#17baef',
            image: src='assets/images/profile.png',
        }, {
            id: 'HR',
            title: 'Registrar Staff',
            name: 'MS. Roselle Joy M. Bitong',
            color: '#17baef',
            image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131210/Highsoft_04045_.jpg'
        }, {
            id: 'CTO',
            title: 'VP Academic Affairs',
            name: 'DR. Allan E. Conde',
            color: '#17baef',
            image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131120/Highsoft_04074_.jpg'
        }, {
            id: 'CPO',
            title: 'Campus Director',
            name: 'DR. Joanne S. Concepcion',
            color: '#17baef',
            image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131213/Highsoft_03998_.jpg'
        }, {
            id: 'CSO',
            title: 'URSB Registrar',
            name: 'MS. Marlene S. Julian',
            color: '#17baef',
            image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131156/Highsoft_03834_.jpg'
        },
           {
            id: 'CZO',
            title: 'Registrar Staff',
            name: 'MR. Michael Arada',
            color: '#17baef',
            image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131210/Highsoft_04045_.jpg'
        },
    ],
        colorByPoint: false,
        color: '#007ad0',
        dataLabels: {
        color: 'white'
        },
        borderColor: 'white',
        nodeWidth: 65
    }],
    tooltip: {
        outside: true
    },
    exporting: {
        allowHTML: true,
        sourceWidth: 800,
        sourceHeight: 600
    }

});