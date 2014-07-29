<?php namespace Oak\Breadcrumbs;

class Breadcrumbs
{


    private $crumbs = [];
    private $divider = "&rarr;";
    private $cssClass = "breadcrumb";
    private $dividerEnabled = false;

    public function __construct()
    {
    }

    /**
     * Add crumb, you can even pass URL::route('name')
     * @param $text
     * @param $url
     */
    public function addCrumb($text, $url = null)
    {
        $this->crumbs[] = array('text' => $text, 'url' => $url);
    }

    /**
     * Returns all crumbs
     * @return array
     */
    public function getAllCrumbs()
    {
        return $this->crumbs;
    }

    /**
     * Set the divider character
     * @param string $divider
     */
    public function setDivider($divider = "&rarr;")
    {
        $this->divider = $divider;
    }

    /**
     *  Enable the divider
     */
    public function enableDivider()
    {
        $this->dividerEnabled = true;
    }

    /**
     * Set which css class that should be added to the ul
     * @param string $class
     */
    public function setCssClass($class)
    {
        $this->cssClass = $class;
    }



    /**
     * Render all the breadcrumbs including the divider if enabled
     */
    public function render()
    {
        if (count($this->crumbs) > 0) :
            echo "<ul class='" . $this->cssClass . "'>";

            foreach ($this->crumbs as $key => $c) {
                if (0 !== $key && $this->dividerEnabled)
                    echo "<li class='divider'>" . $this->divider . "</li>";

                if(end($this->crumbs) == $c) {
                    echo "<li class='active'>".$c['text'] . "</li>";
                } else {
                    echo "<li><a href='" . $c['url'] . "'>" . $c['text'] . "</a></li>";
                }
            }
            echo "</ul>";

        endif;


    }


}