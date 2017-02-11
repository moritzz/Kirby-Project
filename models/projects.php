<?php

/**
* Basic Projects model
*/

class ProjectsPage extends Page {
  
  // Forces reverse ordering of Projects
  
  public function children() {
    return parent::children()->sortBy('date', 'desc');
  }
  
}