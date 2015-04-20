function Relatorio() {
    var _self = this;
    
    
    
    
    _self.ajaxExemplo = function(dados) {
        loadUtils.abrir();
        
        $.ajax({
            type: "POST",
            data: 'dados=' + JSON.stringify(dados),
            dataType : "json",
            url: base_url('balbal/gravar'),
            success : function(dados){
                loadUtils.remover();
                //var obj = JSON.parse(json_str);
                if(dados.feedBack.erro == true){
                    apprise(dados.feedBack.erroDescricao);
                } else if(!_self.isDuploClique(dados.feedBack)) {
                    
                }
            }
        });
    };
    
    _self.construtor = function() {
        alert('foi');
    };
    
    _self.construtor();
    
};

var relatorio;

$(function(){
    relatorio = new Relatorio();
});
