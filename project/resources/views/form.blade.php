<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{ route('form.submit') }}" >
    {{ csrf_field() }}
        <label or="nama">Nama<span >*</span></label> 
        <input type="text" minlength="3" id="nama" name="nama" placeholder="Nama"> 

        <label class="col-lg-4 col-form-label" for="password">password<span class="text-danger">*</span></label> 
        <input type="password" minlength="3" id="password" name="password" placeholder="Password">

        <button type="submit" class="btn btn-primary">Submit</button> 
{{--         {{$name}}
        {{$pass}} --}}

</form>
 

</body>
</html>