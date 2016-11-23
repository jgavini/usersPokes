<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Poke extends CI_Model {

	public function checkPokeStatus($pokeData)
	{
		$query = 'SELECT * FROM pokes WHERE user_id = ? AND poker_id = ?';
		return $this->db->query($query, array($pokeData['user_id'], $pokeData['poker_id']))->row_array();
	}

	public function addPoke($pokeData)
	{
		$query = "INSERT INTO pokes (user_id, poke_count, poker_id, created_at, updated_at) VALUES (?, '1', ?, NOW(), NOW())";
		$values = array($pokeData['user_id'], $pokeData['poker_id']);
		$result = $this->db->query( $query, $values );
		return $result;
	}

	public function addToPoke($pokeData)
	{
		$query = 'SELECT * FROM pokes WHERE user_id = ? AND poker_id = ?';
		$user = $this->db->query($query, array($pokeData['user_id'], $pokeData['poker_id']))->row_array();

		$pokes = $user['poke_count'] + 1;
		$query = 'UPDATE pokes SET poke_count = ?, pokes.updated_at = NOW() WHERE user_id = ? AND poker_id =?';
		$values = array($pokes, $pokeData['user_id'], $pokeData['poker_id']);
		return $this->db->query($query, $values);
	}

	public function getAllPokes($id)
	{
		$query = "SELECT * FROM pokes JOIN users ON users.id = pokes.poker_id WHERE pokes.user_id = ?";
		$pokes = $this->db->query( $query, $id)->result_array();
		return $pokes;
	}

}
