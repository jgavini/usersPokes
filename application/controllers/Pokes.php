<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokes extends CI_Controller {
//PANDA PANDA PANDA PANDA PANDA PANDA
	public function pokeUser()
	{
		$pokeData = $this->input->post();
		$poke_confirm = $this->poke->checkPokeStatus($pokeData);  
		if($poke_confirm)
		{
			$result = $this->poke->addToPoke($pokeData);
			if($result)
			{
				redirect('/profile');
			}
			else
			{
				$this->session->set_flashdata("error", "Please try again.");
				redirect('/profile');
			}
		}
		else
		{
			$result = $this->poke->addPoke($pokeData);
			if($result)
			{
				$this->session->set_flashdata("success", "You never poked them before!");
				redirect('/profile');
			}
			else
			{
				$this->session->set_flashdata("error", "Please try again later.");
				redirect('/profile');
			}
		}
	}
}
//HEY KELVIN!!!!!!!