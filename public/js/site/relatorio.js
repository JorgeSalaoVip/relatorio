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
    
    _self.configurarEnvio = function(objForm, objBt) {
        $(objForm).parsley();
        
        $(objBt).click(function() {
            if($(objForm).parsley().validate()) {
                //_self.gerarRelatorio();
                alert('ok');
            }
        });
    };
    
    
    _self.gerarRelatorio = function(dados) {
        loadUtils.abrir();
        
        $.ajax({
            type: "POST",
            data: 'dados=' + JSON.stringify(dados),
            dataType : "json",
            url: base_url('relatorio/gerar'),
            success : function(dados){
                loadUtils.remover();

                //var obj = JSON.parse(json_str);
                if(dados.feedBack.erro == true){
                    alert(dados.feedBack.erroDescricao);
                } else if(!_self.isDuploClique(dados.feedBack)) {
                    
                }
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
