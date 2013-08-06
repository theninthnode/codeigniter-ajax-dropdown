<?php $this->load->view('html/header');?>
<h1>CodeIgniter Ajax Dropdown</h1>
<p>Select an option to get a list of suboptions.</h1>
<table>
<tbody>
	<tr>
		<td><label>Top Level Option</label></td>
		<td><?php echo form_dropdown('options', $options, '#', 'id="options"'); ?></td>
	</tr>
	<tr>
		<td><label>Sub Level Option</label></td>
		<td><select name="suboptions" id="suboptions"><option value="#">-- Please Select Sub-option --</option></select></td>
	</tr>
</tbody>
</table>


<?php $this->load->view('html/footer');?>