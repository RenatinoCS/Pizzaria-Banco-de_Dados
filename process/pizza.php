<?php
    include_once("conn.php");

    $method = $_SERVER["REQUEST_METHOD"];

    /*Resgate de dados, montagem do pedido */

    if($method === "GET") {
        $bordasQuery = $conn->query("SELECT * FROM bordas;");

        $bordas = $bordasQuery->fetchALL();

        $massasQuery = $conn->query("SELECT * FROM massas;");

        $massas = $massasQuery->fetchALL();

        $saboresQuery = $conn->query("SELECT * FROM sabores;");

        $sabores = $saboresQuery->fetchALL();




    /*Criação do pedido*/
    } else if($method === "POST") {

        $data = $_POST;

        $borda = $data["borda"];
        $massa = $data["massa"];
        $sabores = $data["sabores"];

    /*Validação de sabores*/
        if(count($sabores) > 3) {
            $_SESSION["msg"] = "Selecione no máximo 3 sabores!";
            $_SESSION["status"] = "warning";

        } else {
        /*Salvando borda e massa da pizza*/
            $stmt= $conn->prepare("INSERT INTO pizzas (borda_id, massa_id) VALUES (:borda, :massa)");
        
        /*Filtrando inputs*/
            $stmt->bindParam(":borda", $borda, PDO::PARAM_INT);
            $stmt->bindParam(":massa", $massa, PDO::PARAM_INT);

            $stmt->execute();

        /*Resgatando ultimo id da pizza */
            $pizzaId = $conn->lastInsertId();

            $stmt= $conn->prepare("INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (:pizza, :sabor)");

        /*Repetição atpe terminar de salvar todos os sabores*/

        foreach($sabores as $sabor) {

            /*Filtrando os inputs */
            $stmt->bindParam(":pizza", $pizzaId, PDO::PARAM_INT);
            $stmt->bindParam(":sabor", $sabor, PDO::PARAM_INT);

            $stmt->execute();
        }

        /*Criar o pedido da pizza*/
        $stmt = $conn->prepare("INSERT INTO pedidos (pizza_id, status_id) VALUES (:pizza, :status)");

        /*Status -> sempre inicia com 1, que é em produção*/
        $statusId = 1;

        /*Filtrar inputs*/
        $stmt->bindParam(":pizza", $pizzaId);
        $stmt->bindParam(":status", $statusId);

        $stmt->execute();

        /*Exibir msg de sucexo*/

        $_SESSION["msg"] = "Pedido realizado com sucexo!";
        $_SESSION["status"] = "success";

 
        }

    /*Retorna para a pagina inicial*/
        header("Location: ..");

    }
?>