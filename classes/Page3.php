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
	private $content; // members or attributes 
    
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
     * @return title
     */
    public function title() // title -  method
    {
    	return $this->title;
    }
    
    /**
     * Get the content of the page
     * @return content
     */
    public function content()
    {
    	return $this->content;
    }

    /**
     * setTitle for the page
     * @return  VOID
     */
    public function setTitle($title)
    {
      $this->title = $title;
    }
    
    /**
     * setContent for the page
     * @return  VOID
     */
    public function setContent($content)
    {
      $this->content = $content;
    }

// enad of class
}