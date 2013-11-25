<?php namespace Ekhaga\Breadcrumbs;

class Breadcrumbs
{


    private $crumbs = [];
    private $divider;
    private $cssClass;
    private $dividerEnabled = false;

    public function __construct()
    {
        $this->setCssClass();
        $this->setDivider();
    }

    /**
     * Add crumb, you can even pass URL::route('name')
     * @param $text
     * @param $url
     */
    public function addCrumb($text, $url)
    {
        $this->crumbs[] = array('text' => $text, 'url' => $url);
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
    public function setCssClass($class = 'breadcrumb')
    {
        $this->cssClass = $class;
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
     * Render all the breadcrumbs including the divider if enabled
     */
    public function render()
    {

        if (count($this->crumbs) > 0) :
            echo "<ul class='" . $this->cssClass . "'>";

            foreach ($this->crumbs as $key => $c) {
                if (0 !== $key && $this->dividerEnabled)
                    echo "<li class='divider'>" . $this->divider . "</li>";

                echo "<li><a href='" . $c['url'] . "'>" . $c['text'] . "</a></li>";

            }
            echo "</ul>";

        endif;


    }


}