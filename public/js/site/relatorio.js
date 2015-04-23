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
        console.log(questaoObj.find('input'));
        questaoObj.find('input').each(function(index) {
            var auxContador = index + 1;
            if($(this).prop('checked')) {
                respostasObj.find('.op' + auxContador).show();
            }
        });
        
    }
    
    _self.abrirRelatorio = function() {
        var relatorioObj = $('.resposta');
        
        // dar display block no content respostas
        _self.abrirRespostas($('#q1'), relatorioObj.find('.container.resposta1'));
        _self.abrirRespostas($('#q2'), relatorioObj.find('.container.resposta2'));
        
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
