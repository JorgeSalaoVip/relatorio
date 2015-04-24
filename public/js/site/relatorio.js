function Relatorio() {
    var _self = this;
    
    
    _self.limitarCheck = function(obj, qtd) {
        obj.find('input').each(function() {
            $(this).bind('change', function() {
                var checados = obj.find('input:checked').length;

                if(checados > qtd) {
                    $(this).prop('checked', false);
                }
            });
        });
    };
    
    _self.validarCheckboxLength = function(obj, min) {
        var checkLength = $(obj).length;
        if(checkLength >= min) {
            return true;
        } else {
            return false;
        }
    };
    
    _self.configurarEnvio = function(objForm, objBt) {
        $(objForm).parsley();
        
        $(objBt).click(function() {
            if($(objForm).parsley().validate()) {
                $('.erro-manual').hide();
                var erro = false;
                
                if(!_self.validarCheckboxLength('#q1 input:checked', 1)) {
                    erro = true;
                    $('#q1').find('.erro-manual').show();
                }
                
                if(!_self.validarCheckboxLength('#q5 input:checked', 1)) {
                    erro = true;
                    $('#q5').find('.erro-manual').show();
                }
                
                if($('#q2 input:checked').length == 0) {
                    erro = true;
                    $('#q2').find('.erro-manual').show();
                }
                
                if(!erro){
                    _self.gerarRelatorio();
                }
                
            }
        });
    };
    
    _self.abrirRespostas = function(questaoObj, respostasObj) {
        questaoObj.find('input').each(function(index) {
            var auxContador = index + 1;
            if($(this).prop('checked')) {
                respostasObj.find('.op' + auxContador).show();
            }
        });        
    };
    
    _self.abrirRespostasCondicionais = function(questaoObj, respostasObj, arrQuestoesDesejadas, respostaDesejada, qtdObjetivo) {
        qtdObjetivo = typeof(qtdObjetivo) != 'undefined' ? qtdObjetivo : 0;
        var questoesChecadas = 0;
        
        questaoObj.find('input:checked').each(function(index) {
            var auxContador = index + 1;
            var auxValor = $(this).val();
            
            if(qtdObjetivo == 0) {

                for (var i in arrQuestoesDesejadas) {
                    if(auxValor == arrQuestoesDesejadas[i]) {
                        respostasObj.find(respostaDesejada).show();
                        return true;
                    }
                }
                
            } else {
                if($(this).prop('checked')) {
                    questoesChecadas++;
                }
                if(questoesChecadas >= qtdObjetivo) {
                    respostasObj.find(respostaDesejada).show();
                    return true;
                }
            }
        });        
    };
    
    
    _self.abrirRespostasCondicionaisAND = function(questaoObj, respostasObj, arrQuestoesDesejadas, respostaDesejada, qtdObjetivo) {
        qtdObjetivo = typeof(qtdObjetivo) != 'undefined' ? qtdObjetivo : 0;
        var retorno = true;
        
        questaoObj.find('input:checked').each(function(index) {
            var auxValor = $(this).val();
            
            for (var i in arrQuestoesDesejadas) {
                if(auxValor != arrQuestoesDesejadas[i]) {
                    retorno = false;
                }
            }
                
        });        
        
        if(retorno) {
            respostasObj.find(respostaDesejada).show();
            return retorno;
        }
        return retorno;
    };
    
    _self.abrirRespostasCondicionaisPorValor = function(questaoObj, respostasObj, callback) {
        questaoObj.find('input').each(function(index) {
            var auxValor = $(this).val();
                
            callback(respostasObj, auxValor);
            
        });
    };
    
    _self.abrirRelatorio = function() {
        var relatorioObj = $('.resposta');
        
        // dar display block no content respostas
        _self.abrirRespostas($('#q1'), relatorioObj.find('.container.resposta1'));
        _self.abrirRespostas($('#q2'), relatorioObj.find('.container.resposta2'));
        
        _self.abrirRespostasCondicionaisPorValor($('#q3'), relatorioObj.find('.container.resposta3'), function(respostasObj, auxValor) {
            
            if(auxValor <= 10) {
                respostasObj.find('.op1').show();
            } else if (auxValor >= 11 && auxValor <= 20) {
                respostasObj.find('.op2').show();
            } else if (auxValor >= 21 && auxValor <= 40) {
                respostasObj.find('.op3').show();
            } else if (auxValor >= 41) {
                respostasObj.find('.op4').show();
            }
            
        });
        
        _self.abrirRespostasCondicionaisPorValor($('#q4'), relatorioObj.find('.container.resposta4'), function(respostasObj, auxValor) {
            
            if(auxValor <= 5) {
                respostasObj.find('.op1').show();
            } else if (auxValor >= 6) {
                respostasObj.find('.op2').show();
            } 
            
        });
        
        _self.abrirRespostasCondicionais($('#q5'), relatorioObj.find('.container.resposta5'), [], '.op3', 3);
        _self.abrirRespostasCondicionaisAND($('#q5'), relatorioObj.find('.container.resposta5'), ['E1','E2'], '.op1');
        _self.abrirRespostasCondicionais($('#q5'), relatorioObj.find('.container.resposta5'), ['E1','E2','E9'], '.op1');
        _self.abrirRespostasCondicionais($('#q5'), relatorioObj.find('.container.resposta5'), ['E3','E4','E5','E6','E7','E8'], '.op2');
    };
    
    
    _self.gerarRelatorio = function() {
        loadUtils.abrir();
        
        var dados = $('#form').serialize();
        
        $.ajax({
            type: "POST",
            data: dados,
            dataType : "json",
            url: base_url('relatorio/gerar'),
            success : function(dados){
                loadUtils.remover();
                //var obj = JSON.parse(json_str);
                console.log('ok');
                _self.abrirRelatorio();
                
            }
        });
    };
    
    _self.construtor = function() {
        _self.limitarCheck($('#q1'), 3);
	$("#inputTelefone").mask("(99) 9999-9999?9");
	$("#q3 input, #q4 input").numeric();
        
        _self.configurarEnvio('#form', '#submitBt');
        
        
    };
    
    _self.construtor();
    
};

var relatorio;

$(function(){
    relatorio = new Relatorio();
});
