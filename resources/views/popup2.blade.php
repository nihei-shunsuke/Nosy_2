<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosy</title>
    <style>
        @charset "UTF-8";

#box {
  background: #FFF;
  border: 1px solid #333;
  box-shadow: 0 10px 10px #999;
  display: none;  /*! id要素に対してdisplay:none  */
  font-family: serif;
  padding: 10px;
  position: relative;
  text-align: center;
  width: 200px;
}

#box > #close {
  background-color: #EEE;
  color: #333;
  cursor: pointer;
  height: 30px;
  line-height: 30px;
  margin: 0;
  position: absolute;
  right: 1px;
  text-align: center;
  top: 1px;
  width: 30px;
}

#box > #close:hover {
  background-color: #F9F9F9;
  color: #999;
}

#btn {
  background-color: rgb(20, 114, 236);
  border: 0;
  color: #FFF;
  cursor: pointer;
  padding: 5px 20px;
}

#btn:hover {
  color: rgb(20, 114, 236);
  border: 1px solid rgb(20, 114, 236);
  background-color: rgb(255, 255, 255);
}

#btn:active {
  background-color: #4A4;
}

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

    </style>
<body>
    <!--ポップアップ始め-->
    <input type="button" id="btn" value="押す"> <!-- 変数に格納 -->
    <div id="box"> <!-- 変数に格納 -->
        <p id="close">× <!-- 変数に格納 -->
            <!--入力フォーム始め-->
            <div id="app"></div>
            <table class="inputFomm">
              <tr><td>
              <input type="text" name="input_title" id="comment" placeholder="タイトルを入力">
              </td></tr>
              <tr><td>
              <select id="starthour">
                <script class="timeHours">
                  for(var i=00; i<=23; i++){
                    document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'時</option>');
                  }
                </script>
              </select>
              <select id="startminute">
                <script>
                  for(var i=00; i<=59; i+=5){
                    document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'分</option>');
                  }
                </script>
              </select>
              </td></tr>
              <tr><td>
              <span class="rotate">↓</span>
              </td></tr>
              <tr><td>
              <select id="endhour">
                <script>
                  for(var i=00; i<=23; i++){
                    document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'時</option>');
                  }
                </script>
              </select>
              <select id="endminute">
                <script>
                  for(var i=00; i<=59; i+=5){
                    document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'分</option>');
                  }
                </script>
              </select>
              </td></tr>
              <tr><td>
              <input id="memo"　type="text" name="input_spot" placeholder="メモ">
              </td></tr>
            </div>
            <tr><td>
            <input class="submit" onclick="execution();setTimeout(execution(),3000);" id="btn" type="submit" value="作成">
            </td></tr>
          </table>
          <script>
            let nico = new nicoJS({
    app       : document.getElementById('app'),
    width     : 1500,
    height    : 700,
    font_size : 50,     // opt
    color     : '#000', // opt
    peed: 10
})


nico.listen();
function execution() {
    var text = document.getElementById('comment').value;
    var starthour = document.getElementById('starthour').value;
    var startminute = document.getElementById('startminute').value;
    var endhour = document.getElementById('endhour').value;
    var endminute = document.getElementById('endminute').value;
    var memo = document.getElementById('memo').value;
    nico.send(text + "の予定入ったwww");
    nico.send(text, '#000000'); // 色変更
    nico.send(starthour + "時" + startminute + "分からだってwwww");
    nico.send(endhour + "時" + endminute + "分までとか草wwww");
    nico.send(memo + "とかその情報いらねーだろwwww");
    nico.send("wwwwwwwwwwwwwwwwww");
    nico.send("充実してるふり乙wwww");
    nico.send(text + "の予定入ったwww");
}

function add() {
    var text = document.getElementById('comment').value;
    var starthour = document.getElementById('starthour').value;
    var startminute = document.getElementById('startminute').value;
    var endhour = document.getElementById('endhour').value;
    var endminute = document.getElementById('endminute').value;
    var detail = document.getElementById('memo').value;
    var addtodo = document.getElementById('addtodo');
    const newElement = document.createElement('tr');
    const newtitle = document.createElement('td');
    const newstart = document.createElement('td');
    const newend = document.createElement('td');
    const newmemo = document.createElement('td');
    newtitle.textContent = text;
    newstart.textContent = starthour + ":" +startminute;
    newend.textContent = endhour + ":" +endminute;
    newmemo.textContent = detail;
    starttime = starthour + ":" +startminute;
    endtime = endhour + ":" +endminute;
    newElement.appendChild(newtitle);
    newElement.appendChild(newstart);
    newElement.appendChild(newend);
    newElement.appendChild(newmemo);
    var table = document.createElement("table");
    var tblBody = document.createElement("tbody");
   table.appendChild(newElement);
   tblBody.appendChild(table);
   addtodo.appendChild(tblBody);

}

          </script>
          <!--入力フォーム終わり-->
        </p>
    </div>
    <!--ポップアップ終わり-->
    <div class="wrapper">
        <!--xxxx年xx月を表示-->
        <div class="class1">
            <img src="image/NoSy.png" width="125px" height="130px">
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
        //window.onload= function(){ //window の load イベントに対応するイベントハンドラ
function initPopup() {
    let box = document.querySelector("#box"); //id要素取得
    let btn = document.querySelector("#btn"); //id要素取得
    let close = document.querySelector("#close") //id要素取得

    let boxstyle = box.style; //boxのstyle値をboxstyleに格納

    btn.onclick = function(){ //btnがクリックされた時動かす関数
        if(boxstyle.display === "block"){
            boxstyle.display = "none";
        }else{
            boxstyle.display = "block";
        }
    };

    close.onclick= function(){ //closeがクリックされた時の関数
        boxstyle.display = "none";
    };

    }

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
