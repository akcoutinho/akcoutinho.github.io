<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
        
        
            // Abra ou crie um arquivo para salvar os dados
            $arquivo = fopen("dados.txt", "a"); // "a" para adicionar ao arquivo
        
            // Verifique se o arquivo foi aberto com sucesso
            if ($arquivo) {
                // Formate os dados a serem escritos no arquivo
                $dados = "Nome: $nome\nEmail: $email\nMensagem: $message\n\n";
        
                // Escreva os dados no arquivo
                fwrite($arquivo, $dados);
        
                // Feche o arquivo
                fclose($arquivo);
        
                echo "Dados salvos com sucesso!";
            } else {
                echo "Erro ao abrir o arquivo para salvar os dados.";
            }
        }
        ?>