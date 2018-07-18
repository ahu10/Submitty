<?php

namespace app\models;
use app\libraries\Core;

/**
 * Represents a button to display on the page
 * @package app\models
 * @method string getTitle()
 * @method string|null getSubtitle()
 * @method string getHref()
 * @method string getClass()
 * @method bool isDisabled()
 * @method bool isTitleOnHover()
 * @method float|null getProgress()
 */
class Button extends AbstractModel {
    /** @var string $title */
    protected $title;
    /** @var string|null $subtitle */
    protected $subtitle;
    /** @var string $href */
    protected $href;
    /** @var string $class */
    protected $class;
    /** @var bool $disabled */
    protected $disabled;
    /** @var float|null $progress */
    protected $progress;
    /** @var bool $title_on_hover */
    protected $title_on_hover;

    /**
     * @param Core $core
     * @param array $details
     */
    public function __construct(Core $core, array $details) {
        parent::__construct($core);
        $this->title    = $details["title"] ?? "";
        $this->subtitle = $details["subtitle"] ?? null;
        $this->href     = $details["href"] ?? "";
        $this->class    = $details["class"] ?? "btn";
        $this->disabled = $details["disabled"] ?? false;
        $this->progress = $details["progress"] ?? null;
        if ($this->progress !== null) {
            $this->progress = floatval($this->progress);
        }
        $this->title_on_hover = $details["title_on_hover"] ?? false;
    }

}