<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pet shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class=" mx-auto" style="width: 200px; ">
                <header><h1>Pousada Descanso Garantido</h1></header>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="topo">
                <a class="navbar-brand" href="#">Pousada Descanso Garantido</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#descontos">Descontos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#atividades">Horário dos passeios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Localização no Maps</a>
                        </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                  </form>
                </div>
            </nav>
                    <div class="row">
                    <div class="col-3 mb-2 bg-secondary text-white">
                        <ul class="list-group">
                            <li class="list-group-item active">Conforto</li>
                            <li class="list-group-item active">Qualidade</li>
                            <li class="list-group-item active">Segurança</li>
                            <li class="list-group-item active">Melhor preço da região</li>
                            <li class="list-group-item active">Parcelamento</li>
                            <li class="list-group-item active">Atividades ao ar livre</li>
                        </ul>
                        <h3>Nossos objetivos</h3>
                        <ol type="1">
                            <li>Ser a marca de hotel mais admirada no Brasil</li>
                            <li>Ser referência de serviços e inovação em hotelaria.</li>
                            <li>Trabalharemos sempre com simplicidade, transparência e integridade, para atender aos interesses de nossos colaboradores, clientes e investidores.</li>
                            <li>atrair pessoas com paixão pelo espírito de servir e promover um ambiente que conduz ao desenvolvimento compartilhado (pessoal/empresa).</li>

                        </ol>
                    </div>

                        <div class="col-6 mb-2 bg-warning text-dark">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Formulário para fazer uma reserva</h2>
                                    <form>
                                        <div class="form-group">
                                            <label for="nome">Nome:</label>
                                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu nome..">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Digite o seu email..">
                                        </div>
                                        <div class="form-group">
                                            <label for="mensagens">Dúvidas:</label>
                                            <textarea class="form-control" name="mensagens" id="mensagens" placeholder="Digite a mensagem"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Data de Nascimento:</label>
                                            <input class="form-control" type="date" name="dtnascimento">

                                        </div>
                                        <div class="form-group">
                                            <label for="estadocivil">Estado civil</label>
                                            <select name="estado civil" id="estadocivil">
                                                <option value ="">----</option>
                                                <option value="1">Solteiro</option>
                                                <option value="2">Casado</option>
                                                <option value="3">Viúvo</option>
                                                <option value="4">Divorciado</option>
                                                <option value="5">Não desejo informar</option>
                                            </select>
                                        </div>
                                        <div class="form-group">

                                            <label>Sexo:</label><br>
                                            <input type="radio" name="genero" value="M"> Masculino<br>
                                            <label><input type="radio" name="genero" value="F"> Feminino</label><br>
                                        </div>
                                        <div class="form-group">
                                            <p>Entretenimentos que não podem faltar:</p>
                                            <label><input type="checkbox" name="entretenimento[]" value="passeio a cavalo"> Passeio a cavalo</label><br>
                                            <label><input type="checkbox" name="entretenimento[]" value="trilha"> Trilha</label><br>
                                            <label><input type="checkbox" name="entretenimento[]" value="sala jogos"> Sala de jogos</label><br>
                                            <label><input type="checkbox" name="entretenimento[]" value="cachoeira"> Cachoeira</label><br>
                                            <label><input type="checkbox" name="entretenimento[]" value="peixes"> Passeio de Buggy</label>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary" type="reset" value="Reset">Apagar tudo</button>
                                        <button class="btn btn-primary" type="submit" value="Submit">Submeter</button>
                                    </form>
                                </div> 
                                <br>
                                <div class="tabel-mb" id="descontos">
                                    <table class="table">
                                        <caption>Tabela com descontos se reservar com antecedência: </caption>
                                        <thead class="thead-light">
                                          <tr>
                                            <th scope="col"></th>
                                            <th scope="col">1 semana de antes</th>
                                            <th scope="col">1 mês antes</th>
                                            <th scope="col">6 mêses antes</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row"></th>
                                            <td>15%</td>
                                            <td>30%</td>
                                            <td>50%</td>
                                          </tr>

                                        </tbody>
                                      </table>
                                </div>
                                <br>
                                <br>
                                <div class="table-mb 2" id="atividades">
                                    <table class="table table-bordered">
                                        <caption>Tabela de horários de nossas atividades </caption>
                                        <thead>
                                          <tr>
                                            <th scope="col">Atividades</th>
                                            <th scope="col">Segunda à Quinta</th>
                                            <th scope="col">Sexta</th>
                                            <th scope="col">Sábado</th>
                                            <th scope="col">Domingo e Feriados</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Passeio a cavalo</th>
                                            <td>9:30 às 11:30</td>
                                            <td>16:00 às 18:00</td>
                                            <td>15:00 às 17:00</td>
                                            <td>9:00 às 11:00</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Trilha</th>
                                            <td>15:00 às 17:00</td>
                                            <td>14:00 às 16:30</td>
                                            <td>8:00 às 10:00</td>
                                            <td>9:30 às 11:45</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Passeio de Buggy</th>
                                            <td>14:00 às 15:00</td>
                                            <td>15:30 às 17:00</td>
                                            <td>11:00 às 15:30</td>
                                            <td>14:00 às 18:00</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <footer>
                                    <a class="nav-link" href="#topo">Página inicial</a>
                                </footer>
                            </div>
                        </div>
                        <div class="col-3 mb-2 bg-info font-weight">
                            <p class="font-weight-bold">Aqui você e a família terão: </p>
                            <p class="font-weight-normal">A Pousada, conta com um ambiente leve e natural, um convite ao relaxamento.
                                Aqui seu descanso é garantido com muita qualidade, cercado de muito charme, conforto e paz.</p>
                        </div>
                    </div>       
        </div>
    </body>

</html>