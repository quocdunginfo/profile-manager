<?php
class Qdanchor extends ActiveRecord\Model
{
	static $has_many = array(
        array('profiles', 'class_name' => 'Qdprofile', 'through' => 'profile_anchors'),
        array('profile_anchors', 'class_name' => 'Qdprofile_anchor')
    );
	
	# explicit table name since our table is not "books" 
    static $table_name = 'wp_qd_qdanchor';
  
    # explicit pk since our pk is not "id" 
    static $primary_key = 'id';
	
	static $before_update = array('on_before_update'); # new records only
	
	public function on_before_update()
	{
		//$this->date_modified = $dt = new DateTime();
	}
    
    static $before_create = array('on_before_create'); # new records only
	
	public function on_before_create()
	{
		//$this->date_create = $dt = new DateTime();
	}
}

