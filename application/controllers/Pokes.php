<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokes extends CI_Controller {

	public function pokeUser()
	{
		$pokeData = $this->input->post();
		$poke_confirm = $this->Poke->checkPokeStatus($pokeData);  
		if($poke_confirm)
		{
			$result = $this->Poke->addToPoke($pokeData);
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
			$result = $this->Poke->addPoke($pokeData);
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
