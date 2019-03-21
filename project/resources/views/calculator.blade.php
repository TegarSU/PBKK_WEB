<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="frm1" method="post" action="{{ url('/calculator') }}" >
    {{ csrf_field() }}
        <label for="angka1">Angka 1</label> 
        <input type="number" minlength="1" id="angka1" name="angka1" placeholder="Angka Pertama" >
        <br>
        <br>
        <label for="operator">operator</label> 
        <input type="text" minlength="1" id="operator" name="operator" placeholder="operator"> 
        <br>
        <br>
        <label class="col-lg-4 col-form-label" for="password">Angka 2</label> 
        <input type="number" minlength="1" id="angka2" name="angka2" placeholder="Angka kedua">
        <br>
        <br>
        <button type="submit">Submit</button>
        {{-- <button type="submit" class="btn btn-primary">Submit</button>  --}}
{{--         {{$name}}
        {{$pass}} --}}

</form>
<br>
@if($hasil!=null)
	{{$hasil}}
@endif

{{-- <script>
function myFunction() {
  var x = document.getElementById("frm1");
  var text = "";
  // var Angka1 = document.getElementById("angka1");
  // var Angka2 = document.getElementById("angka2");
  // var operator = document.getElementById("operator");
  // var hasil;
  // var i;
  var hasil
  for (i = 1; i < x.length ;i++) {
    angka1.elements[1].value;
    angka2.elements[3].value;
    operator.elements[2].value;
  }

  document.getElementById("demo").innerHTML = text;
 // if(operator == '+'){
 // 	hasil = Angka1.value + Angka2.value;
 // }
 //  document.getElementById("demo").innerHTML = hasil;
}



</script> --}}

</body>
</html>