<?php
namespace App\Components;

use InvalidArgumentException;

class Response
{
    private $file = '';
    private $data = [];

    public function __construct(string $filename, array $data)
    {
        if (!file_exists(ROOT . DS . $this->file)) {
            throw new InvalidArgumentException();
        }
        $this->file = $filename;
        $this->data = $data;
    }

    /**
     * Renders the response and sends it to user of necessary
     * @param bool $return
     * @return string
     */
    public function sendResponse(bool $return = false)
    {
        ob_start();
        extract($this->data);
        include ROOT . DS . $this->file;
        $rendered = ob_get_clean();
        if ($return) {
            return $rendered;
        } else {
            echo $rendered;
            return '';
        }
    }
}