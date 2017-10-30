<?php
/**
 * Represents taxonomy 'terms' element.
 */
namespace KenticoCloud\Delivery\Models\Taxonomies;

/**
 * Class Term
 * @package KenticoCloud\Delivery\Models\Taxonomies
 */
class Term
{
    /**
     * Gets the name of the taxonomy term.
     * @var string
     */
    public $name = null;
    /**
     * Gets the codename of the taxonomy term.
     * @var string
     */
    public $codename = null;
    /**
     * TODO: DD
     * @var null
     */
    public $terms = null;

    /**
     * Term constructor.
     * @param $name
     * @param $codename
     * @param $terms
     */
    public function __construct($name, $codename, $terms)
    {
        $this->name = $name;
        $this->codename = $codename;
        $this->terms = $terms;
    }
}