<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Como melhorar o seu negócio - Salão de Beleza</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/main.css')?>">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo"><img src="<?php echo base_url('public/img/logo-salao-vip.png')?>" alt="Salão Vip. Software de gestão de salões de beleza com agendamento online"></div>
      </div>
    </header>

    <div class="intro">
      <div class="container">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis lectus ac vehicula convallis. Nam at lectus.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ex tortor, gravida et arcu vel, dapibus tincidunt leo. Aenean et nisl et est porta rhoncus. Nunc vel neque blandit, malesuada.</p>
        <button class="btn-comecar">Comece a responder</button>
      </div>
    </div>

    <form id="form" data-parsley-validate>
    
        <div class="questionario">
          <div class="container">
                <h1>Responda o questionário abaixo e receba o diagnóstico de seu salão</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis lectus ac vehicula convallis. Nam at lectus.</p>

                  <!-- Questão 1 -->
                  <ul id="q1" class="questao">
                    <li class="descricao">
                      <h4><span>1. </span>Cite até 3 problemas que você mais enfrenta dificuldade atualmente.</h4>
                    </li>
                    <li>
                        <label class="checkbox">
                          <input type="checkbox" name="e" data-parsley-mincheck="1" />
                          Preciso de mais clientes especialmente nos horários ociosos.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                          <input type="checkbox" name="e" />
                          Não consigo controlar as finanças e acabo tendo mais gastos do que lucro.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" name="e" />
                            Tenho dificuldade de controlar a presença e comissão dos meus funcionários.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" name="e" />
                            Gostaria de fazer mais promoções para meu salão mas tenho dificuldade de divulgar e/ou controlar o andamento das mesmas.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" name="e" />
                            Gostaria de dedicar mais tempo à minha especialidade do que administrando o salão.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" name="e" />
                            Clientes que agendam horário e não chegam.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" name="e" />
                            Outro. Qual? <input type="text">
                        </label>
                    </li>
                  </ul>

                  <!-- Questão 2 -->
                  <ul id="q2" class="questao">
                    <li class="descricao">
                      <h4><span>2. </span>Você está satisfeito com a quantidade de clientes que atende no seu salão?</4>
                    </li>
                    <li>
                        <label class="radio">
                            <input type="radio" name="b" required />
                            Sim, todos horários cheios.
                        </label>
                    </li>
                    <li>
                        <label class="radio">
                            <input type="radio" name="b" />
                            Sim, mas gostaria de ter mais clientes.
                        </label>
                    </li>
                    <li>
                        <label class="radio">
                            <input type="radio" name="b" />
                            Não.
                        </label>
                    </li>
                </ul>

                <!-- Questão 3 -->
                <ul id="q3" class="questao">
                    <li class="descricao">
                      <h4><span>3. </span>Quantos funcionários você possui em seu salão?</h4>
                    </li>
                    <li>
                        <input type="number" min="0" name="c" required />
                    </li>
                </ul>

                <!-- Questão 4 -->
                <ul id="q4" class="questao">
                    <li class="descricao">
                        <h4><span>4. </span>Destes, quantos são dedicados à serviços administrativos (como atender telefone, agendar horários, cuidar de pagamentos)?</h4>
                    </li>
                    <li>
                        <input type="number" min="0" name="d" required />
                    </li>
                </ul>

                <!-- Questão 5 -->
                <ul id="q5" class="questao">
                  <li class="descricao">
                      <h4><span>5. </span>Como visto, tecnologia é algo que é imprescindível, simples e necessário para tornar seu salão reconhecido. Como você se vê em relação a tecnologia?</h4>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" data-parsley-mincheck="1" />Tenho smartphone
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Tenho um computador
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Navego sempre na Internet
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Já fiz compras pela internet
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Tenho um software de gestão no meu salão
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Tenho um site para meu salão
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Meu salão está presente nas redes sociais
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Utilizo programas para facilitar minhas finanças e compromissos pessoais
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" name="e" />Não tenho  familiaridade com computador e/ou Internet
                      </label>
                  </li>
              </ul>

              <h4><span>6. </span>Por favor, informe-nos seu dados de contato.</h4>
              <div id="formularioBasico">

                <div class="control-group">
                    <label class="control-label" for="inputNome">Nome</label>
                    <div class="controls">
                        <input type="text" id="inputNome" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="inputEmail">E-mail</label>
                    <div class="controls">
                        <input type="email" id="inputEmail" data-parsley-trigger="change" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="inputTelefone">Telefone</label>
                    <div class="controls">
                        <input type="text" id="inputTelefone" required>
                    </div>
                </div>
            </div>
            <button type="button" id="submitBt" class="bt btn-quero">Quero meu relatório</button>

          </div>
        </div>
    
    </form>
    
    <div class="resposta">
      <div class="container">
        <div class="row">
          <div class="col col-md-6"></div>
          <div class="col col-md-6">
            <h1>Experimente o Software Salão Vip totalmente Web</h1>
            <ul>
              <li>Cadastro do seu salão de beleza totalmente gratuito em nosso portal, onde conta com mais 30.000 visitas e clientes potenciais procurando por salões onde você está!</li>
              <li>Relatórios administrativos extremamente simples para saber como anda a saúde financeira do seu negócio.</li>
              <li>  Com o software do Salão vip, em poucos cliques você saberá o real valor a ser pago para comissão de todos seus colaboradores. Com ele você realmente domina o seu negócio com facilidade.</li>
              <li>Você pode enviar sms para seus clientes, fidelizando cada um deles, reduzindo em mais de 35% da falta dos clientes e tornar seu negócio ainda mais um sucesso.</li>
              <li>Com funcionalidades de logística, administrativa, controle entre outras, você terá tempo de sobra para desenvolver outras atividades para seu salão e também aproveitar seu tempo livre da forma como quiser.</li>
              <li>Com a possibilidade de enviar  e-mail marketing, sms para confirmação de horários e disponibilizando promoções atrativas do seu negócio em nosso portal, seu salão de beleza terá outro impacto para seus clientes.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="depoimentos">

    </div>
    
    <div data-backdrop="static" class="modal fade" id="popupModal"></div>

    <footer>
      Salão Vip - <a href="http://www.salaovip.com.br">www.salaovip.com.br</a>
    </footer>
    
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/plugins/maskedinput.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/plugins/jquery.numeric.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/plugins/parsley.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/plugins/pt-br.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/user_plugins/loadUtils.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/site/relatorio.js'); ?>"></script>
    <script> function base_url(url){ return '<?php echo base_url();?>'+url; }</script>
  </body>
</html>
