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
        <script type="text/javascript" src="<?php echo base_url('public/js/site/relatorio.js'); ?>"></script>
        
    </head>
    <body>
        
        <div id="mainContent" class="container">
            
            <div id="titulo">
                Titulo
            </div>
            
            <div id="apresentacao">
                Apresentação
            </div>
            
            <form>
                
                <div id="questionario">
                    
                    <ul id="q1" class="questao">
                        <li class="descricao">
                            você teste?
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
                            <input type="number" min="0" name="c" />
                        </li>
                    </ul>
                    
                    <div id="q4" class="questao">
                        <li class="descricao">
                            você teste num 2?
                        </li>
                        <li>
                            <input type="number" min="0" name="d" />
                        </li>
                    </div>
                    
                    <ul id="q5" class="questao">
                        <li class="descricao">
                            você teste 5?
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
                    
                </div>
                
                <div id="formularioBasico">
                    <div class="control-group">
                        <label class="control-label" for="inputNome">Nome</label>
                        <div class="controls">
                            <input type="text" id="inputNome">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">E-mail</label>
                        <div class="controls">
                            <input type="text" id="inputEmail">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="inputTelefone">Telefone</label>
                        <div class="controls">
                            <input type="text" id="inputTelefone">
                        </div>
                    </div>
                </div>
                
                <button type="button" id="submitBt" class="bt btn-primary">Quero meu relatório</button>
                
            </form>
        </div>
        
        
        <div data-backdrop="static" class="modal fade" id="popupModal"></div>
    </body>

</html>



