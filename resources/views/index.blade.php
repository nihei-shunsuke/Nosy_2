<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosy</title>
    <style>
        @charset "utf-8";

html,
body {
  overflow: hidden;
}
/*全体*/
.wrapper {
  max-width: auto;
  max-height: 900;
  margin: 0 auto;
  color: rgb(46, 45, 45);
}
#header {
  text-align: center;
  font-size: 40px;
  height: 100%;
  width: 100%;
  margin: 1rem 0 0;
  color: #34423b;
}

.class1 {
  position: relative;
  margin: 10px 90px 0px 60px;
  width: 60px;
  height: 60px;
}

/*カレンダー*/
#calendar {
  text-align: center;
  height: 100%;
  width: 100%;
}
table {
  border-collapse: collapse;
  width: 100%;
  height: 100%;
}
th {
  color: #000;
  size: 200px;
}
th,
td {
  border: 5px solid rgb(138, 135, 135);
  padding-top: 50px;
  padding-bottom: 10px;
  text-align: center;
}

a {
  text-decoration: none;
  font-size: 25px;
  color: #000;
}
td a:hover {
  color: #88d9f1;
}
/*日曜日*/
td:first-child {
  color: red;
}
/*土曜日*/
td:last-child {
  color: blue;
}
/*前後月の日付*/
td.disabled {
  color: #ccc;
}
/*本日*/
td.today {
  background-color: #c0bcff;
  color: rgb(0, 0, 0);
}

/*ボタン*/
#next-prev-button {
  position: relative;
}
#next-prev-button button {
  cursor: pointer;
  background: #88d9f1;
  color: rgb(0, 0, 0);
  border: 1px solid #88d9f1;
  border-radius: 4px;
  font-size: 1rem;
  padding: 0.5rem 2rem;
  margin: 1rem 0;
}
#next-prev-button button:hover {
  background-color: #a2f3c7;
  border-color: #a2f3c7;
}
#prev {
  float: left;
}
#next {
  float: right;
}

.date {
  display: flex;
  flex-direction: row;
}

.DateContainer {
  display: flex;
  flex-direction: row;
}

    </style>
</head>
<body>
    <div class="wrapper">
        <!--xxxx年xx月を表示-->
        <div class="class1">
            <img src="/storage/NoSy.png" width="125px" height="130px">
                </div>
        <h1 id="header"></h1>

        <!--ボタンクリックで月移動-->
    <div id="next-prev-button">
        <button id="prev" onclick="prev()">‹</button>
        <button id="next" onclick="next()">›</button>
    </div>

    <!--カレンダー-->
    <div id="calendar"></div>
    </div>
    <script>
        const week = ["日", "月", "火", "水", "木", "金", "土"];
const today = new Date();

var showDate = new Date(today.getFullYear(), today.getMonth(), 1);


window.onload = function () {
    showProcess(today, calendar);
};

function prev(){
    showDate.setMonth(showDate.getMonth() - 1);
    showProcess(showDate);
}


function next(){
    showDate.setMonth(showDate.getMonth() + 1);
    showProcess(showDate);
}


function showProcess(date) {
    var year = date.getFullYear();
    var month = date.getMonth();
    document.querySelector('#header').innerHTML = year.toString(2) + "年 " + (month + 1).toString(2) + "月";

    var calendar = createProcess(year, month);
    document.querySelector('#calendar').innerHTML = calendar;
}


function createProcess(year, month) {
    var calendar = "<table><tr class='dayOfWeek'>";
    for (var i = 0; i < week.length; i++) {
        calendar += "<th>" + week[i] + "</th>";
    }
    calendar += "</tr>";

    var count = 0;
    var startDayOfWeek = new Date(year, month, 1).getDay();
    var endDate = new Date(year, month + 1, 0).getDate();
    var lastMonthEndDate = new Date(year, month, 0).getDate();
    var row = Math.ceil((startDayOfWeek + endDate) / week.length);


    for (var i = 0; i < row; i++) {
        calendar += "<tr>";

        for (var j = 0; j < week.length; j++) {
            if (i == 0 && j < startDayOfWeek) {
                calendar += "<td class='disabled'>" + "<a href='/plans/create'>" + (lastMonthEndDate - startDayOfWeek + j + 1).toString(2) + "</a>" + "</td>";
            } else if (count >= endDate) {

                count++;
                calendar += "<td class='disabled'>" + "<a href='/plans/create'>" + (count - endDate).toString(2) + "</a>" + "</td>";
            } else {

                count++;
                if(year == today.getFullYear()
                    && month == (today.getMonth())
                    && count == today.getDate()){
                    calendar += "<td class='today'>" + "<a href='/plans/create'>" + count.toString(2) + "</a>" + "</td>";
                } else {
                    calendar += "<td>" + "<a href='/plans/create'>" + count.toString(2) + "</a>" + "</td>";
                }
            }
        }
        calendar += "</tr>";
    }
    return calendar;
}

    </script>
 </body>
</html>
