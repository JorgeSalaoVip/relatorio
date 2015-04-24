<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Como melhorar o seu negócio - Salão de Beleza</title>
    <!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

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
        <button class="btn-comecar" id="btnComecar">Comece a responder</button>
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
                            <input type="checkbox" value="A1" name="a[]" />
                            Preciso de mais clientes especialmente nos horários ociosos.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" value="A2" name="a[]" />
                            Não consigo controlar as finanças e acabo tendo mais gastos do que lucro.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" value="A3" name="a[]" />
                            Tenho dificuldade de controlar a presença e comissão dos meus funcionários.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" value="A4" name="a[]" />
                            Gostaria de fazer mais promoções para meu salão mas tenho dificuldade de divulgar e/ou controlar o andamento das mesmas.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" value="A5" name="a[]" />
                            Gostaria de dedicar mais tempo à minha especialidade do que administrando o salão.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" value="A6" name="a[]" />
                            Clientes que agendam horário e não chegam.
                        </label>
                    </li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" value="A7" name="a[]" />
                            Outro. Qual? <input type="text" name="outros" value="" />
                        </label>
                        <ul class="erro-manual">
                            <li>É preciso marcar pelo menos uma opção.</li>
                        </ul>
                    </li>
                  </ul>

                  <!-- Questão 2 -->
                  <ul id="q2" class="questao">
                    <li class="descricao">
                        <h4><span>2. </span>Você está satisfeito com a quantidade de clientes que atende no seu salão?</h4>
                    </li>
                    <li>
                        <label class="radio">
                            <input type="radio" value="B1" name="b" />
                            Sim, todos horários cheios.
                        </label>
                    </li>
                    <li>
                        <label class="radio">
                            <input type="radio" value="B2" name="b" />
                            Sim, mas gostaria de ter mais clientes.
                        </label>
                    </li>
                    <li>
                        <label class="radio">
                            <input type="radio" value="B3" name="b" />
                            Não.
                        </label>
                        <ul class="erro-manual">
                            <li>É preciso marcar pelo menos uma opção.</li>
                        </ul>
                    </li>
                </ul>

                <!-- Questão 3 -->
                <ul id="q3" class="questao">
                    <li class="descricao">
                      <h4><span>3. </span>Quantos funcionários você possui em seu salão?</h4>
                    </li>
                    <li>
                        <input type="number" min="0" value="C1" name="c" required />
                    </li>
                </ul>

                <!-- Questão 4 -->
                <ul id="q4" class="questao">
                    <li class="descricao">
                        <h4><span>4. </span>Destes, quantos são dedicados à serviços administrativos (como atender telefone, agendar horários, cuidar de pagamentos)?</h4>
                    </li>
                    <li>
                        <input type="number" min="0" value="D1" name="d" required />
                    </li>
                </ul>

                <!-- Questão 5 -->
                <ul id="q5" class="questao">
                  <li class="descricao">
                      <h4><span>5. </span>Como visto, tecnologia é algo que é imprescindível, simples e necessário para tornar seu salão reconhecido. Como você se vê em relação a tecnologia?</h4>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E1" name="e[]" />Tenho smartphone
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E2" name="e[]" />Tenho um computador
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E3" name="e[]" />Navego sempre na Internet
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E4" name="e[]" />Já fiz compras pela internet
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E5" name="e[]" />Tenho um software de gestão no meu salão
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E6" name="e[]" />Tenho um site para meu salão
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E7" name="e[]" />Meu salão está presente nas redes sociais
                      </label>
                  </li>
                  <li>
                      <label class="checkbox">
                          <input type="checkbox" value="E8" name="e[]" />Utilizo programas para facilitar minhas finanças e compromissos pessoais
                      </label>
                  </li>
                  <li>
                        <label class="checkbox">
                            <input type="checkbox" value="E9" name="e[]" />Não tenho  familiaridade com computador e/ou Internet
                        </label>
                        <ul class="erro-manual">
                            <li>É preciso marcar pelo menos uma opção.</li>
                        </ul>
                  </li>
              </ul>

              <h4><span>6. </span>Por favor, informe-nos seu dados de contato.</h4>
              <div id="formularioBasico">

                <div class="control-group">
                    <label class="control-label" for="inputNome">Nome</label>
                    <div class="controls">
                        <input type="text" id="inputNome" name="nome" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="inputEmail">E-mail</label>
                    <div class="controls">
                        <input type="email" id="inputEmail" name="email" data-parsley-trigger="change" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="inputTelefone">Telefone</label>
                    <div class="controls">
                        <input type="text" id="inputTelefone" name="telefone" required>
                    </div>
                </div>
            </div>
            <button type="button" id="submitBt" class="bt btn-quero">Quero meu relatório</button>

          </div>
        </div>
    
    </form>
    
    <div class="resposta" id="respostasBloco">
      <div class="container">
        <h1>Resultado</h1>
        <img src="<?php echo base_url('public/img/bg-salao-de-beleza-2.jpg')?>">
        <p>Baseado em suas respostas, eis nossa análise de como anda o negócio de seu estabelecimento e veja nossas sugestõs, dicas e soluções para melhorar o seu negócio.</p>
      </div>

      <!-- Resposta Pergunta 1 -->
      <div class="container resposta1">
        <div class="row op1">
          <div class="col col-md-12">
              <h4>Clientes para horários ociosos</h4>
              <p>É natural dentro do mercado de beleza e estética que certos dias e horários da semana fiquem "às moscas". </p>
              <p>Para resolver esse problema, uma das sugestões, é comunicar-se com o maior número de potenciais clientes que se interessem por horários mais vazios. Esteja presente na Internet onde é possível alcançar um número alto de pessoas a um baixo custo. Utilize agendamento online para facilitar o agendamento de novos clientes</p>
              <p>Outra sugestão para aumentar o fluxo de clientes nos horários ociosos, é fazer promoções de curto prazo divulgadas em meios rápidos como mensagens de sms.</p>
              <p>O software Salão Vip oferece as ferramentas necessárias para melhorar seus negócios pois além de muitas funcionalidades de gestão, possui agendamento online no portal Salão Vip, agendamento via software, além de criação e divulgação de promoções disparadas via sms ou e-mail.</p>
              <p>Você conta com cadastro do seu salão de beleza totalmente gratuito em nosso portal, onde conta com mais 30.000 visitas mensais e clientes potenciais procurando por salões onde você está!</p>
          </div>
        </div>
        <div class="row op2">
          <div class="col col-md-12">
              <h4>Mantenha seus custos sob controle e não perca de vista seus lucros.</h4>
              <p>Esse é um dos pontos que os donos de salão mais enfrentam dificuldades para administrar. Hoje, é muito comum vermos alguns salões de beleza grandes utilizarem do antigo método da anotação no papel, na cabeça, ou em casos mais extremos, perderem o controle total dos seus clientes.</p>
              <p>Isso gera uma reação em cadeia gigantesca que sobrecarregam seus funcionários, seus controles financeiros de quanto cada um desses tem a receber, gerando assim muitas vezes mais despesas do que receitas e o possível encerramento do seu salão pela falta de informação correta, e por fim, seus clientes que sentirão na pele pela espera do horário agendado, sentindo explicitamente a confusão que isso acarretará.</p>
              <p>Uma saída rápida e eficaz, é controlar tudo através de uma ferramenta, hoje o Salão Vip possui um sistema com preço muito acessível para seu salão seja ele pequeno ou de grande porte, para poder em questão de alguns cliques você ter relatórios simples para identificar seu fluxo de caixa e saber onde está vazando. Com este sistema você domina seu salão e não ele que domina!</p>
            </div>
          </div>
          <div class="row op3">
            <div class="col col-md-12">
                <h4>Seus funcionários motivados recebendo oque merecem</h4>
                <p>Se o controle de pessoas e a matemática fossem algo menos complexo, seria bem capaz que o número de empreendimentos que fecham por ano diminuissem. Infelizmente a realidade não é essa, essas são características fundamentais para o sucesso de qualquer negócio. Com o sistema do Salão vip por exemplo, você consegue matar esses problemas com apenas uma função.</p>
                <p>Com o sistema de funcionários, você pode definir, qual a margem de comissão ele terá em cada tipo de serviço e poderá ver sua agenda se está cheia ou não, para controlar seus horários de forma mais assertiva. Uma dica é você gerir o tempo que economizará com essas funções fazendo possíveis ações de marketing e obtendo maiores lucros pro seu salão, e nosso sistema também faz isso por você!</p>
            </div>
          </div>
          <div class="row op4">
            <div class="col col-md-12">
              <h4>Promoções fáceis de controlar e divulgar</h4>
              <p>Algumas técnicas antigas de divulgação como uma bela fachada chamando a atenção do bairro inteiro estabelecido é uma ótima forma de divulgação, chamar o Celso Kamura para trabalhar em seu salão seria uma ótima forma também, o problema é, tem dinheiro para isso? Não precisa nos dizer... Pensando nessas questões e tentando ver a forma perfeita para atender essa necessidade desenvolvemos um sistema de marketing onde você precisará apenas colocar algumas informações e todo o marketing estará feito.</p>
              <p>Crie campanha por SMS e envie a mensagem para seus clientes falando sobre seus horários agendados diminuindo mais de 35% dos cancelamentos de agendamentos. Crie e-mails marketing para seus clientes e sua base mais importante oferecendo promoções e dizer o quanto é grato por tê-lo como cliente. Você ainda conseguirá criar promoções exclusivas divulgando no portal do Salão Vip, contando com mais de 150 mil visitas mensais. Com todas essas técnicas, você certamente conquistará a atenção de todos seus clientes.</p>
            </div>
          </div>
          <div class="row op5">
            <div class="col col-md-12">
              <h4>Trabalhar em sua especialidade, sem preocupar-se com administrar seus negócios</h4>
              <p>É bem óbvio essa questão quando você olha para trás e viu que não quis fazer algum curso de administração. Com sistema de gestão, funcionalidades de logística, administrativa, controle de recursos e de pessoas entre outras, você terá tempo de sobra para desenvolver outras atividades como as de sua especialidade e também aproveitar seu tempo livre da forma como quiser.</p>
            </div>
          </div>
          <div class="row op6">
            <div class="col col-md-12">
              <h4>Clientes comparecem aos horários agendados</h4>
              <p>Um dos casos mais difíceis de se tratar em qualquer salão, é a falta de compromisso dos clientes. Isso acarreta em uma série de problemas. Basicamente, neste ponto seus funcionários ficarão desocupados com a falta dos clientes por falta do comparecimento, você perde o valor dos serviços agendados vendo seus reais indo embora.</p>
              <p>Essa é uma preocupação do passado. Hoje com envios de sms para seus clientes você retém cerca de 35% dos clientes que faltariam em seus horários. Com o sistema do Salão Vip, você consegue fazer isso de forma fácil, acredite!</p>
            </div>
          </div>
      </div>

      <!-- Resposta Pergunta 2 -->
      <div class="container resposta2">
        <div class="row op1">
          <div class="col col-md-12">
            <h4>Horários cheios</h4>
            <p>Ter muito cliente é muito bom, mas nada é tão bom que não possa piorar. Salão muito cheio, atrasos e faltas dos clientes, tempo desperdiçado com administração e má gestão do agendamento dos clientes são pontos cruciais para tornar seu salão um verdadero sucesso ou um fracasso! Saber administrar todos esses pontos é essencial para continuar a ter grande quantidade de clientes.</p>
          </div>
        </div>
        <div class="row op2">
          <div class="col col-md-12">
            <h4>Mais clientes é melhor</h4>
            <p>A maioria dos donos de salão de beleza sempre ficam com a impressão que poderiam ter mais clientes. A pergunta é? Você está fazendo por onde para ter mais clientes?</p>
            <p>Hoje, a competição é diferente, não basta mais fazer um bom corte de cabelo ou fazer uma progressiva impecável que fará conquistar mais a clientela. Muitos salões utilizam de avançadas técnicas de marketing onde placas, um bom ponto, ou até mesmo a mais bela fachada já não supre mais a necessidade de uma boa divulgação.</p>
            <p>As grandes redes de salão de beleza utilizam de técnicas de envios de e-mail marketing para os principais clientes, promoções exclusivas com ampla divulgação em portais de salão na internet e envios de sms para clientes que pensaram em algum momento faltar ao agendamento dos seus serviços. O melhor de tudo que isso é muito simples de fazer. Acredite!</p>
          </div>
        </div>
        <div class="row op3">
          <div class="col col-md-12">
            <h4>Salão vazio</h4>
            <p>Com a abertura de milhares de salão por dia, o Brasil está passando por um momento de alta competição neste setor. Você precisará de uma grande divulgação em massa, por exemplo em portais com milhares de clientes em potencial procurando por salões na região que seu salão está.</p>
          </div>
        </div>
      </div>

      <!-- Resposta Pergunta 3 -->
      <div class="container resposta3">
        <div class="row op1">
          <div class="col col-md-12">
            <h4>Pequeno salão</h4>
            <p>Salões pequenos com até 10 funcionários tem seus prós e contras, possuem uma fácil administração mas em contra-partida a grande maioria não foca em programas essenciais de fidelização, marketing e ficam vulneráveis por acreditarem que marcar agendamentos e comissões de funcionários ainda é melhor fazer no bom e velho papel. Hoje, por exemplo o sistema do Salão Vip, consegue fazer tudo isso por menos de R$ 100,00, e você terá a certeza de que estará fazendo todo trabalho de forma profissional e assertiva para fazer do seu salão o melhor de sua região!</p>
          </div>
        </div>
        <div class="row op2">
          <div class="col col-md-12">
            <h4>Médio salão</h4>
            <p>Você, com certeza está dominando um grande público de sua região para ter tantos profissionais trabalhando para você. A dificuldade nesse ponto é geralmente está em torno de administrar seu salão e funcionários. Com sistema de gestão, você conseguirá olhar todos esses números de forma descomplicada, saber sobre os horários de agendamento de seus funcionários e saber se seu "barco está navegando sem buracos".</p>
          </div>
        </div>
        <div class="row op3">
          <div class="col col-md-12">
            <h4>Grande salão</h4>
            <p>Com tantos profissionais e este super salão de beleza, você deve ser o rei do marketing, muitos clientes, muitos funcionários, muitos fornecedores e tudo caminhando de forma perfeita... Bom, esse é o grande sonho, você faz parte dele? Grande parte dos salões e clínicas deste porte, enfrentam dificuldades de administração de seus funcionários e controle administrativo de seu negócio. Com ferramentas específicas e fácil utilização, vocÊ terá tudo isso em suas mãos.</p>
          </div>
        </div>
        <div class="row op4">
          <div class="col col-md-12">
            <h4>Vários salões</h4>
            <p>Com tantos profissionais e este super salão de beleza, você deve ser o rei do marketing, muitos clientes, muitos funcionários, muitos fornecedores e tudo caminhando de forma perfeita... Bom, esse é o grande sonho, você faz parte dele? Grande parte dos salões e clínicas deste porte, enfrentam dificuldades de administração de seus funcionários e controle administrativo de seu negócio. Com ferramentas específicas e fácil utilização, vocÊ terá tudo isso em suas mãos.</p>
          </div>
        </div>
      </div>

      <!-- Resposta Pergunta 4 -->
      <div class="container resposta4">
        <div class="row op1">
          <div class="col col-md-12">
              <h4>Alguns gastos com pessoal de gestão</h4>
              <p>Com muitos funcionários administrativos você tem a necessidade de ter uma perfeita gestão financeira e ter certeza que sua receita está acima de suas despesas. Com software de gestão do Salão Vip, você pode cortar custos, reduzir equipe de funcionários e ter a certeza de que seu dinheiro está sendo investido da melhor maneira.</p>
          </div>
        </div>
        <div class="row op2">
          <div class="col col-md-12">
            <h4>Muitos gastos com pessoal de gestão</h4>
            <p>Com muitos funcionários administrativos você tem a necessidade de ter uma perfeita gestão financeira e ter certeza que sua receita está acima de suas despesas. Com software de gestão do Salão Vip, você pode cortar custos, reduzir equipe de funcionários e ter a certeza de que seu dinheiro está sendo investido da melhor maneira.</p>
          </div>
        </div>
      </div>

      <!-- Resposta Pergunta 5 -->
      <div class="container resposta5">
        <div class="row op1">
          <div class="col col-md-12">
            <h4>Pouca familiaridade com tecnologia</h4>
            <p>Parece que você não tem uma familiaridade com tecnologia. O ponto positivo é que não é um bicho de 7 cabeças. De forma simples você pode utilizar de forma descomplicada o sistema do Salão Vip sem vínculo de contrato e com preço totalmente acessível para seu negócio.</p>
          </div>
        </div>
        <div class="row op2">
          <div class="col col-md-12">
            <h4>Tecnologia é importante, mas ainda é vista como complicada</h4>
            <p>Você tem um leve conhecimento sobre tecnologia. Você terá ótima vantagem para administrar e alavancar seu negócio de forma descomplicada. Tudo isso com o melhor sistema para Salão e sem vínculo de contrato e com preço totalmente acessível. </p>
          </div>
        </div>
        <div class="row op3">
          <div class="col col-md-12">
            <h4>Boa familiaridade com tecnologia</h4>
            <p>Você tem familiaridade com tecnologia e utiliza de um sistema de gestão. Isso é muito importante, mas queremos que saia que o Salão Vip é um dos mais conceituados softwares para gestão, podendo ser baixados para versão iphone e android, possuindo ótima usabilidade e interface, que por sua vez, temos como compromisso e objetivo prestar um serviço exclusivo de qualidade e usabilidade extrema.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="cadastro">
      <div class="container">
        <div class="row">
          <div class="col col-md-12 text-center">
            <h1>Salão Vip, a solução ideal para o seu estabelecimento</h1>
            <img src="<?php echo base_url('public/img/sistema_tela.png')?>">
          </div>
          <div class="col col-md-12 text-center">
            <p><strong>Cadastre-se no portal Salão Vip e seja conhecido por milhares de usuários que buscam salões, clínicas de estética e ainda agendam seus horários online.</strong></p>
            <p>Vá além, solicitando o software Salão Vip que permite utilizar todas as funcionalidades além do agendamento online feito pelo portal Salão Vip. Não é necessário instalar nada, o software é inteiramente online e com acesso somente mediante usuário e senha que você definir. Você pode acessar o portal ou o software de um computador, smartphone ou tablet com conexão com a Internet em qualquer lugar do mundo.</p>
            <p>Experimente por 10 dias a solução com todas suas funcionalidades, sem compromisso algum.</p>
            <br>
            <button>Cadastre-se</button>
            <br><br>
            <p>Ainda tem dúvidas? Prefere falar com um de nossos consultores? <a href="#">Entre em contato aqui.</a></p>
          </div>
        </div>
      </div>
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
