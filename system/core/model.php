<?php
#
# HTMLQUERY PHP framework
# Copyright (C) 2013 A.Gokhan SATMAN <abgsatman@gmail.com>
# This file is a part of htmlquery.
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

class MODEL extends CONTROLLER {
	
	public function __construct ( $views = NULL ) {
		
		parent::__construct();
		
		if ( is_array ( $views ) ) {
		
			foreach ( $views as $viewsEach ) {
				
				$this->load->view ( $viewsEach );
			}
		}
		
		else {
			
			$this->load->view ( $views );
		}
	}
}
?>