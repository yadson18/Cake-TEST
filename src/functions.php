<?php 
	function mask($mask, $value)
	{
		$mask = str_split($mask);
		$value = str_split($value);
		foreach ($mask as $index => $char) {
			if ($char === '#' && !empty($value)) {
				$mask[$index] = array_shift($value);
			}
		}
		return implode($mask);
	}

	function sanitize(string $value)
	{
		return removeSpecialChars(removeExtraSpaces($value));
	}

	function removeExtraSpaces(string $value)
	{
		return preg_replace('/( )+/', ' ', $value);
	}

	function removeSpecialChars(string $value) 
	{
		$invalid = [
			'a' => ['á','à','â','ã','ä'],
			'e' => ['é','è','ê'],
			'i' => ['í','ì'],
			'o' => ['ó','ò','ô','õ','ö'],
			'u' => ['ú','ù','ü'],
			'c' => ['ç'],
			'' => [
	    		'[',']','<','>','{','}',';','#',"'",'!','?','(',')',
	    		'*','%','~','^','`','@', '/', '\\', '.', '-',':','|'
	    	]
		];
		if (!is_array($value)) {
			foreach ($invalid as $replaceTo => $invalidValues) {
				$value = str_replace($invalidValues, $replaceTo, $value);
				$value = str_replace(
					array_map('mb_strtoupper', $invalidValues), mb_strtoupper($replaceTo), $value
				);
			}
			return $value;
		}
		return array_map('removeSpecialChars', $value);
	}

	function moneyToFloat($money)
	{
		return preg_replace(['/[.]/', '/[,]/'], ['', '.'], $money);
	}

	function floatToMoney($float)
	{
		if (is_numeric($float)) {
			return number_format($float, 2, ',', '.');
		}
		return $float;
	}

	function dateBrFormat($date)
	{
		if (is_string($date) && !empty($date)) {
			return date('d/m/Y', strtotime($date));
		}
		return $date;
	}
	
	function floatFormatBr($float)
	{
		if (is_numeric($float)) {
			return number_format($float, 0, '', '.');
		}
		return $float;
	}