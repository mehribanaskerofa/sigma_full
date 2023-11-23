var _room;
var _area;
var _repairType;
var _initialPaymet;
var _annualInterestRate;
const _roomSelectField = document.getElementById("room");
const _areaSelectField = document.getElementById("area");
const _monthSelectField = document.getElementById("month");
const _percentSelectField = document.getElementById("percent");


const apartmentsPrice = [
    {
        id: 1,
        name: "1 Otaqlı",
        areas: [
            {
                id: 1,
                area: 59.75,
                room: 1,
                areaName: "59.75 m&sup2;",
            },
            // {
            //     id: 2,
            //     area: 58.46,
            //     room: 1,
            //     areaName: "58.46 m&sup2;",
            // },
            // {
            //     id: 3,
            //     area: 59.94,
            //     room: 1,
            //     areaName: "59.94 m&sup2;",
            // },
            // {
            //     id: 4,
            //     area: 60.49,
            //     room: 1,
            //     areaName: "60.49 m&sup2;",
            // },
            // {
            //     id: 5,
            //     area: 64.78,
            //     room: 1,
            //     areaName: "64.78 m&sup2;",
            // },
        ],
        months: [
            // {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 3,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 4,
                month: 24,
                monthName: "24 Ay",
            },
        ],
        percents: [
            // {
            //     id: 1,
            //     percent: 30,
            //     percentName: "30%",
            // },
            // {
            //     id: 2,
            //     percent: 40,
            //     percentName: "40%",
            // },
            {
                id: 1,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 2,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 3,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 4,
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
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3100 Azn",
                        price: 3100,
                    },
                    {
                        month: 3,
                        priceName: "3150 Azn",
                        price: 3150,
                    },
                     {
                        month: 4,
                        priceName: "3200 Azn",
                        price: 3200,
                    },
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3090 Azn",
                        price: 3090,
                    },
                    {
                        month: 3,
                        priceName: "3140 Azn",
                        price: 3140,
                    },
                     {
                        month: 4,
                        priceName: "3190 Azn",
                        price: 3190,
                    },
                ],
            },
            {
                percent: 3,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3080 Azn",
                        price: 3080,
                    },
                    {
                        month: 3,
                        priceName: "3130 Azn",
                        price: 3130,
                    },
                    {
                        month: 4,
                        priceName: "3180 Azn",
                        price: 3180,
                    },
                ],
            },
            {
                percent: 4,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    {
                        month: 3,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                     {
                        month: 4,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                ],
            },
            // {
            //     percent: 5,
            //     months: [
            //         {
            //             month: 1,
            //             priceName: "1790 Azn",
            //             price: 1790,
            //         },
            //         {
            //             month: 2,
            //             priceName: "1815 Azn",
            //             price: 1815,
            //         },
            //         {
            //             month: 3,
            //             priceName: "1840 Azn",
            //             price: 1840,
            //         },
            //     ],
            // },
            // {
            //     percent: 6,
            //     months: [
            //         {
            //             month: 1,
            //             priceName: "1780 Azn",
            //             price: 1780,
            //         },
            //         {
            //             month: 2,
            //             priceName: "1780 Azn",
            //             price: 1780,
            //         },
            //         {
            //             month: 3,
            //             priceName: "1780 Azn",
            //             price: 1780,
            //         },
            //     ],
            // },
        ],
    },
    {
        id: 2,
        name: "2 Otaqlı",
        areas: [
            // {
            //     id: 1,
            //     area: 79.08,
            //     room: 2,
            //     areaName: "79.08 m&sup2;",
            // },
              {
                id: 1,
                area: 76.21,
                room: 2,
                areaName: "76.21 m&sup2;",
            },
            {
                id: 2,
                area: 76.36,
                room: 2,
                areaName: "79.36 m&sup2;",
            },
            // {
            //     id: 3,
            //     area: 79.56,
            //     room: 2,
            //     areaName: "79.56 m&sup2;",
            // },
            // {
            //     id: 4,
            //     area: 85.65,
            //     room: 2,
            //     areaName: "85.65 m&sup2;",
            // },
        ],
        months: [
            //   {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 3,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 4,
                month: 24,
                monthName: "24 Ay",
            },
            // {
            //     id: 4,
            //     month: 30,
            //     monthName: "30 Ay",
            // },
            // {
            //     id: 5,
            //     month: 36,
            //     monthName: "36 Ay",
            // },
        ],
        percents: [
            // {
            //     id: 1,
            //     percent: 30,
            //     percentName: "30%",
            // },
            // {
            //     id: 2,
            //     percent: 40,
            //     percentName: "40%",
            // },
            {
                id: 1,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 2,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 3,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 4,
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
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3100 Azn",
                        price: 3100,
                    },
                    {
                        month: 3,
                        priceName: "3150 Azn",
                        price: 3150,
                    },
                    {
                        month: 4,
                        priceName: "3200 Azn",
                        price: 3200,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1850 Azn",
                    //     price: 1850,
                    // },
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3090 Azn",
                        price: 3090,
                    },
                    {
                        month: 3,
                        priceName: "3140 Azn",
                        price: 3140,
                    },
                    {
                        month: 4,
                        priceName: "3190 Azn",
                        price: 3190,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1840 Azn",
                    //     price: 1840,
                    // },
                ],
            },
            {
                percent: 3,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3080 Azn",
                        price: 3080,
                    },
                    {
                        month: 3,
                        priceName: "3130 Azn",
                        price: 3130,
                    },
                    {
                        month: 4,
                        priceName: "3180 Azn",
                        price: 3180,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1830 Azn",
                    //     price: 1830,
                    // },
                ],
            },
            {
                percent: 4,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    {
                        month: 3,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    {
                        month: 4,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1820 Azn",
                    //     price: 1820,
                    // },
                ],
            },
            // {
            //     percent: 5,
            //     months: [
            //         {
            //             month: 1,
            //             priceName: "1710 Azn",
            //             price: 1710,
            //         },
            //         {
            //             month: 2,
            //             priceName: "1735 Azn",
            //             price: 1735,
            //         },
            //         {
            //             month: 3,
            //             priceName: "1760 Azn",
            //             price: 1760,
            //         },
            //         {
            //             month: 4,
            //             priceName: "1785 Azn",
            //             price: 1785,
            //         },
            //         {
            //             month: 5,
            //             priceName: "1810 Azn",
            //             price: 1810,
            //         },
            //     ],
            // },
            // {
            //     percent: 6,
            //     months: [
            //         {
            //             month: 1,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 2,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 3,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 4,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 5,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //     ],
            // }
        ],
    },
    {
        id: 3,
        name: "3 Otaqlı",
        areas: [
            {
                id: 1,
                area: 115.44,
                room: 3,
                areaName: "115.44 m&sup2;",
            },
            {
                id: 2,
                area: 111.86,
                room: 3,
                areaName: "111.86 m&sup2;",
            },
            {
                id: 3,
                area: 142.79,
                room: 3,
                areaName: "142.79 m&sup2;",
            },
        
        ],
        months: [
            //  {
            //     id: 1,
            //     month: 3,
            //     monthName: "3 Ay",
            // },
            {
                id: 2,
                month: 12,
                monthName: "12 Ay",
            },
            {
                id: 3,
                month: 18,
                monthName: "18 Ay",
            },
            {
                id: 4,
                month: 24,
                monthName: "24 Ay",
            },
            // {
            //     id: 4,
            //     month: 30,
            //     monthName: "30 Ay",
            // },
            // {
            //     id: 5,
            //     month: 36,
            //     monthName: "36 Ay",
            // },
        ],
        percents: [
            // {
            //     id: 1,
            //     percent: 30,
            //     percentName: "30%",
            // },
            // {
            //     id: 2,
            //     percent: 40,
            //     percentName: "40%",
            // },
            {
                id: 1,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 2,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 3,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 4,
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
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3100 Azn",
                        price: 3100,
                    },
                    {
                        month: 3,
                        priceName: "3150 Azn",
                        price: 3150,
                    },
                    {
                        month: 4,
                        priceName: "3200 Azn",
                        price: 3200,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1850 Azn",
                    //     price: 1850,
                    // },
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3090 Azn",
                        price: 3090,
                    },
                    {
                        month: 3,
                        priceName: "3140 Azn",
                        price: 3140,
                    },
                    {
                        month: 4,
                        priceName: "3190 Azn",
                        price: 3190,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1840 Azn",
                    //     price: 1840,
                    // },
                ],
            },
            {
                percent: 3,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 3000,
                    // },
                    {
                        month: 2,
                        priceName: "3080 Azn",
                        price: 3080,
                    },
                    {
                        month: 3,
                        priceName: "3130 Azn",
                        price: 3130,
                    },
                    {
                        month: 4,
                        priceName: "3180 Azn",
                        price: 3180,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1830 Azn",
                    //     price: 1830,
                    // },
                ],
            },
            {
                percent: 4,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "3000 Azn",
                    //     price: 1720,
                    // },
                    {
                        month: 2,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    {
                        month: 3,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    {
                        month: 4,
                        priceName: "3000 Azn",
                        price: 3000,
                    },
                    // {
                    //     month: 5,
                    //     priceName: "1820 Azn",
                    //     price: 1820,
                    // },
                ],
            },
            // {
            //     percent: 5,
            //     months: [
            //         {
            //             month: 1,
            //             priceName: "1710 Azn",
            //             price: 1710,
            //         },
            //         {
            //             month: 2,
            //             priceName: "1735 Azn",
            //             price: 1735,
            //         },
            //         {
            //             month: 3,
            //             priceName: "1760 Azn",
            //             price: 1760,
            //         },
            //         {
            //             month: 4,
            //             priceName: "1785 Azn",
            //             price: 1785,
            //         },
            //         {
            //             month: 5,
            //             priceName: "1810 Azn",
            //             price: 1810,
            //         },
            //     ],
            // },
            // {
            //     percent: 6,
            //     months: [
            //         {
            //             month: 1,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 2,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 3,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 4,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //         {
            //             month: 5,
            //             priceName: "1700 Azn",
            //             price: 1700,
            //         },
            //     ],
            // }
        ],
    },
];
function initialRoom() {
    let innerRoomOption = ``;
    apartmentsPrice.forEach(
        (room) =>
            (innerRoomOption += `<option  value="${room.id}"  ${
                room.id == 1 ? "selected" : null
            }>${room.name}</option>`)
    );
    _roomSelectField.innerHTML = innerRoomOption;
}

function _changeRoom(selectedRoom) {
    let selectRoom = apartmentsPrice.filter(
        (room) => room.id == selectedRoom.value
    );
    let innerAraeOption = ``;
    selectRoom[0].areas.forEach(
        (room) =>
            (innerAraeOption += `<option data-area="${room.area}"  value="${room.id}">${room.areaName}</option>`)
    );
    _areaSelectField.innerHTML = innerAraeOption;

    let monthAreaOption = ``;
    selectRoom[0].months.forEach(
        (month) =>
            (monthAreaOption += `<option data-area="${month.month}"  ${
                month.id == 1 ? `selected` : null
            } value="${month.id}">${month.monthName}</option>`)
    );
    _monthSelectField.innerHTML = monthAreaOption;

    let percentAreaOption = ``;
    selectRoom[0].percents.forEach(
        (percent) =>
            (percentAreaOption += `<option data-area="${percent.percent}"  ${
                percent.id == 1 ? `selected` : null
            } value="${percent.id}">${percent.percentName}</option>`)
    );
    _percentSelectField.innerHTML = percentAreaOption;

    _room = selectedRoom.value;
    hesabla()

}

function _selectArea(selectedArea) {
    let selectRoom = apartmentsPrice.filter((room) => room.id === parseInt(_room ?? 1))[0];
    let selectArea = selectRoom.areas.filter((area) => area.id === parseInt(selectedArea.value))[0];
    let homePrice = document.getElementById("homePrice");
    homePrice.innerText = selectArea.price;
    hesabla()
}

function _changePercent(percent){
    hesabla()
}


function _changeMonth(percent){
    hesabla()
}
function _changePercentHouse(percent){
    hesabi()
}


function _changeMonthHouse(percent){
    hesabi()
}

function hesabi(){
    $_room1 = $("#room1").data('area');
    $_area1 = $("#area1").data('area');
    $_percent = $("#percent").val();
    $_month = $("#month").val();
    // console.log($_area,$_room,$_percent,$_month)
    let selectedRoom = apartmentsPrice.filter((room) => room.id === parseInt($_room1))[0];
    let selectArea = $_area1;
    let selectedMonth = selectedRoom.months.filter((month) => month.id === parseInt($_month))[0];
    let selectedPercent = selectedRoom.percents.filter((percent) => percent.id === parseInt($_percent))[0].percent;


    // document.getElementById("monthPeriod").innerHTML = selectedMonth.monthName;
    apartmentsPrice.filter(function (room) {
        if (room.id === parseInt($_room1)) {
            room.prices.filter(function (price) {
                if (price.percent === parseInt($_percent)) {
                    price.months.filter(function (month) {
                        if (month.month === parseInt($_month)) {
                            let homePrice = document.getElementById("homePrice");
                            let paymentByMonth =document.getElementById("paymentByMonth");
                            let initialPayment =document.getElementById("initialPaymet");
                            
                            if (selectedPercent === 100) {
                                homePrice.innerHTML = (month.price * selectArea).toFixed(2)
                                initialPayment.innerHTML = 0 ;
                                paymentByMonth.innerHTML = 0 ;
                                // console.log(month.price,selectArea);
                                document.getElementById('month').innerHTML = `<option disabled selected>0</option>`
                            console.log(homePrice)
                            } else {
                                // console.log(month.price,selectArea);
                                let $_homeFixPrice = (month.price * selectArea).toFixed(2);
                                let $_initialPrice =  (($_homeFixPrice*selectedPercent)/100).toFixed(2);
                                homePrice.innerHTML = formatNumber((month.price * selectArea).toFixed(2))
                                initialPayment.innerHTML =formatNumber($_initialPrice) ;
                                paymentByMonth.innerHTML = formatNumber((($_homeFixPrice - $_initialPrice)/ selectedMonth.month).toFixed(2))
                                // console.log(homePrice)
                            }
                        }
                    });
                }
            });
        }
    });
}
function initialPaymet() {
    $_room = $("#room").val();
    $_area = $("#area").val();
    $_percent = $("#percent").val();
    $_month = $("#month").val();
    console.log($_room,$_area,$_percent,$_month);
    let selectedRoom = apartmentsPrice.filter((room) => room.id === parseInt($_room))[0];
    let selectArea = selectedRoom.areas.filter((area) => area.id === parseInt($_area))[0];
    let selectedMonth = selectedRoom.months.filter((month) => month.id === parseInt($_month))[0];
    let selectedPercent = selectedRoom.percents.filter((percent) => percent.id === parseInt($_percent))[0].percent;

console.log(selectedMonth);
    document.getElementById("monthPeriod").innerHTML = selectedMonth.monthName;
    apartmentsPrice.filter(function (room) {
        if (room.id === parseInt($_room)) {
            room.prices.filter(function (price) {
                if (price.percent === parseInt($_percent)) {
                    price.months.filter(function (month) {
                        if (month.month === parseInt($_month)) {
                            let homePrice = document.getElementById("homePrice");
                            let paymentByMonth =document.getElementById("paymentByMonth");
                            let initialPayment =document.getElementById("initialPaymet");
                            if (selectedPercent === 100) {
                                homePrice.innerHTML = (month.price * selectArea.area).toFixed(2)
                                initialPayment.innerHTML = 0 ;
                                paymentByMonth.innerHTML = 0 ;
                                document.getElementById('month').innerHTML = `<option disabled selected>0</option>`

                            } else {
                                let $_homeFixPrice = (month.price * selectArea.area).toFixed(2);
                                let $_initialPrice =  (($_homeFixPrice*selectedPercent)/100).toFixed(2);
                                homePrice.innerHTML = formatNumber((month.price * selectArea.area).toFixed(2))
                                initialPayment.innerHTML =formatNumber($_initialPrice) ;
                                paymentByMonth.innerHTML = formatNumber((($_homeFixPrice - $_initialPrice)/ selectedMonth.month).toFixed(2))
                            }
                        }
                    });
                }
            });
        }
    });
}


function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

function hesabla(){
    initialPaymet()
}
