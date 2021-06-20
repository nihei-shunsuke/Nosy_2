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
