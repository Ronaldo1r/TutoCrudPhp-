<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP, de forma simples e fácil</title>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>"method="POST"> 
        Nome:<br/>
        <input type="text"name="nome"placeholder="Qual seu nome?"><br/><br/>
        E-mail:<br/>
        <input type="email"name="email"placeholder="Qual seu e-mail?"><br/><br/>
        Cidade:<br/>
        <input type="text"name="cidade"placeholder="Qual sua cidade?"><br/><br/>
        UF:<br/>
        <input type="text"name="uf"size="2"placeholder="UF">
        <br/><br/>
        <input type="hidden"value="-1"name="id" >
        <button type="submit">Cadastrar</button>
    </form>

    <?
     //Validando a existência dos dados
    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"]))
    {

    }
    ?>


    <?
     //Validando a existência dos dados
     if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"]))
    {
        if(empty($_POST["nome"])) 
            $erro = "Campo nome obrigatório";
        else
        if(empty($_POST["email"]))
            $erro = "Campo e-mail obrigatório";
        else
        {
            //Vamos realizar o cadastro ou alteração dos dados enviados.
        }
    }
    ?>


    <?
    $obj_mysqli = new mysqli("127.0.0.1","seu_usuario", "sua_senha","tutocrudphp");
    
   if($obj_mysqli->connect_errno)       
   {
        echo"Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    mysqli_set_charset($obj_mysqli, 'utf8');

        //Validando a existência dos dados
if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"]))
{
        if(empty($_POST["nome"]))
            $erro = "Campo nome obrigatório";
        else
        if(empty($_POST["email"]))
            $erro = "Campo e-mail obrigatório";
        else
     {
            //Vamos realizar o cadastro ou alteração dos dados enviados.
    }   
}
?>

<? 
$obj_mysqli = new mysqli("127.0.0.1", "root", "", "tutocrudphp");
if ($obj_mysqli->connect_errno)
{
    echo " ocorreu um erro na conexão com banco de daddos.";
    exit;
}

mysqli_set_charset($obj_mysqli, 'uft8');

//validando a existencia dos dados 
if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) $$ isset($_POST["uf"]))
{
    if(empty($_POST["nome"]))
        $erro ="Campo Obrigatório";
else
if(empty($_POST["email"]))
        $erro = "Campo e-email obrigatório";
    else
    {
        // Vamos realizar o cadastro ou alteração dos dados enviados.
        $nome   = $_POST["nome"];
        $email  = $_POST["email"];
        $cidade = $_POST["cidade"]; 
        $uf     = $_POST["uf"]; 

        $stmt = $obj_mysqli->prepare("INSERT INTO 'cliente' ('nome','email','cidade','uf') VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $nome, $email, $cidade, $uf);
        if(!$stmt->execute())
        {
            $erro = $stmt-> error;
        }
        else
        {
            $sucesso = "Dados cadastrados com sucesso!";
        }
    }
}
?>





























































</body>
</html>