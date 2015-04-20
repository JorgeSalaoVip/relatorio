<!doctype html>
<!--[if lt IE 8]> <html class="no-js ie7 oldie" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="pt-br"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="pt-br"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<html>
    <head>
        
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/relatorio.css')?>">
        <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/plugins/maskedinput.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/plugins/jquery.numeric.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/plugins/parsley.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/plugins/pt-br.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/user_plugins/loadUtils.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/site/relatorio.js'); ?>"></script>
        <script> function base_url(url){ return '<?php echo base_url();?>'+url; }</script>
        
    </head>
    <body>
        
        <div id="mainContent" class="container">
            
            <div id="titulo">
                Titulo
            </div>
            
            <div id="apresentacao">
                Apresentação
            </div>
            
            <form id="form" data-parsley-validate>
                
                <div id="questionario">
                    
                    <ul id="q1" class="questao">
                        <li class="descricao">
                            você teste?
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" data-parsley-mincheck="1" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                    </ul>
                    
                    <ul id="q2" class="questao">
                        <li class="descricao">
                            você teste radio?
                        </li>
                        <li>
                            <label class="radio">
                                <input type="radio" name="b" required />
                                radio teste
                            </label>
                        </li>
                        <li>
                            <label class="radio">
                                <input type="radio" name="b" />
                                radio teste
                            </label>
                        </li>
                        <li>
                            <label class="radio">
                                <input type="radio" name="b" />
                                radio teste
                            </label>
                        </li>
                    </ul>
                    
                    <ul id="q3" class="questao">
                        <li class="descricao">
                            você teste num 1?
                        </li>
                        <li>
                            <input type="number" min="0" name="c" required />
                        </li>
                    </ul>
                    
                    <ul id="q4" class="questao">
                        <li class="descricao">
                            você teste num 2?
                        </li>
                        <li>
                            <input type="number" min="0" name="d" required />
                        </li>
                    </ul>
                    
                    <ul id="q5" class="questao">
                        <li class="descricao">
                            você teste 5?
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" data-parsley-mincheck="1" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="e" /> Check me out
                            </label>
                        </li>
                    </ul>
                    
                </div>
                
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
                
                <button type="button" id="submitBt" class="bt btn-primary">Quero meu relatório</button>
                
            </form>
        </div>
        
        
        <div data-backdrop="static" class="modal fade" id="popupModal"></div>
    </body>

</html>



