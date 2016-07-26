<?php

class ProcessSwitchUserConfig extends ModuleConfig {
	public function getDefaults() {
		return array(
			'login-users' => 41
		);
	}

	public function getInputfields() {
		$inputfields = parent::getInputfields();

		$field = $this->modules->get('InputfieldMarkup');
		$field->value = '<ul class="notices" class="ui-widget"><li class="NoticeWarning" style="padding: 0.6em 1.5em; margin: 0;"><i class="fa fa-exclamation-circle"></i> ' . __('This module may allow you to see sensitive data of other users. Please use with caution and please use responsibly.') . '</li></ul>';
		$inputfields->add($field);

		$field = $this->modules->get('InputfieldAsmSelect');
		$field->name = 'who_can_use';
		$field->label = __('Who can use this facility?');
		$field->description = __('Specific users that you can login as (skip if you want to set this by user group below)');
		$field->required = true;
		foreach ($this->users->find('id!=40, sort=name') as $user) {
			$field->addOption($user->id, $user->name);
		}

		$inputfields->add($field);

		$field = $this->modules->get('InputfieldAsmSelect');
		$field->name = 'switch_users';
		$field->label = __('Able to login as the following User(s)');
		$field->description = __('Specific users that you can login as');
		$field->notes = __('Can be used on its own or in conjunction with the Role(s) dropdown');
		$field->columnWidth = 50;
		foreach ($this->users->find('id!=40|41, sort=name') as $user) {
			$field->addOption($user->id, $user->name);
		}
		$inputfields->add($field);

		$field = $this->modules->get('InputfieldAsmSelect');
		$field->name = 'switch_roles';
		$field->label = __('Able to login as the following Role(s)');
		$field->description = __('Specific roles that you can login as');
		$field->notes = __('Can be used on its own or in conjunction with the User(s) dropdown');
		$field->columnWidth = 50;
		foreach ($this->roles as $role) {
			$field->addOption($role->id, $role->name);
		}
		$inputfields->add($field);

		return $inputfields; 
	}
}