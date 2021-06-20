<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nosy</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <input id="postForm" type="text" name="input_title" placeholder="タイトルを入力">
    <script>
      const url = 'https://localhost:8000/plans';
      const fetchForm = document.getElementById('postForm');
      let formData = new FormData(fetchForm);
      for (let value of formData.entries()) {
        console.log(value);
    }
      const postData = () =>{
        fetch(url, {
         method: "POST",
         body  : formData
        }).then(response => response.formData())
        .then(text => {
         console.log(text);
});
      }
    </script>





<div>

    <select>
      <script>
        for(var i=00; i<=23; i++){
          document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'時</option>');
        }
      </script>
    </select>
    <select>
      <script>
        for(var i=00; i<=59; i+=5){
          document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'分</option>');
        }
      </script>
    </select>
    <span>～</span>
    <select>
      <script>
        for(var i=00; i<=23; i++){
          document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'時</option>');
        }
      </script>
    </select>
    <select>
      <script>
        for(var i=00; i<=59; i+=5){
          document.write('<option value="'+i.toString(2)+'">'+i.toString(2)+'分</option>');
        }
      </script>
    </select>
    <input type="text" name="input_spot" placeholder="場所を入力">
  </div>
  <input type="submit" value="作成" onclick="postData()">
</body>
</html>
