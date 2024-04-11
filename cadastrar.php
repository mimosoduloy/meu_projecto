<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_morto</title>
    <link rel="stylesheet" href="stylle.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        *{
  font-family: 'Courier New', Courier, monospace;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  letter-spacing:1px ;

}
main{
  height: 200vh;
 
}

    
    form{
      text-align: center;
      width: 800px;
      height: 105vh;
      display: block;
      background: #fff;
      padding-top: 3em;
      box-shadow: 0 0 12px #000000b6;
      border-radius: 14px;
      transition: .5s;
      cursor: pointer;
   
  }
  form input{
      width: 300px;
      height: 50px;
      color: #262626;
      border-bottom: 2px solid #e6e6e6e0;
      border-top: none;
      border-left: none;
      border-right: none;
      outline: none;
      background: transparent;
      margin-top: 2em;
      font-size: 18px;
      padding-left: 1em;
  }
  form h1{
      color:#119cff;
      margin-bottom: 1em;
  }
  form button[type="submit"]{
      background: #119cff;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      border-radius: 30px;
      text-align: center;
      margin-top: 2em;
      cursor: pointer;
  }
  form button[type="submit"]:hover{
      background: #046bb4;
  }
  form input[type="submit"]{
    background: #119cff;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    border-radius: 30px;
    text-align: center;
    margin-top: 2em;
    cursor: pointer;
}
form input [type="submit"]:hover{
    background: #046bb4;
}
  form:hover{
  animation: none;
  transition: .5s;
}

  a {
      width: 50px;
      height: 50px;
      position: absolute;
      top: 0;
      left: 0;
      text-decoration: none;
  }
  form img{
        height: 80px;
    }





























  </style>
</head>
<body style="background-color: white;display: flex; display: flex;
justify-content: center;
align-items: center;
text-align: center; height: 120vh;">
    
    <a href="index.php">  <i class="bi-arrow-left"></i></a>
    <form action="?page=salvar" method="POST"  class="form">
    <input type="hidden" name="acao"  value="cadastrar">
    <img src="img/imag2.jpeg" alt="">
    <h1>Faça o seu cadastro</h1>
   <input type="text"    placeholder="Nome"  name="nome" required >
   <input type="text"    placeholder="BI"  name="bi" required>
   <input type="text"   placeholder="Bairro"  name="bairro" required>
    <input type="text" placeholder="Tell"  name="tell" required>
    <input type="number"  placeholder="campa"  name="campa" required>
    <input type="text"  placeholder="Cid./Av./Rua 00"  name="avenida" required><br>
    <input type="img"  placeholder="Foto"  name="ft" required><br>
    <input type="numbert"  placeholder="Quarterao"  name="quarterao" required><br>
    <br><select name="sexo" id="sexo"  >
        <option value="">Genero</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Outro">Outro</option>
    </select>
    <select type="text" name="cemiterio"    >
        <option value="Quartoze">Quatorze</option>
        <option value="Benfica" >Benfica</option>
        <option value="Santa ana">Santa ana</option>
        <option value="Mulevo">Mulenvo</option>
        <option value="Camama">Camama</option>
        <option value="Benfica">Benfica</option>
        <option value="Santa ana">Santa ana</option>
        <option value="Mulevo">Mulenvo</option>
        <option value="Viana">Viana</option>
        <option value="">Benfica</option>
        <option value="">Santa ana</option>
        <option value="">Mulenvo</option>
        <option value="">Camama</option>
    </select>
    <input type="date" name="data_nasc" required>
     <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    
</body>
</html>