<?php
/**
 * Page class
 * @author <maryna_haidashevska@gamil.com>
 * @created_at
 */
class Page3
{ 
	 /**
	* Title pf page
	* @var String $title
	*/
	private $title;
	/**
	 * Content for page
	 * @var [$string $content
	 */
	private $content;
    
    /**
     * Constructor for Page objects
     */
    public function __construct($title, $content)
    {
    	$this->title = $title;
    	$this->content = $content;

    }

    /**
     * Get the title
     * @return [type] [description]
     */
    public function title()
    {
    	return $this->title;
    }

    public function content()
    {
    	return $this->content;
    }
// enad of class
}