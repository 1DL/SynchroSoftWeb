<?php
    /*Autor: Luiz Henrique*/

    
    //echo (PHP_INT_SIZE * 8) . '-bit '; //Teste 32/64bits da versão do PHP

    $logindb = "system"; //Login do Oracle
    $senhadb = "system"; //Senha do Oracle

    /* 
    serverdb = Dados de conexão do Oracle, endereço, porta e nome do banco.
    HOST = Endereço do servidor, atualmente localhost
    PORT = Porta utilizada pelo Oracle, default 1521
    SID = Nome do banco do Oracle, default XE
    */

    $serverdb = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
    (HOST = 127.0.0.1)(PORT = 1521)))(CONNECT_DATA=(SID=XE)))" ;
    
    /*
    conn = objeto que guardará toda a conexão com o Oracle.
    OCILogon = método que realiza a conexão com o banco.
    3 Parâmetros = login, senha, e dados do servidor/banco.
    */
    $conn = OCILogon($logindb, $senhadb, $serverdb);
    
    if($conn) //Caso a conexão tenha sucesso
    {
        //Preparando a query.
        echo "Conexão com o Oracle bem sucedida.\n";
        $query = "select * from SYNCHROSOFT.TB_PECA";

        //stid armazena o resultado (resultset) da query.
        $stid = oci_parse($conn, $query);

        if (!$stid) {
            $e = oci_error($conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        //Preparando a lógica e execução da query
        $r = oci_execute($stid);
        if (!$r) {
            $e = oci_error($stid);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        //Retornando os dados do resultset numa tabela HTML dinâmica
        print "<table border='1'>\n";
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            print "<tr>\n";
            foreach ($row as $item) {
                print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
            }       
            print "</tr>\n";
        }
        print "</table>\n";

        //Liberando e fechando as conexões
        oci_free_statement($stid);
        oci_close($conn);
        
    }
    else //Caso conexão sem sucesso
    {
        $err = OCIError();
        echo "Conexão falhou. Erro: " . $err[text];
    }
