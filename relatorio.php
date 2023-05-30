<h1 class="mt-5"> Relatório de Cidades e Bairros </h1>
<?php

    $sql = "SELECT DISTINCT * FROM cidade c order by cidade, fundacao";
    $res = $conn->query($sql);
    $qtd = $res-> num_rows;
    

    if ($qtd > 0)
    {   
        print "<div class='row gap-5 mt-4'>"; 
        print "<div class='col-5'>";
        print "<div style='font-size:1.5rem;'>Cidades</div>";
        print "<table class='table table-hover table-striped table-bordered col-4 mt-2'>";
        print "<tr>";
        print "<th> Cidade </th>" ;
        print "<th> Estado </th>" ;
        print "<th> Fundação </th>";
        print "<th> Ações </th>";
        print "<tr>";
        while ($row = $res->fetch_object()){
            
            print "<tr>";
            print "<td>" . $row->cidade ;
            print "<td>" . $row->estado  ;  
            $originalDate = strtotime($row-> fundacao);
            $newDate = date("d-m-Y", $originalDate);
            print "<td>" . $newDate;
            print "<tr>";
        }
        print "</table>";
        
        print "</div>";
    }

    $sql = "SELECT DISTINCT * FROM bairro b order by bairro";
    $res = $conn->query($sql);
    $qtd = $res-> num_rows;
    if ($qtd > 0)
    {    
        print "<div class='col-5'>"; 
        print "<div style='font-size:1.5rem;'>Bairros</div>";
        print "<table class='table table-hover table-striped table-bordered col-4 mt-2'>";
        print "<tr>";
        print "<th> Bairro </th>" ;
        print "<th> Cidade </th>" ;
        print "<tr>";
        while ($row = $res->fetch_object()){
            
            print "<tr>";
            print "<td>" . $row->bairro ;
            print "<td>" . $row->cidade ;  
            print "<tr>";
        }
        print "</table>";
        print "</div>";
        print "</div>";
        print "<div class='row'>";
    }

?>