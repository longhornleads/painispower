<?php

class PeThemeViewSliderRefine extends PeThemeViewSliderVolo {

	public function name() {
		return __("Slider - Refine (CSS animations)",'Pixelentity Theme/Plugin');
	}

	public function short() {
		return __("Refine",'Pixelentity Theme/Plugin');
	}

	public function mbox() {
		$mbox = parent::mbox();

		$mbox["content"]["transition"] = 
			array(
				  "label"=>__("Transition",'Pixelentity Theme/Plugin'),
				  "type"=>"Select",
				  "description" => __("Transition type",'Pixelentity Theme/Plugin'),
				  "options" => 
				  array(
						__("Random",'Pixelentity Theme/Plugin') => "random",
						__("Cube Horizontal",'Pixelentity Theme/Plugin') => "cubeH",
						__("Cube Vertical",'Pixelentity Theme/Plugin') => "cubeV",
						__("Fade",'Pixelentity Theme/Plugin') => "fade",
						__("Slice Horizontal",'Pixelentity Theme/Plugin') => "sliceH",
						__("Slice Vertical",'Pixelentity Theme/Plugin') => "sliceV",
						__("Slide Horizontal",'Pixelentity Theme/Plugin') => "slideH",
						__("Slide Vertical",'Pixelentity Theme/Plugin') => "slideV",
						__("Scale",'Pixelentity Theme/Plugin') => "scale",
						__("Block scale",'Pixelentity Theme/Plugin') => "blockScale",
						__("Kaleidoscope",'Pixelentity Theme/Plugin') => "kaleidoscope",
						__("Fan",'Pixelentity Theme/Plugin') => "fan",
						__("Blind Horizontal",'Pixelentity Theme/Plugin') => "blindH",
						__("Blind Vertical",'Pixelentity Theme/Plugin') => "blindV"
						),
				  "default"=>"random"
				  );

		return $mbox;
		
	}

	public function template() {
		peTheme()->get_template_part("view","slider-refine");
	}
   
}

?>
