<?php

class FMCompositeField extends CompositeField {
	var $startOpen = false;
	var $useCheckbox = false;
	
	function __construct($name, $title, $children) {
		$this->name = $name;
		$this->title = $title;
		
		parent::__construct($children);
	}
	
	public function FieldHolder() {
	
		Requirements::javascript(THIRDPARTY_DIR.'/jquery/jquery.js');
		Requirements::javascript(THIRDPARTY_DIR.'/jquery-livequery/jquery.livequery.js');
		
		Requirements::javascript("fmcompositefield/javascript/FMCompositeField.js");
		
		Requirements::css("fmcompositefield/css/FMCompositeField.css");
		
		return $this->renderWith("FMCompositeField");
	}
	
	function setStartOpen(boolean $bool) {
		$this->startOpen = $bool;
	}
	
	function getStartOpen() {
		if ($this->useCheckbox) {
			return ($this->Value() == 1);
		} else {
			return $this->startOpen;
		}
	}
	
	function setUseCheckbox(boolean $bool) {
		$this->useCheckbox = $bool;
	}
	
	function getUseCheckbox() {
		return $this->useCheckbox;
	}
	
	function CheckboxField() {
		$checkbox = new CheckboxField($this->Name(), '', $this->Value());
		return $checkbox;
	}
	
	function hasData() {
		return $this->useCheckbox;
	}
	
	function dataValue() {
		return ($this->value) ? 1 : 0;
	}
	
	function Value() {
		return ($this->value) ? 1 : 0;
	}
	
	function fieldByName($name) {
		if ($name == $this->Name()) {
			return $this;
		} else {
			return parent::fieldByName($name);
		}
	}
	
}