<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="boostrap5/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <title>pousada</title>

<body>

    <div class="col text-center  text-white">
    <img src="img/travel.png">
        <h1>reserva de quartos </h1>

    </div>
    <form>
        <div class="container  text-white ">
            <div class="row text-center">
                <div class="col-md-5 text-center ">
                    <label for="nome">nome </label><br>
                    <input type="name" name="nome" id="nome">
                </div>
                <div class="col-md-7 text-center">
                    <label for="telefone">telefone</label><br>
                    <input type="text" name="telefone" id="telefone">
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-12">
                <div class=" form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="whatsap" value="sim" id="whatsap"> é whastsap:</label>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4  text-white">
                        <label for="adultos">numero de adultos :</label><br>
                        <input type="number" value="" min="1" max="10" maxlength="2" id="adultos" name="adultos">
                    </div>
                    <div class="col-md-4  ">
                        <label for="criancas">numero de crianças :</label><br>
                        <input type="number" value="" min="0" max="10" id="criancas" maxlength="2" name="criancas">
                    </div>
                    <div class="col-md-4">
                        <label for="quartos">quantidade de quartos :</label><br>
                        <input type="number" value="2" min="1" max="10" id="quartos" maxlength="2" name="quartos" function somar()>
                    </div>
               
                <br>
                <div class="row text-center">
                    <div class="col-lg-3">
                    <div class=" form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="fumante" value="sim" id="fumante"> fumante</label>
                    </div>
                    </div>
                    <div class="col-lg-3">
                    <div class=" form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="cafe" value="sim" id="cafe"> cafe da manha</label>
                    </div>
                    </div>
                    <div class="col-lg-3">
                    <div class=" form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="estacionamento" value="sim" id="estacionamento"> estacionamento </label>
                    </div>
                    </div>

                    <div class="col-lg-3">
                    <div class=" form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="ar" value="sim" id="ar"> ar-condicionado</label>
                    </div></div><br><Br></Br>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-5 text-center">
                                <label for="entrada">data de entrada</label><br>
                                <input type="date" name="entrada" id="entrada">
                            </div>
                            <div class="col-md-5">
                                <label for="saida">data de saida</label><br>
                                <input type="date" name="saida" id="saida">
                            </div>
                        </div><br>
                        <button type="submit" class=" col-md-3  btn-primary">cadastrar</button>
                       <a name="tabela"></a></h1>
                       
   
    </div>
</form>
<a href="#tabela">ver tabela de cadastrados </a>
<div class="table-responsive">
        <table class="table text-center">
            <thead>
            <tr>
                <th>nome</th>
                <th>telefone</th>
                <th>whatsap</th>
                <th>adultos</th>
                <th>criancas</th>
                <th>quartos</th>
                <th>fumante</th>
                <th>cafe</th>
                <th>estacionamento</th>
                <th>ar</th>
                <th>data entrada</th>
                <th>data saida </th>
            </tr>
            </thead>

            <tbody>
                <?php
                $sqlBusca = "SELECT * FROM tb_reservas";
                $resultado = mysqli_query($conexao, $sqlBusca);
                $cadastrados = [];
                while ($reserva = mysqli_fetch_assoc($resultado)) {
                    $cadastrados[] = $reserva;
                }
                foreach ($cadastrados as $reserva) : ?>
                    <tr>
                    <td><?php echo $reserva['nome']; ?></td>
                        <td><?php echo $reserva['telefone']; ?></td>
                        <td><?php echo $reserva['whatsap']; ?></td>
                        <td><?php echo $reserva['adultos']; ?></td>
                        <td><?php echo $reserva['criancas']; ?></td>
                        <td><?php echo $reserva['quartos']; ?></td>
                        <td><?php echo $reserva['fumante']; ?></td>
                        <td><?php echo $reserva['cafe']; ?></td>
                        <td><?php echo $reserva['estacionamento']; ?></td>
                        <td><?php echo $reserva['ar']; ?></td>
                        <td><?php echo $reserva['entrada']; ?></td>
                        <td><?php echo $reserva['saida']; ?></td>
                    </tr>
                    <?php endforeach; ?>
               
            </tbody>
        </table>
    </div>

    <script src="boostrap5/bootstrap.min.js"></script>
</body>

</html>
