<?php

/**
 *
 * Classe que executa queries utilizando a PDO.
 *
 * @author Emprezaz.com
 *
 **/
class PDOQuery
{

	private $pdo;
	private $password;
	private $env;

	public function __construct($configFile = null)
	{

		$this->pdo 		= PDOFactory::createPDO($configFile);
		$this->password = '@dO^b2jG3^gc';
		$this->env = ENV;
	}

	public function executeQuery($query, array $pdoValues = array())
	{

		$stmt = $this->pdo->prepare($query);
		$stmt->execute($pdoValues);

		return $stmt;
	}

	public function fetch($select, array $pdoValues = array())
	{

		$values = $pdoValues;
		$pdoValues = $this->prepareEncrypt($pdoValues);

		$stmt = $this->pdo->prepare($select);
		$stmt->execute($pdoValues);
		$row  = $stmt->fetch(PDO::FETCH_ASSOC);

		if (!$row) {
			$stmt = $this->pdo->prepare($select);
			$stmt->execute($values);
			$row  = $stmt->fetch(PDO::FETCH_ASSOC);
		}

		if ($row) {
			$keys = array_keys($row);
			foreach ($keys as $key => $value) {
				if (
					!mb_strpos(strtolower($key), 'id')
					&& !mb_strpos(strtolower($key), 'date')
					&& !mb_strpos(strtolower($key), 'status')
					&& !mb_strpos(strtolower($key), 'number')
					&& !mb_strpos(strtolower($key), 'type')
				) {
					$row[$value] = $this->decrypt($this->password, $row[$value], $value);
				}
			}
		}

		return $row;
	}

	public function fetchAll($select, array $pdoValues = array())
	{

		$pdoValues = $this->prepareEncrypt($pdoValues);
		$stmt = $this->pdo->prepare($select);
		
		$stmt->execute($pdoValues);
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if ($rows) {
			foreach ($rows as $key => $value) {
				$keys = array_keys($value);
				foreach ($keys as $key2 => $value2) {
					if (
						!mb_strpos(strtolower($key), 'id')
						&& !mb_strpos(strtolower($key), 'date')
						&& !mb_strpos(strtolower($key), 'status')
						&& !mb_strpos(strtolower($key), 'number')
						&& !mb_strpos(strtolower($key), 'type')
					) {
						$rows[$key][$value2] = $this->decrypt($this->password, $rows[$key][$value2], $value2);
					}
				}
			}
		}

		return $rows;
	}

	private function encrypt($key, $data)
	{

		// if ($this->env == 'dev') {
		// 	return $data;
		// }

		$encryptionKey = $key;
		$iv 		   = openssl_cipher_iv_length('aes-256-gcm');
		$encrypted 	   = openssl_encrypt($data, 'aes-256-gcm', $encryptionKey, 0, $iv, $tag);
		return base64_encode($encrypted . '::' . $iv . "::" . $tag);
	}


	private function decrypt($key, $data, $var)
	{

		// if($this->env == 'dev'){
		// 	return $data;
		// }

		$encryptionKey = $key;
		$list          = explode('::', base64_decode($data));
		if (count($list) == 3) {
			$encryptedData = $list[0];
			$iv			   = $list[1];
			$tag		   = $list[2];
			return openssl_decrypt($encryptedData, 'aes-256-gcm', $encryptionKey, 0, $iv, $tag);
		} else {
			return $data;
		}
	}

	private function prepareEncrypt($pdoValues)
	{

		foreach ($pdoValues as $key => $value) {

			if (
				!mb_strpos(strtolower($key), 'id')
				&& !mb_strpos(strtolower($key), 'date')
				&& !mb_strpos(strtolower($key), 'status')
				&& !mb_strpos(strtolower($key), 'number')
				&& !mb_strpos(strtolower($key), 'type')
			) {
				$pdoValues[$key] = $this->encrypt($this->password, $pdoValues[$key]);
			}
		}

		return $pdoValues;
	}
}
