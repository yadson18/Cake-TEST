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

    function formularioLetrasMaiusculas() {
        $(this).val($(this).val().toUpperCase());
    }

    function limpaDadosCadastrais() {
		$('input[name=fantasia]').val('');
		$('input[name=nrend1]').val('');
		$('input[name=razao]').val('');
		$('input[name=cep]').val('');
    }

    function dadosCadastraisDesabilitado(status) {
		$('input[name=fantasia]').prop('disabled', status);
		$('input[name=nrend1]').prop('disabled', status);
		$('input[name=razao]').prop('disabled', status);
    	$('input[name=cep]').prop('disabled', status);
    }

    function buscaPessoaJuridica() {
    	limpaDadosCadastrais();
    	var $cnpj = $('input[name=cnpj]');

        if ($cnpj.cleanVal().search(/^[0-9]{14}$/) !== -1) {
        	dadosCadastraisDesabilitado(true);
        	var $fantasia = $('input[name=fantasia]');
        	var $numero = $('input[name=nrend1]');
        	var $razao = $('input[name=razao]');
        	var $cep = $('input[name=cep]');

            $.ajax({
                url: 'http://receitaws.com.br/v1/cnpj/' + $cnpj.cleanVal(),
                crossDomain: true,
                dataType: 'jsonp'
            })
            .always(function(dados, status) { 
            	if (status === 'success') {
            		if (dados.status === 'OK') {
		            	if (dados.situacao === 'ATIVA') {
			            	$cep.val(dados.cep.replace(/[.]/g, '')).focusout();
			            	$fantasia.val(dados.fantasia);
			            	$numero.val(dados.numero);
			            	$razao.val(dados.nome);
		            	}
                        else {
                            console.log('O cadastro referente a este CNPJ conta como inativo');
                        }
            		}
                    else {
                        console.log('Nada foi encontrato.');
                    }
            	}
                else {
                    console.log('Verifique sua conexão com a internet.');
                }
            	dadosCadastraisDesabilitado(false);
            });
        }
        else {
            console.log('Por favor, digite um CNPJ válido');
        }
    }

    function buscaCidadesPorSigla(siglaEstado, cidade) {
    	cidade = (cidade) ? removeAcentuacao(cidade).toUpperCase() : '';
    	siglaEstado = siglaEstado.toUpperCase();

    	if (siglaEstado.search(/^[a-zA-Z]{2}$/) !== -1) {
    		var $cidade = $('select[name=cidade]').prop('disabled', true);

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

    function limpaEndereco() {
		$('input[name=complementar]').val('');
		$('input[name=endereco]').val('');
		$('input[name=bairro]').val('');
    }

    function enderecoDesabilitado(status) {
		$('input[name=complementar]').prop('disabled', status);
    	$('select[name=estado]').prop('disabled', status);
		$('input[name=endereco]').prop('disabled', status);
		$('input[name=bairro]').prop('disabled', status);
    }

    function buscaPorCep() {
        limpaEndereco();
    	var $cep = $('input[name=cep]');
    	
		if ($cep.cleanVal().search(/^[0-9]{8}$/) !== -1) {
			enderecoDesabilitado(true);
			var $estado = $('select[name=estado]').val('AC').change();
			var $complemento = $('input[name=complementar]');
			var $endereco = $('input[name=endereco]');
			var $cidade = $('select[name=cidade]');
			var $bairro = $('input[name=bairro]');

			$.ajax({
	            url: 'https://viacep.com.br/ws/' + $cep.cleanVal() + '/json/',
	            dataType: 'json',
	            method: 'GET'
	        })
	        .always(function($dados, status) {
	        	if (status === 'success') {
	        		if (!$dados.erro) {
	        			buscaCidadesPorSigla($dados.uf, $dados.localidade);
	        			$complemento.val($dados.complemento.toUpperCase());
	        			$endereco.val($dados.logradouro.toUpperCase());
	        			$bairro.val($dados.bairro.toUpperCase());
	        			$estado.val($dados.uf.toUpperCase());
	        		}
	        		else {
	        			alert('Cep inválido.');
	        		}
	        	}
	        	else {
	        		alert('Não foi possível completar a operação, verifique sua conexão com a internet.');
	        	}
	        	enderecoDesabilitado(false);
	        });
		}
		else {
			alert('O cep deve conter 8 dígitos.');
		}
    }

    /* Máscaras */
    var $maskConfigs = {
    	translation: { '0': { pattern: /[0-9]/ } },
    	clearIfNotMatch: true,
        optional: false,
        reverse: true
    };

    $('.cnpj').mask('00.000.000/0000-00', $maskConfigs);

    $('.cpf').mask('000.000.000-00', $maskConfigs);

    $('.cep').mask('00000-000', $maskConfigs);

    $('.rg').mask('0.000.000', $maskConfigs);

    /* Eventos */
    $('#breadcrumb .tipo-cliente li').on('click', function() {
    	var $inscEstadual = $('#insc-estadual input[name=estadual]');
    	var $labelInscEstadual = $('#insc-estadual label');
    	var tipoCliente = $(this).find('a').attr('class');
    	var $divBotaoBusca = $('#busca-p-juridica');
    	var $cnpj = $('#cpf-cnpj input[name=cnpj]');
    	var $labelCliente = $('#cpf-cnpj label');
    	

    	$('#breadcrumb .tipo-cliente li').removeClass('active');
    	$(this).addClass('active');

    	if (tipoCliente === 'fisica') {
    		$labelInscEstadual.text('N° Identidade');
    		$divBotaoBusca.addClass('hidden');
    		$labelCliente.text('CPF');
    		$inscEstadual.attr({ 
    			placeholder: 'EX: 9.557.033' 
    		})
    		.val('').mask('0.000.000', $maskConfigs);
    		$cnpj.attr({ 
    			placeholder: 'EX: 095.726.241-80' 
    		})
    		.val('').mask('000.000.000-00', $maskConfigs);
    	}
    	else {
    		$inscEstadual.attr({ placeholder: 'EX: ISENTO' }).val('').unmask();
    		$labelInscEstadual.text('Inscrição Estadual');
    		$divBotaoBusca.removeClass('hidden');
    		$labelCliente.text('CNPJ');
    		$cnpj.attr({ 
    			placeholder: 'EX: 53.965.649/0001-03' 
    		})
    		.val('').mask('00.000.000/0000-00', $maskConfigs);
    	}
    });

    $('#busca-p-juridica i.button').on('click', buscaPessoaJuridica);

    $('input[name=cep]').on('focusout', buscaPorCep);

    $('.busca-endereco').on('click', buscaPorCep);

    $('select[name=estado]').on('change', function() { 
    	limpaEndereco();
    	buscaCidadesPorSigla($(this).val()); 
    });

    $('form.form-uppercase input').on('change', formularioLetrasMaiusculas);

    $('#delete').on('show.bs.modal', function(evento) {
        var $botaoConfirmar = $(this).find('button.confirm');
        var $formulario = $(this).find('form');
        var identificador = $(evento.relatedTarget).val();
        var url = $formulario.attr('action');

        $botaoConfirmar.on('click', function() {
            $formulario.attr({ 'action': url + '/' + identificador }).submit();
        });
    })
    .on('hidden.bs.modal', function(evento) {
        $(this).find('button.confirm').off('click');
    });
});