var loadUtils = {
    
    abrir: function(mensagemCustom) {
        var mensagem = typeof(mensagemCustom) != 'undefined' ? mensagemCustom : 'Carregando...';
        
        this.remover();
        $('body').append('<div id="boxLoadUtilShadow">');
        $('<div id="boxLoadUtil">')
                .append($('<div id="loadUtilCarregando">'))
                .appendTo('body');
        
        $('#loadUtilCarregando').html(mensagem).append('<br />').append($('<img src="'+base_url('public/img/ajax-loader.gif')+'">'));
    },
    remover: function() {
        if($('body').find("#boxLoadUtilShadow").length != 0) {
            $('body').find("#boxLoadUtilShadow").remove();
            $('body').find("#boxLoadUtil").remove();
        }
    }
};

