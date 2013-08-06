<?php
Class Dropdown_model extends CI_Model{
	
	public $option_id = null;

	function __construc(){
		parent::__construc();
	}


	/**
	*
	*	Gets all options
	*	returns array
	*
	**/
	function getOptions(){
		$options = $this->db->select('id, value')
						->get('options')->result();

		$options_arr;

		$options_arr['#'] = '-- Please Select Option --';

		// Format for passing into form_dropdown function

		foreach ($options as $option) {
			$options_arr[$option->id] = $option->value;
		}

		return $options_arr;
	}

	/**
	*
	*	Gets sub options
	*   returns array
	*
	**/
	function getSubOptions(){
		if(!is_null($this->option_id)){
			$this->db->select('id, value');
			$this->db->where('option_id', $this->option_id);
			$suboptions = $this->db->get('suboptions');

			// if there are suboptinos for this option...
			if($suboptions->num_rows() > 0){
				$suboptions_arr;

				// Format for passing into jQuery loop

				foreach ($suboptions->result() as $suboption) {
					$suboptions_arr[$suboption->id] = $suboption->value;
				}

				return $suboptions_arr;
			}
		}

		return;
	}
}
?>