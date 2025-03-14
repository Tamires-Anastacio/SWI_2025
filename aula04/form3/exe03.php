<php?
    $erro = '';
    $mensagem = '';
    
    if {
    $login = $_POST[cxlogin];
    $senha = $_POST[cxsenha];
    

    } else {
        if ($login = 'etec' && $senha = 'informática') {
            $mensagem = 'Logado com sucesso!';
        } else {
            $erro = 'Login ou senha incorretos!';
        }
    }
?>