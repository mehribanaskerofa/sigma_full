const _initialRoomSelectField = document.getElementById("room");
const _initialAreaSelectField = document.getElementById("area");
const _initialMonthSelectField = document.getElementById("month");
const _initialPercentSelectField = document.getElementById("percent");
const _initialpaymentByMonthSelectField = document.getElementById("paymentByMonth");

const _initialApartmentsPrice =   [
    {
        id: 1,
        name: "1 Otaqlı",
        areas: [
            {
                id: 1,
                area: 51.27,
                room: 1,
                areaName: "51.27 m&sup2;",
            },
            {
                id: 2,
                area: 58.46,
                room: 1,
                areaName: "58.46 m&sup2;",
            },
            {
                id: 3,
                area: 59.94,
                room: 1,
                areaName: "59.94 m&sup2;",
            },
            {
                id: 4,
                area: 60.49,
                room: 1,
                areaName: "60.49 m&sup2;",
            },
            {
                id: 5,
                area: 64.78,
                room: 1,
                areaName: "64.78 m&sup2;",
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
        ],
        percents: [
            {
                id: 1,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 2,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 3,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 4,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 5,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 6,
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
                    //     priceName: "1800 Azn",
                    //     price: 1800,
                    // },
                    {
                        month: 2,
                        priceName: "1835 Azn",
                        price: 1835,
                    },
                    {
                        month: 3,
                        priceName: "1850 Azn",
                        price: 1850,
                    },
                    {
                        month: 4,
                        priceName: "1875 Azn",
                        price: 1875,
                    },
                  
                    {
                        month: 5,
                        priceName: "1900 Azn",
                        price: 1900,
                    },
                ],
            },
            {
                percent: 2,
                months: [
                    //   {
                    //     month: 1,
                    //     priceName: "1800 Azn",
                    //     price: 1800,
                    // },
                    {
                        month: 2,
                        priceName: "1825 Azn",
                        price: 1825,
                    },
                    {
                        month: 3,
                        priceName: "1840 Azn",
                        price: 1840,
                    },
                    {
                        month: 4,
                        priceName: "1865 Azn",
                        price: 1865,
                    },
                    {
                        month: 5,
                        priceName: "1890 Azn",
                        price: 1890,
                    },
                ],
            },
            {
                percent: 3,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1800 Azn",
                    //     price: 1800,
                    // },
                    {
                        month: 2,
                        priceName: "1815 Azn",
                        price: 1815,
                    },
                    {
                        month: 3,
                        priceName: "1830 Azn",
                        price: 1830,
                    },
                    {
                        month: 4,
                        priceName: "1855 Azn",
                        price: 1855,
                    },
                    {
                        month: 5,
                        priceName: "1880 Azn",
                        price: 1880,
                    },
                ],
            },
            {
                percent: 4,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1800 Azn",
                    //     price: 1800,
                    // },
                    {
                        month: 2,
                        priceName: "1810 Azn",
                        price: 1810,
                    },
                    {
                        month: 3,
                        priceName: "1820 Azn",
                        price: 1820,
                    },
                    {
                        month: 4,
                        priceName: "1845 Azn",
                        price: 1845,
                    },
                    {
                        month: 5,
                        priceName: "1870 Azn",
                        price: 1870,
                    },
                ],
            },
            {
                percent: 5,
                months: [
                    //  {
                    //     month: 1,
                    //     priceName: "1800 Azn",
                    //     price: 1800,
                    // },
                    {
                        month: 2,
                        priceName: "1805 Azn",
                        price: 1805,
                    },
                    {
                        month: 3,
                        priceName: "1810 Azn",
                        price: 1810,
                    },
                    {
                        month: 4,
                        priceName: "1835 Azn",
                        price: 1835,
                    },
                    {
                        month: 5,
                        priceName: "1860 Azn",
                        price: 1860,
                    },
                ],
            },
            {
                percent: 6,
                months: [
                    //  {
                    //     month: 1,
                    //     priceName: "1800 Azn",
                    //     price: 1800,
                    // },
                    {
                        month: 2,
                        priceName: "1800 Azn",
                        price: 1800,
                    },
                    {
                        month: 3,
                        priceName: "1800 Azn",
                        price: 1800,
                    },
                    {
                        month: 4,
                        priceName: "1800 Azn",
                        price: 1800,
                    },
                    {
                        month: 5,
                        priceName: "1800 Azn",
                        price: 1800,
                    },
                ],
            },
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
                area: 79.37,
                room: 2,
                areaName: "79.37 m&sup2;",
            },
            {
                id: 2,
                area: 79.56,
                room: 2,
                areaName: "79.56 m&sup2;",
            },
            {
                id: 3,
                area: 85.65,
                room: 2,
                areaName: "85.65 m&sup2;",
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
            },
        ],
        percents: [
            {
                id: 1,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 2,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 3,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 4,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 5,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 6,
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
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1790 Azn",
                        price: 1790,
                    },
                    {
                        month: 3,
                        priceName: "1800 Azn",
                        price: 1800,
                    },
                    {
                        month: 4,
                        priceName: "1825 Azn",
                        price: 1825,
                    },
                    {
                        month: 5,
                        priceName: "1850 Azn",
                        price: 1850,
                    },
                    {
                        month: 6,
                        priceName: "1875 Azn",
                        price: 1875,
                    },
                    {
                        month: 7,
                        priceName: "1900 Azn",
                        price: 1900,
                    },
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1780 Azn",
                        price: 1780,
                    },
                    {
                        month: 3,
                        priceName: "1790 Azn",
                        price: 1790,
                    },
                    {
                        month: 4,
                        priceName: "1815 Azn",
                        price: 1815,
                    },
                    {
                        month: 5,
                        priceName: "1840 Azn",
                        price: 1840,
                    },
                    {
                        month: 6,
                        priceName: "1865 Azn",
                        price: 1865,
                    },
                    {
                        month: 7,
                        priceName: "1890 Azn",
                        price: 1890,
                    },
                ],
            },
            {
                percent: 3,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1770 Azn",
                        price: 1770,
                    },
                    {
                        month: 3,
                        priceName: "1780 Azn",
                        price: 1780,
                    },
                    {
                        month: 4,
                        priceName: "1805 Azn",
                        price: 1805,
                    },
                    {
                        month: 5,
                        priceName: "1830 Azn",
                        price: 1830,
                    },
                    {
                        month: 6,
                        priceName: "1855 Azn",
                        price: 1855,
                    },
                    {
                        month: 7,
                        priceName: "1880 Azn",
                        price: 1880,
                    },
                ],
            },
            {
                percent: 4,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1760 Azn",
                        price: 1760,
                    },
                    {
                        month: 3,
                        priceName: "1770 Azn",
                        price: 1770,
                    },
                    {
                        month: 4,
                        priceName: "1795 Azn",
                        price: 1795,
                    },
                    {
                        month: 5,
                        priceName: "1820 Azn",
                        price: 1820,
                    },
                    {
                        month: 6,
                        priceName: "1845 Azn",
                        price: 1845,
                    },
                    {
                        month: 7,
                        priceName: "1870 Azn",
                        price: 1870,
                    },
                ],
            },
            {
                percent: 5,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1755 Azn",
                        price: 1755,
                    },
                    {
                        month: 3,
                        priceName: "1760 Azn",
                        price: 1760,
                    },
                    {
                        month: 4,
                        priceName: "1785 Azn",
                        price: 1785,
                    },
                    {
                        month: 5,
                        priceName: "1810 Azn",
                        price: 1810,
                    },
                    {
                        month: 6,
                        priceName: "1835 Azn",
                        price: 1835,
                    },
                    {
                        month: 7,
                        priceName: "1860 Azn",
                        price: 1860,
                    },
                ],
            },
            {
                percent: 6,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 3,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 4,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 5,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 6,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 7,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
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
                area: 107.34,
                room: 3,
                areaName: "107.34 m&sup2;",
            },
            {
                id: 2,
                area: 110.94,
                room: 3,
                areaName: "110.94 m&sup2;",
            },
            // {
            //     id: 3,
            //     area: 136.05,
            //     room: 3,
            //     areaName: "136.05 m&sup2;",
            // },
        ],
        months: [
            //  {
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
            },
        ],
        percents: [
            {
                id: 1,
                percent: 30,
                percentName: "30%",
            },
            {
                id: 2,
                percent: 40,
                percentName: "40%",
            },
            {
                id: 3,
                percent: 50,
                percentName: "50%",
            },
            {
                id: 4,
                percent: 75,
                percentName: "75%",
            },
            {
                id: 5,
                percent: 90,
                percentName: "90%",
            },
            {
                id: 6,
                percent: 100,
                percentName: "100%",
            },
        ],
        prices: [
            {
                percent: 1,
                months: [
                    //  {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1790 Azn",
                        price: 1790,
                    },
                    {
                        month: 3,
                        priceName: "1800 Azn",
                        price: 1800,
                    },
                    {
                        month: 4,
                        priceName: "1825 Azn",
                        price: 1825,
                    },
                    {
                        month: 5,
                        priceName: "1850 Azn",
                        price: 1850,
                    },
                    {
                        month: 6,
                        priceName: "1875 Azn",
                        price: 1875,
                    },
                    {
                        month: 7,
                        priceName: "1900 Azn",
                        price: 1900,
                    },
                ],
            },
            {
                percent: 2,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1780 Azn",
                        price: 1780,
                    },
                    {
                        month: 3,
                        priceName: "1790 Azn",
                        price: 1790,
                    },
                    {
                        month: 4,
                        priceName: "1815 Azn",
                        price: 1815,
                    },
                    {
                        month: 5,
                        priceName: "1840 Azn",
                        price: 1840,
                    },
                    {
                        month: 6,
                        priceName: "1865 Azn",
                        price: 1865,
                    },
                    {
                        month: 7,
                        priceName: "1890 Azn",
                        price: 1890,
                    },
                ],
            },
            {
                percent: 3,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1770 Azn",
                        price: 1770,
                    },
                    {
                        month: 3,
                        priceName: "1780 Azn",
                        price: 1780,
                    },
                    {
                        month: 4,
                        priceName: "1805 Azn",
                        price: 1805,
                    },
                    {
                        month: 5,
                        priceName: "1830 Azn",
                        price: 1830,
                    },
                    {
                        month: 6,
                        priceName: "1855 Azn",
                        price: 1855,
                    },
                    {
                        month: 7,
                        priceName: "1880 Azn",
                        price: 1880,
                    },
                ],
            },
            {
                percent: 4,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1760 Azn",
                        price: 1760,
                    },
                    {
                        month: 3,
                        priceName: "1770 Azn",
                        price: 1770,
                    },
                    {
                        month: 4,
                        priceName: "1795 Azn",
                        price: 1795,
                    },
                    {
                        month: 5,
                        priceName: "1820 Azn",
                        price: 1820,
                    },
                    {
                        month: 6,
                        priceName: "1845 Azn",
                        price: 1845,
                    },
                    {
                        month: 7,
                        priceName: "1870 Azn",
                        price: 1870,
                    },
                ],
            },
            {
                percent: 5,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1755 Azn",
                        price: 1755,
                    },
                    {
                        month: 3,
                        priceName: "1760 Azn",
                        price: 1760,
                    },
                    {
                        month: 4,
                        priceName: "1785 Azn",
                        price: 1785,
                    },
                    {
                        month: 5,
                        priceName: "1810 Azn",
                        price: 1810,
                    },
                    {
                        month: 6,
                        priceName: "1835 Azn",
                        price: 1835,
                    },
                    {
                        month: 7,
                        priceName: "1860 Azn",
                        price: 1860,
                    },
                ],
            },
            {
                percent: 6,
                months: [
                    // {
                    //     month: 1,
                    //     priceName: "1750 Azn",
                    //     price: 1750,
                    // },
                    {
                        month: 2,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 3,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 4,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 5,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 6,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                    {
                        month: 7,
                        priceName: "1750 Azn",
                        price: 1750,
                    },
                ],
            }
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
