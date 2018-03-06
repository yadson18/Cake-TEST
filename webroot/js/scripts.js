$(document).ready(function(){
	/* Funções */
	function removeAcentuacao(palavra) {
        var palavraFormatada = palavra;
        var mapaAcentosHex = {
            a: /[\xE0-\xE6]/g,
            A: /[\xC0-\xC6]/g,
            e: /[\xE8-\xEB]/g,
            E: /[\xC8-\xCB]/g,
            i: /[\xEC-\xEF]/g,
            I: /[\xCC-\xCF]/g,
            o: /[\xF2-\xF6]/g,
            O: /[\xD2-\xD6]/g,
            u: /[\xF9-\xFC]/g,
            U: /[\xD9-\xDC]/g,
            c: /\xE7/g,
            C: /\xC7/g,
            n: /\xF1/g,
            N: /\xD1/g,
        };

        for ( var letra in mapaAcentosHex ) {
            palavraFormatada = palavraFormatada.replace(mapaAcentosHex[letra], letra);
        }

        return palavraFormatada;
    }

    function listaCidades(siglaEstado, cidade) {
    	siglaEstado = siglaEstado.toUpperCase();

    	if (siglaEstado.search(/^[a-zA-Z]{2}$/) !== -1) {
    		$cidade = $('select[name=cidade]').prop('disabled', true);

		    $.ajax({
		        url: '/ibge/listaCidades/' + siglaEstado,
		        dataType: 'json'
		    })
		    .always(function($dados, status) {
		        if (status === 'success') {
		        	if (!$dados.cidades.error) {
		        		var $cidades = [];
		        		var $opcao = null;

		        		$.each($dados.cidades, function(indice, $dadosCidade) {
		        			$opcao = $('<option></option>', {
		        				value: $dadosCidade.nome_municipio,
		        				text: $dadosCidade.nome_municipio
		        			});

		        			if (cidade === $dadosCidade.nome_municipio) {
		        				$opcao.prop('selected', true);
		        			}
		        			
		        			$cidades.push($opcao);
		        		});
		        		$cidade.empty().append($cidades);
		        	}
		        }
		        $cidade.prop('disabled', false);
		    });
    	}
    }

    /* Máscaras */
    $('input[name=cep]').mask('00000-000', { reverse: true });

    /* Eventos */
    $('select[name=estado]').on('change', function() { listaCidades($(this).val()); });

	$('.busca-endereco').on('click', function() {
		var $cep = $('input[name=cep]');

		if ($cep.cleanVal().search(/^[0-9]{8}$/) !== -1) {
			var $estado = $('select[name=estado]').prop('disabled', true);
			var $cidade = $('select[name=cidade]').prop('disabled', true);
			var $endereco = $('input[name=endereco]').prop('disabled', true);
			var $bairro = $('input[name=bairro]').prop('disabled', true);
			var $complemento = $('input[name=complementar]').prop('disabled', true);

			$.ajax({
	            url: 'https://viacep.com.br/ws/' + $cep.cleanVal() + '/json/',
	            dataType: 'json',
	            method: 'GET'
	        })
	        .always(function($dados, status) {
	        	if (status === 'success') {
	        		if (!$dados.erro) {
	        			var cidadeNome = removeAcentuacao($dados.localidade).toUpperCase();

	        			$estado.val($dados.uf.toUpperCase());
	        			if ($cidade.filter(':contains(' + cidadeNome + ')').length === 0) {
	        				listaCidades($dados.uf.toUpperCase(), cidadeNome);
	        			}
	        			else {
	        				$cidade.val(cidadeNome);
	        			}
	        			$endereco.val($dados.logradouro.toUpperCase());
	        			$bairro.val($dados.bairro.toUpperCase());
	        			$complemento.val($dados.complemento.toUpperCase());

	        		}
	        		else {
	        			alert('Cep inválido.');
	        		}
	        	}
	        	else {
	        		alert('Não foi possível completar a operação, verifique sua conexão com a internet.');
	        	}
	        	
	        	$estado.prop('disabled', false);
    			$cidade.prop('disabled', false);
    			$endereco.prop('disabled', false);
    			$bairro.prop('disabled', false);
    			$complemento.prop('disabled', false);
	        });
		}
		else {
			alert('O cep deve conter 8 dígitos.');
		}
	});
});