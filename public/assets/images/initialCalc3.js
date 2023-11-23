const _initialRoomSelectField = document.getElementById("room");
const _initialAreaSelectField = document.getElementById("area");
const _initialMonthSelectField = document.getElementById("month");
const _initialPercentSelectField = document.getElementById("percent");
const _initialpaymentByMonthSelectField = document.getElementById("paymentByMonth");

const _initialApartmentsPrice =  [
    {
        id: 1,
        name: "1 Otaqlı",
        areas: [
            {
                id: 1,
                area: 41.11,
                room: 1,
                areaName: "41.11 m&sup2;",
            },
            {
                id: 2,
                area: 41.12,
                room: 1,
                areaName: "41.12 m&sup2;",
            },
            {
                id: 3,
                area: 43.60,
                room: 1,
                areaName: "43.60 m&sup2;",
            },
            {
                id: 4,
                area: 60.49,
                room: 1,
                areaName: "60.49 m&sup2;",
            },
            {
                id: 5,
                area: 43.75,
                room: 1,
                areaName: "43.75 m&sup2;",
            },
            {
                id: 6,
                area: 45.65,
                room: 1,
                areaName: "45.65 m&sup2;",
            },
            {
                id: 7,
                area: 46.31,
                room: 1,
                areaName: "46.31 m&sup2;",
            },
            {
                id: 8,
                area: 47.15,
                room: 1,
                areaName: "47.15 m&sup2;",
            },
            {
                id: 9,
                area: 47.20,
                room: 1,
                areaName: "47.20 m&sup2;",
            },
            {
                id: 10,
                area: 48.31,
                room: 1,
                areaName: "48.31 m&sup2;",
            },
            {
                id: 11,
                area: 55.89,
                room: 1,
                areaName: "55.89 m&sup2;",
            },
            {
                id: 12,
                area: 55.9,
                room: 1,
                areaName: "55.90 m&sup2;",
            },
            {
                id: 13,
                area: 58.56,
                room: 1,
                areaName: "58.56 m&sup2;",
            },
        ],
        months: [
            // {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 6,
                monthName: "6 Ay",
            },
            {
                id: 3,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 4,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 5,
                month: 24,
                monthName: "24 Ay",
            },
            {
                id: 6,
                month: 30,
                monthName: "30 Ay",
            },
            {
                id: 7,
                month: 36,
                monthName: "36 Ay",
            }
         
        ],
        percents: [
            {
                id: 1,
                percent: 20,
                percentName: "20%",
            },
            {
                id: 2,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 3,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 4,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 5,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 6,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 7,
                percent: 100,
                percentName: "100%",
            },
        ],
        prices: [
            {
                percent: 1,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                    {
                        month: 3,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                     {
                        month: 4,
                        priceName: "1275 Azn",
                        price: 1275,
                    },
                    {
                        month: 5,
                        priceName: "1300 Azn",
                        price: 1300,
                    },
                    {
                        month: 6,
                        priceName: "1325 Azn",
                        price: 1325,
                    },
                     {
                        month: 7,
                        priceName: "1350 Azn",
                        price: 1350,
                    }
                    
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                    {
                        month: 3,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                     {
                        month: 4,
                        priceName: "1265 Azn",
                        price: 1265,
                    },
                    {
                        month: 5,
                        priceName: "1290 Azn",
                        price: 1290,
                    },
                    {
                        month: 6,
                        priceName: "1315 Azn",
                        price: 1315,
                    },
                     {
                        month: 7,
                        priceName: "1340 Azn",
                        price: 1340,
                    }
                    
                ],
            },
            {
                percent: 3,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                    {
                        month: 3,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                     {
                        month: 4,
                        priceName: "1255 Azn",
                        price: 1255,
                    },
                    {
                        month: 5,
                        priceName: "1280 Azn",
                        price: 1280,
                    },
                    {
                        month: 6,
                        priceName: "1305 Azn",
                        price: 1305,
                    },
                     {
                        month: 7,
                        priceName: "1330 Azn",
                        price: 1330,
                    }
                    
                ],
            },
            {
                percent: 4,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                    {
                        month: 3,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                     {
                        month: 4,
                        priceName: "1255 Azn",
                        price: 1255,
                    },
                    {
                        month: 5,
                        priceName: "1280 Azn",
                        price: 1280,
                    },
                    {
                        month: 6,
                        priceName: "1305 Azn",
                        price: 1305,
                    },
                     {
                        month: 7,
                        priceName: "1330 Azn",
                        price: 1330,
                    }
                    
                ],
            },
            {
                percent: 5,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                    {
                        month: 3,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                     {
                        month: 4,
                        priceName: "1245 Azn",
                        price: 1245,
                    },
                    {
                        month: 5,
                        priceName: "1270 Azn",
                        price: 1270,
                    },
                    {
                        month: 6,
                        priceName: "1295 Azn",
                        price: 1295,
                    },
                     {
                        month: 7,
                        priceName: "1320 Azn",
                        price: 1320,
                    }
                    
                ],
            },
            {
                percent: 6,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1205 Azn",
                        price: 1205,
                    },
                    {
                        month: 3,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                     {
                        month: 4,
                        priceName: "1235 Azn",
                        price: 1235,
                    },
                    {
                        month: 5,
                        priceName: "1260 Azn",
                        price: 1260,
                    },
                    {
                        month: 6,
                        priceName: "1285 Azn",
                        price: 1285,
                    },
                     {
                        month: 7,
                        priceName: "1310 Azn",
                        price: 1310,
                    }
                    
                ],
            },
            {
                percent: 7,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 3,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 4,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 5,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 6,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 7,
                        priceName: "1200 Azn",
                        price: 1200,
                    }
                    
                ],
            },
        ],
    },
    {
        id: 2,
        name: "2 Otaqlı",
        areas: [
            {
                id: 1,
                area: 71.54,
                room: 2,
                areaName: "71.54 m&sup2;",
            },
            {
                id: 2,
                area: 76.83,
                room: 2,
                areaName: "76.83 m&sup2;",
            },
            {
                id: 3,
                area: 76.91,
                room: 2,
                areaName: "76.91 m&sup2;",
            },
            {
                id: 4,
                area: 77,
                room: 2,
                areaName: "77.00 m&sup2;",
            },
            {
                id: 5,
                area: 79.37,
                room: 2,
                areaName: "79.37 m&sup2;",
            },
            {
                id: 6,
                area: 79.75,
                room: 2,
                areaName: "79.75 m&sup2;",
            },
            {
                id: 7,
                area: 84.74,
                room: 2,
                areaName: "84.74 m&sup2;",
            },
            {
                id: 8,
                area: 84.75,
                room: 2,
                areaName: "84.75 m&sup2;",
            },
            {
                id: 9,
                area: 87.24,
                room: 2,
                areaName: "87.24 m&sup2;",
            },
            {
                id: 10,
                area: 87.25,
                room: 2,
                areaName: "87.25 m&sup2;",
            },
            {
                id: 11,
                area: 89.98,
                room: 2,
                areaName: "89.98 m&sup2;",
            },
            {
                id: 12,
                area: 91,
                room: 2,
                areaName: "91.00 m&sup2;",
            },
        ],
        months: [
            //   {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 6,
                monthName: "6 Ay",
            },
            {
                id: 3,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 4,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 5,
                month: 24,
                monthName: "24 Ay",
            },
            {
                id: 6,
                month: 30,
                monthName: "30 Ay",
            },
            {
                id: 7,
                month: 36,
                monthName: "36 Ay",
            }
        ],
        percents: [
            {
                id: 1,
                percent: 20,
                percentName: "20%",
            },
            {
                id: 2,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 3,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 4,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 5,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 6,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 7,
                percent: 100,
                percentName: "100%",
            },
        ],
        prices: [
           {
                percent: 1,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                    {
                        month: 3,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                     {
                        month: 4,
                        priceName: "1275 Azn",
                        price: 1275,
                    },
                    {
                        month: 5,
                        priceName: "1300 Azn",
                        price: 1300,
                    },
                    {
                        month: 6,
                        priceName: "1325 Azn",
                        price: 1325,
                    },
                     {
                        month: 7,
                        priceName: "1350 Azn",
                        price: 1350,
                    }
                    
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                    {
                        month: 3,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                     {
                        month: 4,
                        priceName: "1275 Azn",
                        price: 1275,
                    },
                    {
                        month: 5,
                        priceName: "1300 Azn",
                        price: 1300,
                    },
                    {
                        month: 6,
                        priceName: "1325 Azn",
                        price: 1325,
                    },
                     {
                        month: 7,
                        priceName: "1350 Azn",
                        price: 1350,
                    }
                    
                ],
            },
            {
                percent: 3,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                    {
                        month: 3,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                     {
                        month: 4,
                        priceName: "1265 Azn",
                        price: 1265,
                    },
                    {
                        month: 5,
                        priceName: "1290 Azn",
                        price: 1290,
                    },
                    {
                        month: 6,
                        priceName: "1315 Azn",
                        price: 1315,
                    },
                     {
                        month: 7,
                        priceName: "1340 Azn",
                        price: 1340,
                    }
                ],
            },
            {
                percent: 4,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                    {
                        month: 3,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                     {
                        month: 4,
                        priceName: "1255 Azn",
                        price: 1255,
                    },
                    {
                        month: 5,
                        priceName: "1280 Azn",
                        price: 1280,
                    },
                    {
                        month: 6,
                        priceName: "1305 Azn",
                        price: 1305,
                    },
                     {
                        month: 7,
                        priceName: "1330 Azn",
                        price: 1330,
                    }
                    
                ],
            },
            {
                percent: 5,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                    {
                        month: 3,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                     {
                        month: 4,
                        priceName: "1245 Azn",
                        price: 1245,
                    },
                    {
                        month: 5,
                        priceName: "1270 Azn",
                        price: 1270,
                    },
                    {
                        month: 6,
                        priceName: "1295 Azn",
                        price: 1295,
                    },
                     {
                        month: 7,
                        priceName: "1320 Azn",
                        price: 1320,
                    }
                    
                ],
            },
            {
                percent: 6,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1205 Azn",
                        price: 1205,
                    },
                    {
                        month: 3,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                     {
                        month: 4,
                        priceName: "1235 Azn",
                        price: 1235,
                    },
                    {
                        month: 5,
                        priceName: "1260 Azn",
                        price: 1260,
                    },
                    {
                        month: 6,
                        priceName: "1285 Azn",
                        price: 1285,
                    },
                     {
                        month: 7,
                        priceName: "1310 Azn",
                        price: 1310,
                    }
                    
                ],
            },
            {
                percent: 7,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 3,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 4,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 5,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 6,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 7,
                        priceName: "1200 Azn",
                        price: 1200,
                    }
                    
                ],
            }
        ],
    },
    {
        id: 3,
        name: "3 Otaqlı",
        areas: [
            {
                id: 1,
                area: 90.93,
                room: 3,
                areaName: "90.93 m&sup2;",
            },
            {
                id: 2,
                area: 93.55,
                room: 3,
                areaName: "93.55 m&sup2;",
            },
            {
                id: 3,
                area: 98.76,
                room: 3,
                areaName: "98.76 m&sup2;",
            },
            {
                id: 4,
                area: 103.33,
                room: 3,
                areaName: "103.33 m&sup2;",
            },
            {
                id: 5,
                area: 108.56,
                room: 3,
                areaName: "108.56 m&sup2;",
            },
        ],
        months: [
            // {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 6,
                monthName: "6 Ay",
            },
            {
                id: 3,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 4,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 5,
                month: 24,
                monthName: "24 Ay",
            },
            {
                id: 6,
                month: 30,
                monthName: "30 Ay",
            },
            {
                id: 7,
                month: 36,
                monthName: "36 Ay",
            }
        ],
        percents: [
           {
                id: 1,
                percent: 20,
                percentName: "20%",
            },
            {
                id: 2,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 3,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 4,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 5,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 6,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 7,
                percent: 100,
                percentName: "100%",
            },
        ],
        prices: [
           {
                percent: 1,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                    {
                        month: 3,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                     {
                        month: 4,
                        priceName: "1275 Azn",
                        price: 1275,
                    },
                    {
                        month: 5,
                        priceName: "1300 Azn",
                        price: 1300,
                    },
                    {
                        month: 6,
                        priceName: "1325 Azn",
                        price: 1325,
                    },
                     {
                        month: 7,
                        priceName: "1350 Azn",
                        price: 1350,
                    }
                    
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                    {
                        month: 3,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                     {
                        month: 4,
                        priceName: "1275 Azn",
                        price: 1275,
                    },
                    {
                        month: 5,
                        priceName: "1300 Azn",
                        price: 1300,
                    },
                    {
                        month: 6,
                        priceName: "1325 Azn",
                        price: 1325,
                    },
                     {
                        month: 7,
                        priceName: "1350 Azn",
                        price: 1350,
                    }
                    
                ],
            },
            {
                percent: 3,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                    {
                        month: 3,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                     {
                        month: 4,
                        priceName: "1265 Azn",
                        price: 1265,
                    },
                    {
                        month: 5,
                        priceName: "1290 Azn",
                        price: 1290,
                    },
                    {
                        month: 6,
                        priceName: "1315 Azn",
                        price: 1315,
                    },
                     {
                        month: 7,
                        priceName: "1340 Azn",
                        price: 1340,
                    }
                    
                ],
            },
            {
                percent: 4,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                    {
                        month: 3,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                     {
                        month: 4,
                        priceName: "1255 Azn",
                        price: 1255,
                    },
                    {
                        month: 5,
                        priceName: "1280 Azn",
                        price: 1280,
                    },
                    {
                        month: 6,
                        priceName: "1305 Azn",
                        price: 1305,
                    },
                     {
                        month: 7,
                        priceName: "1330 Azn",
                        price: 1330,
                    }
                    
                ],
            },
            {
                percent: 5,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                    {
                        month: 3,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                     {
                        month: 4,
                        priceName: "1245 Azn",
                        price: 1245,
                    },
                    {
                        month: 5,
                        priceName: "1270 Azn",
                        price: 1270,
                    },
                    {
                        month: 6,
                        priceName: "1295 Azn",
                        price: 1295,
                    },
                     {
                        month: 7,
                        priceName: "1320 Azn",
                        price: 1320,
                    }
                    
                ],
            },
            {
                percent: 6,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1205 Azn",
                        price: 1205,
                    },
                    {
                        month: 3,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                     {
                        month: 4,
                        priceName: "1235 Azn",
                        price: 1235,
                    },
                    {
                        month: 5,
                        priceName: "1260 Azn",
                        price: 1260,
                    },
                    {
                        month: 6,
                        priceName: "1285 Azn",
                        price: 1285,
                    },
                     {
                        month: 7,
                        priceName: "1310 Azn",
                        price: 1310,
                    }
                    
                ],
            },
            {
                percent: 7,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 3,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 4,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 5,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 6,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 7,
                        priceName: "1200 Azn",
                        price: 1200,
                    }
                    
                ],
            },
        ],
    },
    {
        id: 4,
        name: "4 Otaqlı",
        areas: [
            {
                id: 1,
                area: 156.98,
                room: 4,
                areaName: "156.98 m&sup2;",
            },
            {
                id: 2,
                area: 161.59,
                room: 4,
                areaName: "161.59 m&sup2;",
            },
            {
                id: 3,
                area: 163.49,
                room: 4,
                areaName: "163.49 m&sup2;",
            }
        ],
        months: [
            // {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 6,
                monthName: "6 Ay",
            },
            {
                id: 3,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 4,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 5,
                month: 24,
                monthName: "24 Ay",
            },
            {
                id: 6,
                month: 30,
                monthName: "30 Ay",
            },
            {
                id: 7,
                month: 36,
                monthName: "36 Ay",
            }
        ],
        percents: [
           {
                id: 1,
                percent: 20,
                percentName: "20%",
            },
            {
                id: 2,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 3,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 4,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 5,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 6,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 7,
                percent: 100,
                percentName: "100%",
            },
        ],
        prices: [
           {
                percent: 1,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                    {
                        month: 3,
                        priceName: "1260 Azn",
                        price: 1260,
                    },
                     {
                        month: 4,
                        priceName: "1285 Azn",
                        price: 1285,
                    },
                    {
                        month: 5,
                        priceName: "1310 Azn",
                        price: 1310,
                    },
                    {
                        month: 6,
                        priceName: "1335 Azn",
                        price: 1335,
                    },
                     {
                        month: 7,
                        priceName: "1360 Azn",
                        price: 1360,
                    }
                    
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                    {
                        month: 3,
                        priceName: "1250 Azn",
                        price: 1250,
                    },
                     {
                        month: 4,
                        priceName: "1275 Azn",
                        price: 1275,
                    },
                    {
                        month: 5,
                        priceName: "1300 Azn",
                        price: 1300,
                    },
                    {
                        month: 6,
                        priceName: "1325 Azn",
                        price: 1325,
                    },
                     {
                        month: 7,
                        priceName: "1350 Azn",
                        price: 1350,
                    }
                    
                ],
            },
            {
                percent: 3,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                    {
                        month: 3,
                        priceName: "1240 Azn",
                        price: 1240,
                    },
                     {
                        month: 4,
                        priceName: "1265 Azn",
                        price: 1265,
                    },
                    {
                        month: 5,
                        priceName: "1290 Azn",
                        price: 1290,
                    },
                    {
                        month: 6,
                        priceName: "1315 Azn",
                        price: 1315,
                    },
                     {
                        month: 7,
                        priceName: "1340 Azn",
                        price: 1340,
                    }
                    
                ],
            },
            {
                percent: 4,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                    {
                        month: 3,
                        priceName: "1230 Azn",
                        price: 1230,
                    },
                     {
                        month: 4,
                        priceName: "1255 Azn",
                        price: 1255,
                    },
                    {
                        month: 5,
                        priceName: "1280 Azn",
                        price: 1280,
                    },
                    {
                        month: 6,
                        priceName: "1305 Azn",
                        price: 1305,
                    },
                     {
                        month: 7,
                        priceName: "1330 Azn",
                        price: 1330,
                    }
                    
                ],
            },
            {
                percent: 5,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                    {
                        month: 3,
                        priceName: "1220 Azn",
                        price: 1220,
                    },
                     {
                        month: 4,
                        priceName: "1245 Azn",
                        price: 1245,
                    },
                    {
                        month: 5,
                        priceName: "1270 Azn",
                        price: 1270,
                    },
                    {
                        month: 6,
                        priceName: "1295 Azn",
                        price: 1295,
                    },
                     {
                        month: 7,
                        priceName: "1320 Azn",
                        price: 1320,
                    }
                    
                ],
            },
            {
                percent: 6,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1205 Azn",
                        price: 1205,
                    },
                    {
                        month: 3,
                        priceName: "1210 Azn",
                        price: 1210,
                    },
                     {
                        month: 4,
                        priceName: "1235 Azn",
                        price: 1235,
                    },
                    {
                        month: 5,
                        priceName: "1260 Azn",
                        price: 1260,
                    },
                    {
                        month: 6,
                        priceName: "1285 Azn",
                        price: 1285,
                    },
                     {
                        month: 7,
                        priceName: "1310 Azn",
                        price: 1310,
                    }
                    
                ],
            },
            {
                percent: 7,
                months:  [
                    // {
                    //     month: 1,
                    //     priceName: "1200 Azn",
                    //     price: 1200,
                    // },
                    {
                        month: 2,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 3,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 4,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 5,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                    {
                        month: 6,
                        priceName: "1200 Azn",
                        price: 1200,
                    },
                     {
                        month: 7,
                        priceName: "1200 Azn",
                        price: 1200,
                    }
                    
                ],
            },
        ],
    },
];
function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
function initialRoom() {
    let innerRoomOption = ``;
    _initialApartmentsPrice.forEach((room) =>(innerRoomOption += `<option  value="${room.id}"  ${room.id == 1 ? "selected" : null}>${room.name}</option>`));
    _initialRoomSelectField.innerHTML = innerRoomOption;
}
function initialArea() {
    let innerAraeOption = ``;
    _initialApartmentsPrice[0].areas.forEach(
        (room) =>
            (innerAraeOption += `<option data-area="${room.area}"  ${
                room.id == 1 ? "selected" : "null"
            } value="${room.id}">${room.areaName}</option>`)
    );
    _initialAreaSelectField.innerHTML = innerAraeOption;
}
function initialMonth() {
    let monthAreaOption = ``;
    _initialApartmentsPrice[0].months.forEach( (month) =>(monthAreaOption += `<option data-area="${month.month}"  ${ month.id == 1 ? `selected` : null} value="${month.id}">${month.monthName}</option>`)
    );
    _initialMonthSelectField.innerHTML = monthAreaOption;
}
function initialPercent(){
    let percentAreaOption = ``;
    _initialApartmentsPrice[0].percents.forEach( (percent) =>(percentAreaOption += `<option data-area="${percent.percent}"  ${percent.id == 1 ? `selected` : null} value="${percent.id}">${percent.percentName}</option>`));
    _initialPercentSelectField.innerHTML = percentAreaOption;
}
function initialPrice(){
    let homePrice=  document.getElementById("homePrice");
    homePrice.innerText = _initialApartmentsPrice[0].areas[0].price;
}
function initialPayment(){
    let initialPayment = document.getElementById("initialPaymet");
    initialPayment.innerText = (_initialApartmentsPrice[0].areas[0].price *_initialApartmentsPrice[0].percents[0].percent) /100;
}
function initialPeriod(){
    let initalPeriod = document.getElementById("monthPeriod");
    initalPeriod.innerText =_initialApartmentsPrice[0].months[0].monthName;
}
function initialpaymentByMonth(){
    let initialpaymentByMonth = document.getElementById("paymentByMonth");
    initialpaymentByMonth.innerHTML = 0
}
function initialHomePrice(){
    let initialHomePrice = document.getElementById("homePrice");
    initialHomePrice.innerHTML = (_initialApartmentsPrice[0].months[0].month * _initialApartmentsPrice[0].prices[0].months[0].price) + (_initialApartmentsPrice[0].areas[0].price *_initialApartmentsPrice[0].percents[0].percent) /100
}
function initialCalculate(){
    initialRoom()
    initialArea()
    initialMonth()
    initialPercent()
    initialPrice()
    initialPayment()
    initialPeriod()
    initialpaymentByMonth()
    initialHomePrice()



}
function calculate(){
    $_room = $("#room").val();
    $_area = $("#area").val();
    $_percent = $("#percent").val();
    $_month = $("#month").val();
    let selectedRoom = _initialApartmentsPrice.filter((room) => room.id === parseInt($_room))[0];
    let selectArea = selectedRoom.areas.filter((area) => area.id === parseInt($_area))[0];
    let selectedMonth = selectedRoom.months.filter((month) => month.id === parseInt($_month))[0];
    let selectedPercent = selectedRoom.percents.filter((percent) => percent.id === parseInt($_percent))[0].percent;
    document.getElementById("monthPeriod").innerHTML = selectedMonth.monthName;
    _initialApartmentsPrice.filter(function (room) {
        if (room.id === parseInt($_room)) {
            room.prices.filter(function (price) {
                if (price.percent === parseInt($_percent)) {
                    price.months.filter(function (month) {
                        if (month.month === parseInt($_month)) {
                            let homePrice = document.getElementById("homePrice");
                            let paymentByMonth =document.getElementById("paymentByMonth");
                            let initialPayment =document.getElementById("initialPaymet");
                            if (selectedPercent === 100) {
                                homePrice.innerHTML = formatNumber((month.price * selectArea.area).toFixed(2))
                                initialPayment.innerHTML = 0 ;
                                paymentByMonth.innerHTML =0
                            } else {
                                let $_homeFixPrice = (month.price * selectArea.area).toFixed(2);
                                let $_initialPrice =  (($_homeFixPrice*selectedPercent)/100).toFixed(2);
                                homePrice.innerHTML = (month.price * selectArea.area).toFixed(2)
                                initialPayment.innerHTML =formatNumber($_initialPrice) ;
                                paymentByMonth.innerHTML = formatNumber((($_homeFixPrice - $_initialPrice)/ selectedMonth.month).toFixed(2));
                            }
                        }
                    });
                }
            });
        }
    });
}
initialCalculate()
calculate()
