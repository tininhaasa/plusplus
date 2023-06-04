<?php

/**
 *
 * Classe que realiza as operações de crud
 * utilizando a PDO.
 *
 * @author Emprezaz.com
 *
 **/
class PDOCrud
{

	private $pdo;
	private $password;
	private $env;

	public function __construct($configFile = null)
	{

		$this->pdo = PDOFactory::createPDO($configFile);
		$this->password = '@dO^b2jG3^gc';
		$this->env = ENV;
	}

	public function insert($table, $columns, $values, array $pdoValues = array())
	{

		$pdoValues = $this->prepareEncrypt($pdoValues);

		$insert = 'INSERT INTO ' . $table . ' (' . $columns . ') VALUES(' . $values . ')';
		
		$stmt   = $this->pdo->prepare($insert);
		$stmt->execute($pdoValues);

		return $this->pdo->lastInsertId();
	}

	public function update($table, $values, $clausule, array $pdoValues = array())
	{

		$pdoValues = $this->prepareEncrypt($pdoValues);

		$stmt   = $this->pdo->prepare('UPDATE ' . $table . ' SET ' . $values . ' ' . $clausule);

		$result = $stmt->execute($pdoValues);

		return $result;
	}

	public function delete($table, $id)
	{

		$stmt   = $this->pdo->prepare('DELETE FROM ' . $table . ' WHERE ID = :id');
		$result = $stmt->execute(array(
			':id' => $id
		));

		return $result;
	}

	public function insertMany($table, $columns, $values, array $pdoValues = array())
	{

		$pdoValues = $this->prepareEncrypt($pdoValues);

		$insert = 'INSERT INTO ' . $table . ' (' . $columns . ') VALUES' . $values . '';
		$stmt   = $this->pdo->prepare($insert);
		$stmt->execute($pdoValues);

		return $this->pdo->lastInsertId();
	}

	public function deleteMap($table, $column, $id)
	{

		$stmt   = $this->pdo->prepare('DELETE FROM ' . $table . ' WHERE ' . $column . ' = :id');
		$result = $stmt->execute(array(
			':id' => $id
		));

		return $result;
	}

	public function dataEncrypt(string $data)
	{
		return $this->encrypt($this->password, $data);
	}

	private function encrypt($key, $data)
	{

		// if ($this->env == 'dev') {
		// 	return $data;
		// }

		if ($data == null) {
			return null;
		}

		$encryptionKey = $key;
		$iv 		   = openssl_cipher_iv_length('aes-256-gcm');
		$encrypted 	   = openssl_encrypt($data, 'aes-256-gcm', $encryptionKey, 0, $iv, $tag);
		return base64_encode($encrypted . '::' . $iv . "::" . $tag);
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
