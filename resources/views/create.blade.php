<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nosy</title>
  <script src="./node_modules/nicojs/lib/nico.js"></script>
  <style>
table {
    margin-left: 400px;
    margin-top: 100px;
    border: solid;
}
td {
    border: solid;
    border: aqua;

}
tr {
    border: solid;
    border: aqua;
    text-align: center;
    margin: 100px;
}
.submit {
    text-align: right;
}
.rotate {
    text-align: center;
    margin: 75px;
}
  </style>
</head>
<body>
  <div id="app"></div>
  <table>
    <form action="/plans/store" method="POST">
        @csrf
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
    </form>

</table>
<script src="{{ asset('./node_modules/nicojs/lib/nico.js') }}"></script>
<script>

// sample.js開始

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
    nico.send(text, '#000000'); // 色変更
    nico.send(starthour + "時" + startminute + "分からだってwwww");
    nico.send(endhour + "時" + endminute + "分までとか草wwww");
    nico.send(memo + "とかその情報いらねーだろwwww");
    nico.send("wwwwwwwwwwwwwwwwww");
    nico.send("充実してるふり乙wwww");
}
// sample.js終了
</script>
</body>
</html>
