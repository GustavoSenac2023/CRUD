document.getElementById('cnpj').addEventListener('input', function(e) {
	var value = e.target.value;
	var rawValue = value.replace(/\D/g, ''); // Remove tudo que não é número

	// Verifica se o CNPJ tem 15 dígitos e se o primeiro dígito é '0'
	if (rawValue.length === 15 && rawValue.startsWith('0')) {
		// Verifica se, ao remover o '0', o restante é um CNPJ válido
		var potentialCNPJ = rawValue.substring(1);
		// Atualiza rawValue para o CNPJ sem o '0' inicial
		if (validaCNPJ(potentialCNPJ)) rawValue = potentialCNPJ;
	}

	var cnpjPattern = rawValue
					.replace(/^(\d{2})(\d)/, '$1.$2') // Adiciona ponto após o segundo dígito
					.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3') // Adiciona ponto após o quinto dígito
					.replace(/\.(\d{3})(\d)/, '.$1/$2') // Adiciona barra após o oitavo dígito
					.replace(/(\d{4})(\d)/, '$1-$2') // Adiciona traço após o décimo segundo dígito
					.replace(/(-\d{2})\d+?$/, '$1'); // Impede a entrada de mais de 14 dígitos
	e.target.value = cnpjPattern;
});