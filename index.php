<script type="text/javascript" src="lokasi file jquery anda"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<div>
  <input type="text" id="txtInput" name="txtinput" onkeyup  ="showText()" /> <button onclick="add()">ADD todo </button>
  <br>
  <span id="textSpan">Input todo :</span>
</div>
<div id="listTodo">

</div>

<script>
  function showText(){
    var text = $('#txtInput').val();
    $('#textSpan').text('Input todo : '+text);
  }

  function add(){
    var text = $('#txtInput').val();
    if(text == ''){
      alert('Inputan Tidak Boleh Kosong!');
    }else{
        $.ajax({
          type : "POST",
          url : ajax.post.php,
          data : "action=add&inputText="+text,
          success : function(data){
            if(data == 1){
              alert('berhasil');
            }else{
              alert('gagal');
            }
          }
        });
        //alert('q');
    }
  }
</script>
