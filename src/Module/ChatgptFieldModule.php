<?php

namespace Admin\ContaoExtensionChatgptField\Module;

class ChatGptFieldModule extends \Module
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_chatgptfield';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['helloWorld'][0]).' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name ;
            $template -> href = 'counting/main.php?do=themes&table=tl_module&act=edit&id=' . $this -> id ;

            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generates the module.
     */
    protected function compile()
    {
        $this->Template->message = 'Hello World';
    }
}